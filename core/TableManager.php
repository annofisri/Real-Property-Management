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
}
