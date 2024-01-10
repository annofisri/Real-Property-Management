<?php

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'real_property');
define('ROOT_PATH', __DIR__ . '/..');

// define('DB_HOST', 'sdb-62.hosting.stackcp.net');
// define('DB_USER', 'realpm-35303239665d');
// define('DB_PASS', 'lfpzn3gglh');
// define('DB_NAME', 'realpm-35303239665d');

function sanitizeInput($input) {
  if (is_array($input)) {
      return array_map('sanitizeInput', $input);
  }

  return htmlspecialchars($input, ENT_QUOTES, 'UTF-8');
}

$_POST = sanitizeInput($_POST);

$_GET = sanitizeInput($_GET);