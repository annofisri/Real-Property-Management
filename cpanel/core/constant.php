<?php

require_once('config-database.php');

// Table name
define("TBL_USER", "users");
define("TBL_POST", "posts");
define("TBL_SETTING", "settings");

// Application Setting
define("ENVIRONMENT", "Development"); // Development or Production
define("ALLOW_DEBUG", (ENVIRONMENT == 'Development' ? true : false));
define("ALLOW_UPLOAD_FILE_TYPE", ["jpg", "png", "pdf", "svg", "mp4", "gif"]);
define("AUTO_RESIZE_IMAGE", true);

// Define directories path
define("DIR_ROOT", $_SERVER["DOCUMENT_ROOT"]);
define("DIR_UPLOADS", "upload/");

?>