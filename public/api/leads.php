<?php

require_once __DIR__ . '/../../core/TableManager.php';

header('Content-Type: application/json');
session_start();

$tableLeads = new TableManager('leads');

$output = [
  'success' => false,
  'data' => null,
  'message' => ''
];



//get all
if (isset($_GET['action']) && $_GET['action'] == 'getAll') {
  // $page = $_GET['page'] ?? 1;
  // $limit = $_GET['limit'] ?? 12;

  // // restrict maximum items(ie. Lead) fetched to 100
  // if ($limit > 100) {
  //     $limit = 100;
  // }
  $result = $tableLeads->getAll();
  $result = array_reverse($result);
  $output['success'] = true;
  $output['data'] = $result;
  $output['message'] = 'Leads fetched successfully';

  echo json_encode($output);
  exit;
}



//delete by id
if (isset($_GET['action']) && $_GET['action'] == 'deleteById' && isset($_GET['id'])) {
  $result = $tableLeads->deleteById($_GET['id']);
  $output['success'] = true;
  $output['data'] = $result;
  $output['message'] = 'Lead deleted successfully';
  echo json_encode($output);
  exit;
}




//get by id
if (isset($_GET['action']) && $_GET['action'] == 'getById' && isset($_GET['id'])) {

  $result = $tableLeads->getById($_GET['id']);
  $output['success'] = true;
  $output['data'] = $result;
  $output['message'] = 'Lead fetched successfully';

  echo json_encode($output);
  exit;
}


//update by id
if (isset($_GET['action']) && $_GET['action'] == 'updateById' && isset($_GET['id'])) {
  //TODO: update Lead by id
  //TODO: check user login status

  $data = [];
  $data['type'] = $_GET['type'] ?? 'contact-us';
  $data['id'] = $_GET['id'] ?? null;
  $data['first_name'] = $_POST['first_name'] ?? null;
  $data['last_name'] = $_POST['last_name'] ?? null;
  $data['email'] = $_POST['email'] ?? null;
  $data['phone_number'] = $_POST['phone_number'] ?? null;
  $data['message'] = $_POST['message'] ?? null;




  if (!$data['id'] || !$data['first_name'] || !$data['last_name'] || !$data['email'] || !$data['message']) {
    $output['message'] = 'Required fields are missing';
    echo json_encode($output);
    exit;
  }


  $result = $tableLeads->updateById($data['id'], $data);
  $output['success'] = true;
  $output['data'] = $result;
  $output['message'] = 'Lead updated successfully';
  echo json_encode($output);
  exit;
}

//add new
if (isset($_GET['action']) && $_GET['action'] == 'addNew') {
  // TODO: add new Lead
  // TODO: check user login status
  $data = [];
  $data['type'] = $_GET['type'] ?? 'contact-us';
  $data['first_name'] = $_POST['first_name'] ?? null;
  $data['last_name'] = $_POST['last_name'] ?? null;
  $data['email'] = $_POST['email'] ?? null;
  $data['phone_number'] = $_POST['phone_number'] ?? null;
  $data['message'] = $_POST['message'] ?? null;


  if (!$data['first_name'] || !$data['last_name'] || !$data['email'] || !$data['message']) {
    $output['message'] = 'Required fields are missing';
    echo json_encode($output);
    exit;
  }


  if ($data['type'] == "property-inquiry") {
    $data["property_id"] = $_POST["property_id"] ?? null;
    if (!$data["property_id"]) {
      $output['message'] = 'Required fields are missing';
      echo json_encode($output);
      exit;
    }
  }

  try {
    $result = $tableLeads->addNew($data);
    $output['success'] = true;
    $output['data'] = $result;
    $output['message'] = 'Message Sent successfully';
    if ($data['type'] == "property-inquiry") {
      $output['message'] = 'Property inquiry sent successfully';
    }
  } catch (PDOException $e) {
    if ($e->getCode() == 23000) {
      $output['success'] = false;
      $output['message'] = 'Integrity constraint violation';
    } else {
      $output['success'] = false;
      $output['message'] = 'An error occurred while sending message';
    }
  }
  echo json_encode($output);
  exit;
}


echo json_encode($output);
