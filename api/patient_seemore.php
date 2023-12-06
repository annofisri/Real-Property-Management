<?php
session_start();
error_reporting(E_ALL);

require_once("../cpanel/core/class-database.php");
require_once("../cpanel/core/class-functions.php");
require_once('../cpanel/core/class-post.php');
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

$page = (int)$_GET['page'] ?? 0;

if ($page) {
    $objPost = new Post();
    $objPost->section = 'patient'; // section is required
    $objPost->active = 1; // -1 for All, 0 for Inactive only and 1 for Active only
    $objPost->visibility = "Public"; // -1 for All, "public" for Public only and "private" for Private only
    $settings['limit'] = 3;
    $settings['offset'] = $page * $settings['limit'];
    $section_lines = $objPost->selectBySection($settings);
    $result = '';
    foreach ($section_lines as $patients) {
        $result .= '<div class="col-md-4">
                                    <div class="card card-2">
                                    <div class="img-blog">
                                        <img src="/' . DIR_UPLOADS . $patients["src"] . '" class="card-img-top" alt="...">
                                    </div>
                                        <div class="card-body">
                                            <h5 class="card-title">' . $patients['name'] . '</h5>
                                            <p class="card-text">' .$patients['long_description'] . '</p>
                                            <div class="read-more bg-transparent p-0">
                                                <a href="/patient-single?id=' . $patients['id'] . '">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>';
    }
    echo $result;
}
