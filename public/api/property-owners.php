<?php

require_once __DIR__ . '/../../core/TableManager.php';

header('Content-Type: application/json');
session_start();

$tableProperty = new TableManager('property_owners');

$output = [
    'success' => false,
    'data' => null,
    'message' => ''
];


//get all property_owners
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
    $output['message'] = 'Property Owners fetched successfully';

    echo json_encode($output);
    exit;
}

//get property by id
if (isset($_GET['action']) && $_GET['action'] == 'getById' && isset($_GET['id'])) {

    $result = $tableProperty->getById($_GET['id']);
    $output['success'] = true;
    $output['data'] = $result;
    $output['message'] = 'Property Owner fetched successfully';

    echo json_encode($output);
    exit;
}


//delete by id
if (isset($_GET['action']) && $_GET['action'] == 'deleteById' && isset($_GET['id'])) {
    //TODO: delete property by id
    //TODO: check user login status

    $result = $tableProperty->deleteById($_GET['id']);
    $output['success'] = true;
    $output['data'] = $result;
    $output['message'] = 'Property Owner deleted successfully';
    echo json_encode($output);

    exit;
}

//update by id
if (isset($_GET['action']) && $_GET['action'] == 'updateById' && isset($_GET['id'])) {
    //TODO: update property by id
    //TODO: check user login status

    $data = [];
    $data['id'] = $_GET['id'] ?? null;
    $data['name'] = $_POST['name'] ?? null;
    $data['email'] = $_POST['email'] ?? null;
    $data['phone_number'] = $_POST['phone_number'] ?? null;
    $data['address'] = $_POST['address'] ?? null;
    $data['dob'] = $_POST['dob'] ?? null;
    $data['password'] = $_POST['password'] ?? null;
    $data['profession'] = $_POST['profession'] ?? null;


    //required fields : id, name, email, password
    if (!$data['id']) {
        $output['message'] = 'Id is required';
        echo json_encode($output);
        exit;
    }
    if (!$data['name']) {
        $output['message'] = 'Name is required';
        echo json_encode($output);
        exit;
    }
    if (!$data['email']) {
        $output['message'] = 'Email is required';
        echo json_encode($output);
        exit;
    }
    if (!$data['password']) {
        $output['message'] = 'Password is required';
        echo json_encode($output);
        exit;
    }



    $result = $tableProperty->updateById($data['id'], $data);
    $output['success'] = true;
    $output['data'] = $result;
    $output['message'] = 'Property Owner updated successfully';
    echo json_encode($output);
    exit;
}

//add new property
if (isset($_GET['action']) && $_GET['action'] == 'addNew') {
    // TODO: add new property
    // TODO: check user login status
    $data = [];
    $data['name'] = $_POST['name'] ?? null;
    $data['email'] = $_POST['email'] ?? null;
    $data['phone_number'] = $_POST['phone_number'] ?? null;
    $data['address'] = $_POST['address'] ?? null;
    $data['dob'] = $_POST['dob'] ?? null;
    $data['password'] = $_POST['password'] ?? null;
    $data['profession'] = $_POST['profession'] ?? null;

    //required fields : name, email, password
    if (!$data['name'] || !$data['email'] || !$data['password']) {
        $output['message'] = 'Required fields are missing';
        echo json_encode($output);
        exit;
    }

    $result = $tableProperty->addNew($data);
    $output['success'] = true;
    $output['data'] = $result;
    $output['message'] = 'Property Owner added successfully';
    echo json_encode($output);
    exit;
}


echo json_encode($output);
