<?php
require_once 'Database.php';

abstract class Model {
    protected $conn;

    public function __construct() {
        $this->conn = Database::getInstance()->conn;
    }
}
