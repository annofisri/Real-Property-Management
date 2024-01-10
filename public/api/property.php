<?php

require_once __DIR__ . '/../../core/TableManager.php';

header('Content-Type: application/json');
session_start();

$tableProperty = new TableManager('properties');

$output = [
    'success' => false,
    'data' => null,
    'message' => ''
];


//get all
if (isset($_GET['action']) && $_GET['action'] == 'getAll') {
    // $page = $_GET['page'] ?? 1;
    // $limit = $_GET['limit'] ?? 12;

    // // restrict maximum items(ie. property) fetched to 100
    // if ($limit > 100) {
    //     $limit = 100;
    // }
    $result = $tableProperty->getProperties([]);
    $output['success'] = true;
    $output['data'] = $result;
    $output['message'] = 'Properties fetched successfully';

    echo json_encode($output);
    exit;
}

// approve property
if (isset($_POST['action']) && $_POST['action'] == 'approveOrRejectProperty' && isset($_POST['id'])) {
    $data = [];
    $data['approve_status'] = $_POST['status'];
    $data['meta_title'] = $_POST['meta_title'] ?? null;
    $data['meta_description'] = $_POST['meta_description'] ?? null;
    $result = $tableProperty->updateById($_POST['id'], $data);
    $output['success'] = true;
    $output['data'] = $result;
    $output['message'] = 'Property approved successfully';

    echo json_encode($output);
    exit;
}

//delete by id
if (isset($_GET['action']) && $_GET['action'] == 'deleteById' && isset($_GET['id'])) {
    $result = $tableProperty->deleteById($_GET['id']);
    $output['success'] = true;
    $output['data'] = $result;
    $output['message'] = 'Property deleted successfully';
    echo json_encode($output);
    exit;
}


//get Similar properties
if (isset($_GET['action']) && $_GET['action'] == 'getSimilarProperties' && isset($_GET['id'])) {

    $property_id = $_GET['id'];
    $thisProperty = $tableProperty->getById($property_id);

    $settings = [
        'where' => ['approve_status' => 'approved', 'visibility_status' => 1, 'category_id' => $thisProperty['category_id'], 'type' => $thisProperty['type'], 'city_id' => $thisProperty['city_id']],
        'limit' => 4,
    ];
    $result1 = $tableProperty->getProperties($settings);
    $result2 = $tableProperty->getProperties([
        'where' => ['approve_status' => 'approved', 'visibility_status' => 1],
        'limit' => 4,
    ]);
    $result = array_merge($result1, $result2);

    //get only 4 properties
    $result = array_slice($result, 0, 4);
    $output['success'] = true;
    $output['data'] = $result;
    $output['message'] = 'Properties fetched successfully';

    echo json_encode($output);
    exit;
}

//get property by id
if (isset($_GET['action']) && $_GET['action'] == 'getById' && isset($_GET['id'])) {
    $settings = ['where' => ['p.id' => $_GET['id']]];
    $result = $tableProperty->getProperties($settings);
    if (!empty($result)) {
        $result = $result[0];
    }
    $output['success'] = true;
    $output['data'] = $result;
    $output['message'] = 'Property fetched successfully';

    echo json_encode($output);
    exit;
}


//delete by id
if (isset($_GET['action']) && $_GET['action'] == 'deleteById' && isset($_GET['id'])) {
    //TODO: delete property by id
    //TODO: check user login status
    echo 'deleteById';
    exit;
}

//update by id
if (isset($_GET['action']) && $_GET['action'] == 'updateById' && isset($_GET['id'])) {
    //TODO: update property by id
    //TODO: check user login status

    $thisProperty = $tableProperty->getById($_GET['id']);

    $data = [];
    $data['id'] = $_GET['id'] ?? null;
    $data['name'] = $_POST['name'] ?? null;
    $data['category_id'] = $_POST['category_id'] ?? null;
    $data['type'] = $_POST['type'] ?? null;
    $data['address'] = $_POST['address'] ?? null;
    $data['gated_community'] = $_POST['gated_community'] ?? 0;
    $data['bedroom'] = $_POST['bedroom'] ?? 0;
    $data['bathroom'] = $_POST['bathroom'] ?? 0;
    $data['storey'] = $_POST['storey'] ?? 0;
    $data['security'] = $_POST['security'] ?? 0;
    $data['swimming_pool'] = $_POST['swimming_pool'] ?? 0;
    $data['gym'] = $_POST['gyms'] ?? 0;
    $data['monthly_rental'] = $_POST['monthly_rent'] ?? 0.00;
    $data['contract_term'] = $_POST['contract_term'] ?? null;
    $data['other_information'] = $_POST['other_information'] ?? null;
    $data['images'] = null;
    $data['videos'] = $_FILES['videos'] ?? null;
    $data['owner_id'] = $_POST['owner_id'] ?? null;
    $data['approve_status'] = $_POST['approve_status'] ?? 'pending'; //pending, approved, rejected
    $data['visibility_status'] = $_POST['visibility_status'] ?? 0;
    $data['price'] = $_POST['price'] ?? 0.00;
    $data['default_image'] = $_FILES['default_image'] ?? null;
    $data['city_id'] = $_POST['city_id'] ?? null;

    // check if we are adding new files or not
    if (empty($_FILES['files']['name'][0])) {
        $data['images'] = $thisProperty['images'];
        $data['videos'] = $thisProperty['videos'];
    } else {
        $uploadedFiles = $tableProperty->uploadFiles($_FILES);

        //check if uploaded files is null or not
        if ($uploadedFiles) {
            //check if images exists in database or not
            if (empty($thisProperty['images'])) {
                $data['images'] = $uploadedFiles['images'];
                //set default image to first image because the default image in this case was a placeholder image
                $_default = explode(',', $uploadedFiles['images']);
                if (isset($_default[0])) {
                    $default_image = $_default[0];
                }
                $data['default_image'] = $default_image;
            } else {
                $data['images'] = $thisProperty['images'] . ',' . $uploadedFiles['images'];
            }

            //check if videos exists in database or not
            if (empty($thisProperty['videos'])) {
                $data['videos'] = $uploadedFiles['videos'];
            } else {
                $data['videos'] = $thisProperty['videos'] . ',' . $uploadedFiles['videos'];
            }
        }
    }

    //required fields : id, name, category_id, type, address, price, city_id, owner_id
    if (!$data['id'] || !$data['name'] || !$data['category_id'] || !$data['type'] || !$data['address'] || !$data['price'] || !$data['city_id'] || !$data['owner_id']) {
        $output['message'] = 'Required fields are missing';
        echo json_encode($output);
        exit;
    }

    $result = $tableProperty->updateById($data['id'], $data);
    $output['success'] = true;
    $output['data'] = $result;
    $output['message'] = 'Property updated successfully';
    echo json_encode($output);
    exit;
}

//add new property
if (isset($_GET['action']) && $_GET['action'] == 'addNew') {
    // TODO: add new property
    // TODO: check user login status
    $data = [];
    $data['name'] = $_POST['name'] ?? null;
    $data['category_id'] = $_POST['category_id'] ?? null;
    $data['type'] = $_POST['type'] ?? null;
    $data['address'] = $_POST['address'] ?? null;
    $data['gated_community'] = $_POST['gated_community'] ?? 0;
    $data['bedroom'] = $_POST['bedroom'] ?? 0;
    $data['bathroom'] = $_POST['bathroom'] ?? 0;
    $data['storey'] = $_POST['storey'] ?? 0;
    $data['security'] = $_POST['security'] ?? 0;
    $data['swimming_pool'] = $_POST['swimming_pool'] ?? 0;
    $data['gym'] = $_POST['gyms'] ?? 0;
    $data['monthly_rental'] = $_POST['monthly_rent'] ?? 0.00;
    $data['contract_term'] = $_POST['contract_term'] ?? null;
    $data['other_information'] = $_POST['other_information'] ?? null;
    $uploadedFiles = $tableProperty->uploadFiles($_FILES);
    $data['images'] = $uploadedFiles['images'];
    $data['videos'] = $uploadedFiles['videos'];
    $data['owner_id'] = $_POST['owner_id'] ?? null;
    $data['approve_status'] = $_POST['approve_status'] ?? 'pending'; //pending, approved, rejected
    $data['visibility_status'] = $_POST['visibility_status'] ?? 1;
    $data['price'] = $_POST['price'] ?? 0.00;
    $default_image = 'placeholder.jpg';
    $_default = explode(',', $uploadedFiles['images']);
    if (isset($_default[0])) {
        $default_image = $_default[0];
    }
    $data['default_image'] = $default_image;
    $data['city_id'] = $_POST['city_id'] ?? null;

    //required fields : name, category_id, type, address, price, city_id, owner_id
    if (!$data['name'] || !$data['category_id'] || !$data['type'] || !$data['address'] || !$data['price'] || !$data['city_id'] || !$data['owner_id']) {
        $output['message'] = 'Required fields are missing';
        echo json_encode($output);
        exit;
    }

    $result = $tableProperty->addNew($data);
    $output['success'] = true;
    $output['data'] = $result;
    $output['message'] = 'Property added successfully';
    echo json_encode($output);
    exit;
}

//get featured properties
if (isset($_GET['getFeaturedProperties'])) {
    $settings = [
        'where' => ['approve_status' => 'approved', 'visibility_status' => 1, 'is_featured' => 1]
    ];
    $result = $tableProperty->getProperties($settings);
    $output['success'] = true;
    $output['data'] = $result;
    $output['message'] = 'Properties fetched successfully';

    echo json_encode($output);
    exit;
}

//get new properties
if (isset($_GET['getNewProperties'])) {
    $settings = [
        'where' => ['approve_status' => 'approved', 'visibility_status' => 1, 'is_new' => 1]
    ];
    $result = $tableProperty->getProperties($settings);
    $output['success'] = true;
    $output['data'] = $result;
    $output['message'] = 'Properties fetched successfully';

    echo json_encode($output);
    exit;
}

//filter properties based on category, type, search, 
if (isset($_GET['filterProperty'])) {

    $where = 'WHERE 1=1 AND ';
    $params = [];

    $types = $_GET['type'] ?? [];
    if (!empty($types)) {
        if(isset($types[0]) AND $types[0] == 'all'){

        }else{

            $placeholders = implode(', ', array_map(function ($type) use (&$params) {
                $paramName = ":type_" . count($params);
                $params[$paramName] = $type;
                return $paramName;
            }, $types));
    
            $where .= "type IN ($placeholders) AND ";
        }
    }

    $category_ids = $_GET['category_id'] ?? [];
    if (!empty($category_ids)) {
        $placeholders = implode(', ', array_map(function ($category_id) use (&$params) {
            $paramName = ":category_id_" . count($params);
            $params[$paramName] = $category_id;
            return $paramName;
        }, $category_ids));

        $where .= "category_id IN ($placeholders) AND ";
    }

    $isFeatured = isset($_GET['is_featured']) ? true : false;
    if ($isFeatured) {
        $where .= "is_featured = 1 AND ";
    }

    $isNew = isset($_GET['is_new']) ? true : false;
    if ($isNew) {
        $where .= "is_new = 1 AND ";
    }

    $minPrice = $_GET['min'] ?? 0;
    $minPrice = (int)$minPrice;
    if($minPrice > 0){
        $where .= "price >= :min AND ";
        $params[":min"] = $minPrice;
    }
    
    $maxPrice = $_GET['max'] ?? 0;
    $maxPrice = (int)$maxPrice;
    if($maxPrice > 0){
        $where .= "price <= :max AND ";
        $params[":max"] = $maxPrice;
    }

    $searchProperty = $_GET['searchProperty'] ?? false;
    if ($searchProperty) {
        $where .= "(p.name LIKE :search OR p.address LIKE :search OR ci.name LIKE :search OR di.name LIKE :search OR pr.name LIKE :search OR p.id = :id) AND ";
        $params[":search"] = '%' . $searchProperty . '%';
        $params[":id"] = $searchProperty;
    }

    $where .= "approve_status=:approve_status AND visibility_status = 1 AND ";
    $params[':approve_status'] = 'approved';

    // Remove the trailing 'AND' from the where clause
    $where = rtrim($where, 'AND ');

    $sortBy = $_GET['sortBy'] ?? '';

    $order_by = match ($sortBy) {
        'price-low-high' => 'price ASC',
        'price-high-low' => 'price DESC',
        'property-asc'   => 'p.id ASC',
        'property-desc'  => 'p.id DESC',
        default          => 'p.id DESC'
    };

    $page = $_GET['page'] ?? 1;
    $limit = $_GET['limit'] ?? 12;

    $page = (int)$page;
    $limit = (int)$limit;

    if($limit > 100){
        $limit = 100;
    }

    $offset = ($page - 1) * $limit;

    $params[':limit'] = $limit;
    $params[':offset'] = $offset;

    $sql = "SELECT p.id, p.name, p.category_id, p.type, p.address, p.gated_community, p.bedroom, p.bathroom, p.storey, p.security, p.swimming_pool, p.gym, p.monthly_rental, p.contract_term, p.other_information, p.images, p.videos, p.owner_id, p.approve_status, p.visibility_status, p.price, p.default_image, p.created_at, p.updated_at, p.city_id, p.is_featured, p.is_new, po.name as owner_name, po.email, po.phone_number, po.address as owner_address, po.dob, po.profession, ci.name as city_name, ci.district_id, di.name as district_name, di.province_id, pr.name as province_name, cat.name as category_name 
    FROM properties p 
    INNER JOIN property_owners po ON po.id = p.owner_id 
    INNER JOIN cities ci ON ci.id = p.city_id 
    INNER JOIN districts di ON di.id = ci.district_id 
    INNER JOIN provinces pr ON pr.id = di.province_id 
    INNER JOIN categories cat ON cat.id = p.category_id 
    $where 
    ORDER BY $order_by 
    LIMIT :limit OFFSET :offset";

    $result = $tableProperty->query($sql, $params);
    
    $sql = "SELECT COUNT(p.id) as total_property 
    FROM properties p 
    INNER JOIN property_owners po ON po.id = p.owner_id 
    INNER JOIN cities ci ON ci.id = p.city_id 
    INNER JOIN districts di ON di.id = ci.district_id 
    INNER JOIN provinces pr ON pr.id = di.province_id 
    INNER JOIN categories cat ON cat.id = p.category_id 
    $where 
    ORDER BY $order_by";

    unset($params[':limit']);
    unset($params[':offset']);

    $total_property = $tableProperty->query($sql, $params);

    $total_property_count = $total_property[0]['total_property'];

    $pagination = ['current_page'=>$page, 'total_property'=>$total_property_count];

    if (!$result) {
        $output['success'] = false;
        $output['data'] = null;
        $output['message'] = 'No properties found';
        $output['pagination'] = $pagination;
        echo json_encode($output);
        exit;
    }
    $output['success'] = true;
    $output['data'] = $result;
    $output['message'] = 'Properties fetched successfully';
    $output['pagination'] = $pagination;

    echo json_encode($output);
    exit;
}


//delete media files by proeprty id, media type and media file name
if (isset($_GET['action']) && $_GET['action'] == 'deleteMedia') {

    $data = [];

    $property_id = $_POST['property_id'] ?? null;
    $media_type = $_POST['file_type'] ?? null;
    $media_file_name = $_POST['file_name'] ?? null;

    $thisProperty = $tableProperty->getById($property_id);

    if (!$property_id || !$media_type || !$media_file_name || empty($thisProperty)) {
        $output['success'] = false;
        $output['data'] = null;
        $output['message'] = 'Invalid Request';
        echo json_encode($output);
        exit;
    }

    if ($media_type == 'image') {
        $images = explode(',', $thisProperty['images']);
        $images = array_diff($images, [$media_file_name]);
        $images = implode(',', $images);
        $data['images'] = $images;
    } else if ($media_type == 'video') {
        $videos = explode(',', $thisProperty['videos']);
        $videos = array_diff($videos, [$media_file_name]);
        $videos = implode(',', $videos);
        $data['videos'] = $videos;
    }
    $result = $tableProperty->updateById($property_id, $data);
    if (!$result) {
        $output['success'] = false;
        $output['data'] = null;
        $output['message'] = 'Operation failed';
        echo json_encode($output);
        exit;
    }

    // unlink(__DIR__ . '/../public/upload/' . $media_file_name);
    $output['success'] = true;
    $output['data'] = $result;
    $output['message'] = 'Media file deleted successfully';
    echo json_encode($output);
    exit;
}

//get property you may like
if (isset($_GET['action']) && $_GET['action'] == 'getPropertyYouMayLike') {

    $result = $tableProperty->getProperties([
        'where' => ['approve_status' => 'approved', 'visibility_status' => 1],
        'limit' => 4,
    ]);
    $output['success'] = true;
    $output['data'] = $result;
    $output['message'] = 'Properties fetched successfully';

    echo json_encode($output);
    exit;
}


echo json_encode($output);
