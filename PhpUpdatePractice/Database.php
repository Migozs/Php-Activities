<?php
class Database {
    private static $instance = null;
    public $conn;

    private function __construct() {
        $servername = "localhost";
        $username   = "root";
        $password   = "";
        $database   = "academe_db";

        $this->conn = new mysqli($servername, $username, $password, $database);

        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    public static function getInstance() {
        if (self::$instance == null) {
            self::$instance = new Database();
        }
        return self::$instance;
    }
}
