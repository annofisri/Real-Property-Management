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


//get all properties
if (isset($_GET['action']) && $_GET['action'] == 'getAll') {
    // $page = $_GET['page'] ?? 1;
    // $limit = $_GET['limit'] ?? 12;

    // // restrict maximum items(ie. property) fetched to 100
    // if ($limit > 100) {
    //     $limit = 100;
    // }
    $result = $tableProperty->getAll();
    $output['success'] = true;
    $output['data'] = $result;
    $output['message'] = 'Properties fetched successfully';

    echo json_encode($output);
    exit;
}


//get Similar properties
if (isset($_GET['action']) && $_GET['action'] == 'getSimilarProperties' && isset($_GET['id'])) {
    // $page = $_GET['page'] ?? 1;
    // $limit = $_GET['limit'] ?? 12;

    // // restrict maximum items(ie. property) fetched to 100
    // if ($limit > 100) {
    //     $limit = 100;
    // }
    $result = $tableProperty->getAll(1, 3);
    $output['success'] = true;
    $output['data'] = $result;
    $output['message'] = 'Properties fetched successfully';

    echo json_encode($output);
    exit;
}

//get property by id
if (isset($_GET['action']) && $_GET['action'] == 'getById' && isset($_GET['id'])) {

    $result = $tableProperty->getById($_GET['id']);
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
    $data['images'] = null;
    $data['videos'] = $_FILES['videos'] ?? null;
    $data['owner_id'] = $_POST['owner_id'] ?? null;
    $data['approve_status'] = $_POST['approve_status'] ?? 'pending'; //pending, approved, rejected
    $data['visibility_status'] = $_POST['visibility_status'] ?? 0;
    $data['price'] = $_POST['price'] ?? 0.00;
    $data['default_image'] = $_FILES['default_image'] ?? null;
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


echo json_encode($output);
