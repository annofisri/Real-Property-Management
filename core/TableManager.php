<?php


require_once __DIR__ . '/db-config.php';


class TableManager
{
    private $db;
    public $rowCount = null;
    public $lastInsertId = null;

    public function __construct(private $table)
    {
        $this->table = $table;
        $this->db = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';', DB_USER, DB_PASS, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8", PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC));
    }

    public function getByPage($page = 1, $limit = 12)
    {

        $offset = ($page - 1) * $limit;

        $stmt = $this->db->prepare("SELECT * FROM $this->table LIMIT :limit OFFSET :offset");
        $stmt->bindValue(':limit', (int) $limit, PDO::PARAM_INT);
        $stmt->bindValue(':offset', (int) $offset, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function getAll($page = null, $limit = null)
    {
        if ($page && $limit) {
            return $this->getByPage($page, $limit);
        }

        $stmt = $this->db->prepare("SELECT * FROM $this->table");
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function getById($id)
    {
        $stmt = $this->db->prepare("SELECT * FROM $this->table WHERE id=:id");
        $stmt->bindValue(':id', (int) $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch();
    }

    public function deleteById($id)
    {
        $stmt = $this->db->prepare("DELETE FROM $this->table WHERE id=:id");
        $stmt->bindValue(':id', (int) $id, PDO::PARAM_INT);
        return $stmt->execute();
    }

    public function updateById($id, $data)
    {
        $sql = "UPDATE $this->table SET ";
        //UPDATE USERS SET name=:name, email=:email, password=:password WHERE id=:id
        foreach ($data as $key => $value) {
            $sql .= "$key=:$key,";
        }
        $sql = rtrim($sql, ',');
        $sql .= " WHERE id=:id";
        $stmt = $this->db->prepare($sql);
        foreach ($data as $key => $value) {
            $stmt->bindValue(":$key", $value);
        }
        $stmt->bindValue(':id', (int) $id, PDO::PARAM_INT);
        $result = $stmt->execute();
        if ($result) {
            $this->rowCount = $stmt->rowCount();
        }
        return $result;
    }

    public function addNew($data)
    {
        //INSERT INTO USERS (name, email, password) VALUES (:name, :email, :password)
        $sql = "INSERT INTO $this->table (";
        foreach ($data as $key => $value) {
            $sql .= "$key,";
        }
        $sql = rtrim($sql, ',');
        $sql .= ") VALUES (";
        foreach ($data as $key => $value) {
            $sql .= ":$key,";
        }
        $sql = rtrim($sql, ',');
        $sql .= ")";
        $stmt = $this->db->prepare($sql);
        foreach ($data as $key => $value) {
            $stmt->bindValue(":$key", $value);
        }
        $result = $stmt->execute();
        if ($result) {
            $this->lastInsertId = $this->db->lastInsertId();
        }
        return $this->lastInsertId;
    }

    public function getProperties($settings)
    {

        $conditions = $settings['where'] ?? null;

        $buildConditions = ($conditions) ? $this->_buildWhereClause($conditions) : '';

        $where = '';
        $params = [];

        if (is_array($buildConditions)) {
            $where = 'WHERE ' . $buildConditions['where'];
            $params = $buildConditions['params'];
        }

        $order_by = $settings['order_by'] ?? 'id DESC';
        $page = $settings['page'] ?? 1;
        $limit = $settings['limit'] ?? 10000000;

        $page = (int)$page;
        $limit = (int)$limit;

        $offset = ($page - 1) * $limit;

        $_params = [
            ':limit' => $limit,
            ':offset' => $offset,
        ];

        $params = array_merge($params, $_params);

        $sql = "SELECT 
        p.id, 
        p.name, 
        p.category_id, 
        p.type, 
        p.address, 
        p.gated_community, 
        p.bedroom,
        p.bathroom,
        p.storey,
        p.security,
        p.swimming_pool,
        p.gym,
        p.monthly_rental,
        p.contract_term,
        p.other_information,
        p.images,
        p.videos,
        p.owner_id,
        p.approve_status,
        p.visibility_status,
        p.price,
        p.default_image,
        p.created_at,
        p.updated_at,
        p.city_id,
        p.is_featured,
        p.is_new,
        po.name as owner_name,
        po.email,
        po.phone_number,
        po.address as owner_address,
        po.dob,
        po.profession,
        ci.name as city_name,
        ci.district_id,
        di.name as district_name,
        di.province_id,
        pr.name as province_name,
        cat.name as category_name
        FROM properties p
        INNER JOIN property_owners po ON po.id = p.owner_id
        INNER JOIN cities ci ON ci.id = p.city_id
        INNER JOIN districts di ON di.id = ci.district_id
        INNER JOIN provinces pr ON pr.id = di.province_id
        INNER JOIN categories cat ON cat.id = p.category_id
        $where ORDER BY $order_by LIMIT :limit OFFSET :offset";

        $stmt = $this->db->prepare($sql);

        foreach ($params as $paramName => $paramValue) {
            if (in_array($paramName, [':limit', ':offset'])) {
                $stmt->bindValue($paramName, $paramValue, PDO::PARAM_INT);
            } else {
                $stmt->bindValue($paramName, $paramValue);
            }
        }

        // echo $sql;

        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function query($sql, $params=[]){
        $stmt = $this->db->prepare($sql);
        foreach ($params as $paramName => $paramValue) {
            if (in_array($paramName, [':limit', ':offset'])) {
                $stmt->bindValue($paramName, $paramValue, PDO::PARAM_INT);
            } else {
                $stmt->bindValue($paramName, $paramValue);
            }
        }
        $stmt->execute();
        return $stmt->fetchAll();
    }

    private function _buildWhereClause($conditions)
    {
        if (!is_array($conditions)) {
            return '';
        }

        $where = '';
        $params = [];

        foreach ($conditions as $key => $value) {
            $rand = 'P_' . rand(1000, 9999);
            if (!is_array($value) and strpos($value, '%LIKE%') !== false) {
                $likeValue = str_replace('%LIKE%', '', $value);
                // Handle LIKE clause
                $where .= "$key LIKE :$rand AND ";
                $params[":$rand"] = '%' . $likeValue . '%';
            } elseif (is_array($value)) {
                $placeholders = implode(', ', array_map(function ($val) use ($rand, &$params) {
                    $paramName = ":{$rand}_" . count($params);
                    $params[$paramName] = $val;
                    return $paramName;
                }, $value));

                $where .= "$key IN ($placeholders) AND ";
            } else {
                // Handle simple key-value pairs with AND
                $where .= "$key = :$rand AND ";
                $params[":$rand"] = $value;
            }
        }

        // Remove the trailing 'AND' from the where clause
        $where = rtrim($where, 'AND ');

        return ['where' => $where, 'params' => $params];
    }

    public function getCities()
    {

        $sql = "SELECT 
        ci.id as city_id,
        ci.name as city_name,
        ci.district_id as district_id,
        di.name as district_name,
        di.province_id as province_id,
        pr.name as province_name
        FROM cities ci
        INNER JOIN districts di ON di.id = ci.district_id
        INNER JOIN provinces pr ON pr.id = di.province_id
        ";
        $stmt = $this->db->prepare($sql);

        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function uploadFiles($files)
    {
        if (!isset($files["files"])) {
            return null;
        }

        $uploadedFiles = ['images' => null, 'videos' => null];

        $images_filename = [];
        $videos_filename = [];

        $files = $files['files'];
        // var_dump($files);

        // Loop through each file
        foreach ($files["name"] as $key => $value) {
            // Generate a unique filename using time() and rand()
            // var_dump($filename);
            $uniqueFilename = date('Y') . '_' . time() . '_' . rand(1000, 9999) . '_' . $files['name'][$key];
            // var_dump($file);
            // Define the target directory
            $targetDirectory = __DIR__ . "/../public/upload/";

            // Construct the full path for the uploaded file
            $targetFilePath = $targetDirectory . $uniqueFilename;

            // var_dump($image);

            // Check if the file was uploaded successfully
            if (move_uploaded_file($files["tmp_name"][$key], $targetFilePath)) {
                // Determine the file type (image or video) based on the file extension
                $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

                // Categorize the uploaded file
                if (in_array($fileType, ['jpg', 'jpeg', 'png', 'gif'])) {
                    // It's an image
                    $images_filename[] = $uniqueFilename;
                } elseif (in_array($fileType, ['mp4', 'mov', 'avi'])) {
                    // It's a video
                    $videos_filename[] = $uniqueFilename;
                }
            }
        }

        $uploadedFiles['images'] = implode(',', $images_filename);
        $uploadedFiles['videos'] = implode(',', $videos_filename);

        return $uploadedFiles;
    }
}
