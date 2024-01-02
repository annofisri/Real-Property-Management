<?php

require_once __DIR__ . '/../../core/TableManager.php';

header('Content-Type: application/json');
session_start();

$tableFaqs = new TableManager('faqs');

$output = [
  'success' => false,
  'data' => null,
  'message' => ''
];



//get all
if (isset($_GET['action']) && $_GET['action'] == 'getAll') {
  // $page = $_GET['page'] ?? 1;
  // $limit = $_GET['limit'] ?? 12;

  // // restrict maximum items(ie. FAQ) fetched to 100
  // if ($limit > 100) {
  //     $limit = 100;
  // }
  $result = $tableFaqs->getAll();
  $output['success'] = true;
  $output['data'] = $result;
  $output['message'] = 'FAQs fetched successfully';

  echo json_encode($output);
  exit;
}



//delete by id
if (isset($_GET['action']) && $_GET['action'] == 'deleteById' && isset($_GET['id'])) {
  $result = $tableFaqs->deleteById($_GET['id']);
  $output['success'] = true;
  $output['data'] = $result;
  $output['message'] = 'FAQ deleted successfully';
  echo json_encode($output);
  exit;
}




//get by id
if (isset($_GET['action']) && $_GET['action'] == 'getById' && isset($_GET['id'])) {

  $result = $tableFaqs->getById($_GET['id']);
  $output['success'] = true;
  $output['data'] = $result;
  $output['message'] = 'FAQ fetched successfully';

  echo json_encode($output);
  exit;
}


//update by id
if (isset($_GET['action']) && $_GET['action'] == 'updateById' && isset($_GET['id'])) {
  //TODO: update FAQ by id
  //TODO: check user login status

  $data = [];
  $data['id'] = $_GET['id'] ?? null;
  $data['question'] = $_POST['question'] ?? null;
  $data['answer'] = $_POST['answer'] ?? null;

  //required fields : id, name
  if (!$data['id'] || !$data['question'] || !$data['answer']) {
    $output['message'] = 'Required fields are missing';
    echo json_encode($output);
    exit;
  }

  $result = $tableFaqs->updateById($data['id'], $data);
  $output['success'] = true;
  $output['data'] = $result;
  $output['message'] = 'FAQ updated successfully';
  echo json_encode($output);
  exit;
}

//add new
if (isset($_GET['action']) && $_GET['action'] == 'addNew') {
  // TODO: add new FAQ
  // TODO: check user login status
  $data = [];
  $data['question'] = $_POST['question'] ?? null;
  $data['answer'] = $_POST['answer'] ?? null;

  if (!$data['question'] || !$data['answer']) {
    $output['message'] = 'Required fields are missing';
    echo json_encode($output);
    exit;
  }

  $result = $tableFaqs->addNew($data);
  $output['success'] = true;
  $output['data'] = $result;
  $output['message'] = 'FAQ added successfully';
  echo json_encode($output);
  exit;
}


echo json_encode($output);
