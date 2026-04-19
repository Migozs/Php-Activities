<?php
require_once 'Model.php';

class College extends Model {

    public function getAll() {
        $sql = "SELECT * FROM college ORDER BY college_code";
        return $this->conn->query($sql);
    }

    public function getByCode($college_code) {
        $college_code = $this->conn->real_escape_string($college_code);
        $sql = "SELECT * FROM college WHERE college_code = '$college_code'";
        return $this->conn->query($sql);
    }

    public function create($college_code, $college_name) {
        $college_code = $this->conn->real_escape_string($college_code);
        $college_name = $this->conn->real_escape_string($college_name);
        $sql = "INSERT INTO college (college_code, college_name) VALUES ('$college_code', '$college_name')";
        return $this->conn->query($sql);
    }

    public function update($college_code, $college_name) {
        $college_code = $this->conn->real_escape_string($college_code);
        $college_name = $this->conn->real_escape_string($college_name);
        $sql = "UPDATE college SET college_name = '$college_name' WHERE college_code = '$college_code'";
        return $this->conn->query($sql);
    }

    public function delete($college_code) {
        $college_code = $this->conn->real_escape_string($college_code);
        $sql = "DELETE FROM college WHERE college_code = '$college_code'";
        return $this->conn->query($sql);
    }
}
