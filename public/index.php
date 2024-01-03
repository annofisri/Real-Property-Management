<?php
  
session_start();
error_reporting(E_ALL);

if(isset($_GET['demo'])){
    $_SESSION['demo'] = true;
}

if(!isset($_SESSION['demo'])){
    include('../coming_soon.html');
    exit();
}

// always include consoleLog.php file
include_once('./../core/consoleLog.php');


if (isset($_GET['logout'])) {
  session_destroy();
}


$availablePages = [
  '/' => './pages/home.php',
  '404' => './pages/404.php',
  'about' => './pages/about.php',
  'services' => './pages/services.php',
  'service-single' => './pages/service-single.php',


  'contact' => './pages/contact-us.php',

  'properties' => './pages/properties.php',
  'property-single' => './pages/property-single.php',

  'login' => './pages/login.php',
  'register' => './pages/register.php',

  'faqs' => './pages/faqs.php',

  'service-fees' => './pages/service-fees.php',

  'add-property' => './pages/add-property.php',
  'edit-property' => './pages/edit-property.php',

  'added-property' => './pages/added-property.php',

  'user-profile' => './pages/user-profile.php',






];

$requested_page = $_GET['page'] ?? '/';



if (!array_key_exists($requested_page, $availablePages) || !file_exists($availablePages[$requested_page])) {
  include_once($availablePages["404"]);
  exit();
}

include_once($availablePages[$requested_page]);
exit();
