<?php

error_reporting(E_ALL);


// always include consoleLog.php file
include_once('consoleLog.php');

session_start();
if (isset($_GET['logout'])) {
  session_destroy();
}


require_once("./cpanel/core/class-database.php");
require_once("./cpanel/core/class-functions.php");
require_once('./cpanel/core/class-post.php');
$do = new Functions();

// Get configuration list
$objPost = new Post();
$objPost->section = 'configuration'; // section is required
$data = $objPost->selectBySection();

$values = [];
foreach ($data as $key) {
  $values[$key['name']] = $key['short_description'];
}

define('VALUE', $values);
unset($data);
unset($values);
unset($objPost);

// Holds array of success and error messages $alerts['success'] or $alerts['error']
$alerts = [];

// common css and js package
$links = [
  'css' =>
  [
    'https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css',
    'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css',
    'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css',
    'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css',

    '/static/style.css',
  ],
  'js' =>
  [
    'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js',
    'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js',
    'https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js',
    '/static/custom.js',
  ],
];

$pages = [];

$pages = [
  '/' => './page/tpl-page-home.php',
  '404' => './page/tpl-page-404.php',
  'about' => './page/tpl-page-about.php',
  'services' => './page/tpl-page-services.php',
  'service-single' => './page/tpl-page-service-single.php',
  'patient-education' => './page/tpl-page-patient-education.php',
  'patient-education-single' => './page/tpl-page-patient-education-single.php',


  'doctor' => './page/tpl-page-doctor.php',
  'doctor-single' => './page/tpl-page-doctor-single.php',

  'blogs' => './page/tpl-page-blogs.php',
  'blog-single' => './page/tpl-page-blog-single.php',

  'gallery' => './page/tpl-page-gallery.php',
  'gallery-single' => './page/tpl-page-gallery-single.php',
  'contact' => './page/tpl-page-contact-us.php',

  'popup' => './page/tpl-page-hero-popup.php',
  'price-list' => './page/tpl-page-price-list.php',




];

$requested_page = $_GET['page'] ?? '/';



if (!array_key_exists($requested_page, $pages) || !file_exists($pages[$requested_page])) {
  include_once($pages["404"]);
  exit();
}

include_once($pages[$requested_page]);
exit();
