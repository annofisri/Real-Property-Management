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
    $result = '';
    $objBlog = new Post();
    $objBlog->section = 'our-blog'; // section is required
    $objBlog->active = 1; // -1 for All, 0 for Inactive only and 1 for Active only
    $objBlog->visibility = "Public"; // -1 for All, "Public" for Public only and "Private" for Private only
    $settings = [];
    $settings['limit'] = 2;
    $settings['offset'] = $page * $settings['limit'];
    $blogs = $objBlog->selectBySection($settings);
    foreach ($blogs as $our_blog) {
        $result .= '<div class="col-md-6">
                    <div class="card card-2">
                            <div class="img-blog">
                                <img src="/' . DIR_UPLOADS . $our_blog["src"] . '" class="card-img-top" alt="">
                            </div>
                        <div class="card-body">
                            <div class="card-info">
                                <span class="author-name">' . $our_blog['short_description'] . '</span> |
                                <span class="date">' . date('F j, Y', strtotime($our_blog['classes'])) . '</span>

                            </div>
                            <h5 class="card-title">' . $our_blog['name'] . '</h5>
                            <p class="card-text">' . strip_tags($our_blog['long_description']) . '</p>
                            <div class="read-more bg-transparent p-0">
                            <a href="/blog-single?id=' . $our_blog['id'] . '" >Read More</a>
                        </div>
                        </div>
                       
                    </div>
                </div>';
    }
    echo $result;
}
