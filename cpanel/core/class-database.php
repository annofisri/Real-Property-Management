<?php
/*
* Author: Anurodh Sharma
* Last Updated: 2023-01-09
* Version: 1.0.0
* Description: Handle Database Object
*/

require_once("constant.php");

class Database
{

	private $conn;

	public function __construct()
	{
		try {
			$this->conn = new PDO(
				"mysql:host=" . DB_HOST . ";dbname=" . DB_NAME,
				DB_USER,
				DB_PASS,
				array(
					PDO::ATTR_PERSISTENT => true,
					PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
					PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
				)
			);

			return $this->conn;
		} catch (Exception $e) {
			// TODO: Log to maintain for Exception occurs
			if (ALLOW_DEBUG === true) {
				var_dump($e);
			}

			return null;
		}
	}

	public function getConnection()
	{
		return $this->conn;
	}

	public function getCurrentTheme()
	{
		$result = 'DEFAULT';
		$sql = 'SELECT value FROM settings WHERE name = :name LIMIT 1';
		$q = $this->conn->prepare($sql);
		$q->execute([':name' => 'current_theme']);
		$result = $q->fetch();
		if (!empty($result)) {
			return $result['value'];
		}
		return $result;
	}
}
