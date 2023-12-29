<?php

require_once __DIR__ . '/../../core/TableManager.php';

$tableLead = new TableManager('leads');
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
    $result = $tableLead->getAll();
    $success = 'Leads fetched successfully';
    $output['success'] = true;
    $output['data'] = $result;
    $output['message'] = $success;
} else {
    $output['error'] = $errors;
    $output['message'] = 'Failed to fetch leads';
}

header('Content-Type: application/json');
echo json_encode($output, JSON_PRETTY_PRINT);
