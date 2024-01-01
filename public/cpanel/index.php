<?php
session_start();

if (!isset($_SESSION['id'])) {
    header('location:login.php');
    exit;
}
if (isset($_GET['logout'])) {
    session_destroy();
    header('location:login.php');
    exit;
}

require_once __DIR__ . '/../../core/TableManager.php';
require_once __DIR__ . '/../../core/consoleLog.php';



$requestedPage = $_GET['section'] ?? 'dashboard';

$availablePages = [
    'dashboard' => './sections/dashboard/dashboard.php',
    'leads' => './sections/leads/leads.php',
    'properties' => './sections/properties/properties.php',
    'admin' => './sections/admin/admin.php',
    'property-owners' => './sections/property-owners/property-owners.php',

];

if (!array_key_exists($requestedPage, $availablePages)) {
    $requestedPage = 'dashboard';
}

include_once($availablePages[$requestedPage]);