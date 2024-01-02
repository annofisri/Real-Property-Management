<?php

require_once __DIR__ . '/../../core/TableManager.php';

header('Content-Type: application/json');
session_start();

$tableCategory = new TableManager('categories');

$output = [
  'success' => false,
  'data' => null,
  'message' => ''
];



//get all
if (isset($_GET['action']) && $_GET['action'] == 'getAll') {
  // $page = $_GET['page'] ?? 1;
  // $limit = $_GET['limit'] ?? 12;

  // // restrict maximum items(ie. Category) fetched to 100
  // if ($limit > 100) {
  //     $limit = 100;
  // }
  $result = $tableCategory->getAll();
  $output['success'] = true;
  $output['data'] = $result;
  $output['message'] = 'Categories fetched successfully';

  echo json_encode($output);
  exit;
}



//delete by id
if (isset($_GET['action']) && $_GET['action'] == 'deleteById' && isset($_GET['id'])) {
  $result = $tableCategory->deleteById($_GET['id']);
  $output['success'] = true;
  $output['data'] = $result;
  $output['message'] = 'Category deleted successfully';
  echo json_encode($output);
  exit;
}




//get by id
if (isset($_GET['action']) && $_GET['action'] == 'getById' && isset($_GET['id'])) {

  $result = $tableCategory->getById($_GET['id']);
  $output['success'] = true;
  $output['data'] = $result;
  $output['message'] = 'Category fetched successfully';

  echo json_encode($output);
  exit;
}


//update by id
if (isset($_GET['action']) && $_GET['action'] == 'updateById' && isset($_GET['id'])) {
  //TODO: update Category by id
  //TODO: check user login status

  $data = [];
  $data['id'] = $_GET['id'] ?? null;
  $data['name'] = $_POST['name'] ?? null;

  //required fields : id, name
  if (!$data['id'] || !$data['name']) {
    $output['message'] = 'Required fields are missing';
    echo json_encode($output);
    exit;
  }

  $result = $tableCategory->updateById($data['id'], $data);
  $output['success'] = true;
  $output['data'] = $result;
  $output['message'] = 'Category updated successfully';
  echo json_encode($output);
  exit;
}

//add new
if (isset($_GET['action']) && $_GET['action'] == 'addNew') {
  // TODO: add new Category
  // TODO: check user login status
  $data = [];
  $data['name'] = $_POST['name'] ?? null;

  if (!$data['name']) {
    $output['message'] = 'Required fields are missing';
    echo json_encode($output);
    exit;
  }

  $result = $tableCategory->addNew($data);
  $output['success'] = true;
  $output['data'] = $result;
  $output['message'] = 'Category added successfully';
  echo json_encode($output);
  exit;
}


echo json_encode($output);
