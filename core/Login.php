<?php
//login crud operations
class Login
{
    private $db;

    public function __construct()
    {
        $this->db = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';', DB_USER, DB_PASS, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8", PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC));
    }

    function login($email, $password)
    {
        $query = "SELECT * FROM admins WHERE email = :email OR username = :email";
        $stmt = $this->db->prepare($query);
        $stmt->execute([
            ':email' => $email,
        ]);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        consoleLog($row);
        consoleLog(md5($password));

        if ($row) {
            $isPasswordMatched = md5($password) === $row['password'];
            if ($isPasswordMatched) {
                return $row;
            }
        }
        return false;
    }
}
