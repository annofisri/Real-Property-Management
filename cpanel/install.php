<?php

require_once('./core/class-database.php');

$queries = [];
//users table
$queries[] = "CREATE TABLE IF NOT EXISTS ".TBL_USER." (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 DEFAULT NULL,
  `password` varchar(128) CHARACTER SET utf8mb4 NOT NULL,
  `role_id` tinyint DEFAULT '0',
  `status` enum('active','inactive','suspended','blocked') CHARACTER SET utf8mb4 NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8mb4;";

$queries[] = "INSERT INTO ".TBL_USER." (`id`, `name`, `username`, `email`, `password`, `role_id`, `status`) VALUES (1, 'admin', 'admin', 'admin@annofi.com', '0192023a7bbd73250516f069df18b500', '0', 'active');";

$queries[] = "CREATE TABLE IF NOT EXISTS ".TBL_POST." (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `parent_id` int DEFAULT NULL,
  `short_description` varchar(255) DEFAULT NULL,
  `long_description` text DEFAULT NULL,
  `src` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `active` tinyint(1) DEFAULT '0',
  `reorder` smallint unsigned DEFAULT '0',
  `section` varchar(255) DEFAULT NULL,
  `show_on_header` tinyint(1) DEFAULT '0',
  `show_on_footer` tinyint(1) DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `additional_info` text DEFAULT NULL,
  `visibility` enum('Private','Public') DEFAULT NULL,
  `is_featured` tinyint(1) DEFAULT '0',
  `is_new` tinyint(1) DEFAULT '0',
  `classes` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8mb4;";

$db = new Database();

$conn = $db->getConnection();

$error = [];

foreach($queries as $sql){

  try {
    $conn->prepare($sql)->execute();

  } catch (Exception $e) {
    $error[] = $e->getMessage();

  }
  
}

if(!empty($error)){
  foreach($error as $msg){
    echo "<div>$msg</div><br><br>\n";
  }
}else{
  echo 'Data inserted successfully';
}


?>