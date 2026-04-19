<?php
require_once 'Model.php';

class Program extends Model {

    public function getAll() {
        $sql = "SELECT p.*, c.college_name FROM program p
                LEFT JOIN college c ON p.college_code = c.college_code
                ORDER BY p.program_code";
        return $this->conn->query($sql);
    }

    public function getByCode($program_code) {
        $program_code = $this->conn->real_escape_string($program_code);
        $sql = "SELECT * FROM program WHERE program_code = '$program_code'";
        return $this->conn->query($sql);
    }

    public function create($program_code, $program_name, $college_code) {
        $program_code = $this->conn->real_escape_string($program_code);
        $program_name = $this->conn->real_escape_string($program_name);
        $college_code = $this->conn->real_escape_string($college_code);
        $sql = "INSERT INTO program (program_code, program_name, college_code) VALUES ('$program_code', '$program_name', '$college_code')";
        return $this->conn->query($sql);
    }

    public function update($program_code, $program_name, $college_code) {
        $program_code = $this->conn->real_escape_string($program_code);
        $program_name = $this->conn->real_escape_string($program_name);
        $college_code = $this->conn->real_escape_string($college_code);
        $sql = "UPDATE program SET program_name = '$program_name', college_code = '$college_code' WHERE program_code = '$program_code'";
        return $this->conn->query($sql);
    }

    public function delete($program_code) {
        $program_code = $this->conn->real_escape_string($program_code);
        $sql = "DELETE FROM program WHERE program_code = '$program_code'";
        return $this->conn->query($sql);
    }
}
