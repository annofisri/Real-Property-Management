<?php
session_start();

if (isset($_GET['logout'])) {
  session_destroy();
  header('Location:/index.php');
  exit();
}

if (!isset($_SESSION['id'])) {
  session_destroy();
  header('Location:/cpanel/login.php');
  exit();
}

require_once("./core/class-database.php");
require_once("./core/class-functions.php");
require_once('./core/class-post.php');
$do = new Functions();

// Holds array of success and error messages $alerts['success'] or $alerts['error']
$alerts = [];

// backend css andjs package
$links = [
  'css' =>
  [
    // './assets/plugin/bootstrap/bootstrap.min.css',
    'https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css',
    'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css',
    '/assets/rich-text-editor/richtext.min.css',
    '/assets/cms/style.css',
  ],
  'js' =>
  [
    'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js',
    'https://code.jquery.com/jquery-3.7.1.min.js',
    'https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js',
    'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/fontawesome.min.js',
    '/assets/rich-text-editor/jquery.richtext.min.js',
    '/assets/cms/custom.js',
  ],
];

$pages = [];

$pages = [
  '404' => './section/page-404.php',
  'dashboard' => './section/page-dashboard.php',
  'users' => './section/users/list.php',
  'users_new' => './section/users/new.php',
  'users_edit' => './section/users/edit.php',
  // 'menu'          =>  './section/menu/list.php',
  // 'menu_new'      =>  './section/menu/new.php',
  // 'menu_edit'      =>  './section/menu/edit.php',
  'hero-slider' => './section/hero-slider/list.php',
  'hero-slider_new' => './section/hero-slider/new.php',
  'hero-slider_edit' => './section/hero-slider/edit.php',

  'service' => './section/service/list.php',
  'service_new' => './section/service/new.php',
  'service_edit' => './section/service/edit.php',




  'client-says' => './section/client-says/list.php',
  'client-says_new' => './section/client-says/new.php',
  'client-says_edit' => './section/client-says/edit.php',

  'doctor' => './section/doctor/list.php',
  'doctor_new' => './section/doctor/new.php',
  'doctor_edit' => './section/doctor/edit.php',

  'hero-testimonal' => './section/hero-testimonal/list.php',
  'hero-testimonal_new' => './section/hero-testimonal/new.php',
  'hero-testimonal_edit' => './section/hero-testimonal/edit.php',

  'support-team' => './section/support-team/list.php',
  'support-team_new' => './section/support-team/new.php',
  'support-team_edit' => './section/support-team/edit.php',



  'our-blog' => './section/our-blog/list.php',
  'our-blog_new' => './section/our-blog/new.php',
  'our-blog_edit' => './section/our-blog/edit.php',

  'our-service' => './section/our-service/list.php',
  'our-service_new' => './section/our-service/new.php',
  'our-service_edit' => './section/our-service/edit.php',

  'blogs' => './section/blogs/list.php',
  'blogs_new' => './section/blogs/new.php',
  'blogs_edit' => './section/blogs/edit.php',

  'patient-education' => './section/patient-education/list.php',
  'patient-education_new' => './section/patient-education/new.php',
  'patient-education_edit' => './section/patient-education/edit.php',







  'popup' => './section/popup/list.php',
  'popup_new' => './section/popup/new.php',
  'popup_edit' => './section/popup/edit.php',







  'configuration' => './section/configuration/list.php',
  'configuration_new' => './section/configuration/new.php',
  'configuration_edit' => './section/configuration/edit.php',

  'gallery-image' => './section/gallery-image/list.php',
  'gallery-image_new' => './section/gallery-image/new.php',
  'gallery-image_edit' => './section/gallery-image/edit.php',

  'gallery-category' => './section/gallery-category/list.php',
  'gallery-category_new' => './section/gallery-category/new.php',
  'gallery-category_edit' => './section/gallery-category/edit.php',


  'price-category' => './section/price-category/list.php',
  'price-category_new' => './section/price-category/new.php',
  'price-category_edit' => './section/price-category/edit.php',

  'price-list' => './section/price-list/list.php',
  'price-list_new' => './section/price-list/new.php',
  'price-list_edit' => './section/price-list/edit.php',

];

$requested_page = $_GET['section'] ?? 'dashboard';

$title = 'Control Panel';
if (!array_key_exists($requested_page, $pages) || !file_exists($pages[$requested_page])) {
  include_once($pages["404"]);
  exit();
}

include_once($pages[$requested_page]);
exit();
