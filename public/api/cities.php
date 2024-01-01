<?php
header('Content-Type: application/json');

require_once __DIR__ . '/../../core/TableManager.php';

$tableCities = new TableManager('cities');
$data = [];

$output = [
  'success' => false,
  'error' => [],
  'data' => null,
  'message' => null
];

$errors = [];
$success = '';

if (empty($errors)) {
  $result = $tableCities->getCities();
  $success = 'Cities fetched successfully';
  $output['success'] = true;
  $output['data'] = $result;
  $output['message'] = $success;
} else {
  $output['error'] = $errors;
  $output['message'] = 'Failed to fetch cities';
}

echo json_encode($output, JSON_PRETTY_PRINT);
