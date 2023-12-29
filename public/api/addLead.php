<?php

require_once __DIR__ . '/../../core/TableManager.php';




$tableLead = new TableManager('lead');
$data = [];

$output = [
    'success' => false,
    'error' => [],
    'data' => null,
    'message' => null
];


if (isset($_POST['btnSubmit'])) {
    $data['type'] = $_POST['type'] ?? 'contact_form';
    $data['first_name'] = $_POST['first_name'] ?? null;
    $data['last_name'] = $_POST['last_name'] ?? null;
    $data['email'] = $_POST['email'] ?? null;
    $data['phone_number'] = $_POST['phone_number'] ?? null;
    $data['message'] = $_POST['message'] ?? null;



    $errors = [];
    $success = '';

    if (!$data['first_name']) {
        $errors['first_name'] = 'First name is required';
    }
    if (!$data['last_name']) {
        $errors['last_name'] = 'Last name is required';
    }
    if (!$data['email']) {
        $errors['email'] = 'Email is required';
    }

    if (!$data['message']) {
        $errors['message'] = 'Message is required';
    }



    if (empty($errors)) {
        $result = $tableLead->insert($data);
        $success = 'Lead added successfully';
        $output['success'] = true;
        $output['data'] = $result;
        $output['message'] = $success;
    } else {
        $output['error'] = $errors;
        $output['message'] = 'Failed to add lead';
    }

    header('Content-Type: application/json');
    echo json_encode($output, JSON_PRETTY_PRINT);
}
