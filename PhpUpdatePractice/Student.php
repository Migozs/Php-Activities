<?php
require_once 'Model.php';

class Student extends Model {

    public function getAll() {
        $sql = "SELECT s.*, p.program_name FROM student s
                LEFT JOIN program p ON s.program_code = p.program_code
                ORDER BY s.last_name, s.first_name";
        return $this->conn->query($sql);
    }

    public function getByNumber($student_number) {
        $sql = "SELECT * FROM student WHERE student_number = $student_number";
        return $this->conn->query($sql);
    }

    public function create($student_number, $first_name, $middle_name, $last_name, $gender, $birthday, $details, $program_code) {
        $first_name   = $this->conn->real_escape_string($first_name);
        $middle_name  = $this->conn->real_escape_string($middle_name);
        $last_name    = $this->conn->real_escape_string($last_name);
        $gender       = $this->conn->real_escape_string($gender);
        $birthday     = $this->conn->real_escape_string($birthday);
        $details      = $this->conn->real_escape_string($details);
        $program_code = $this->conn->real_escape_string($program_code);
        $sql = "INSERT INTO student (student_number, first_name, middle_name, last_name, gender, birthday, details, program_code)
                VALUES ($student_number, '$first_name', '$middle_name', '$last_name', '$gender', '$birthday', '$details', '$program_code')";
        return $this->conn->query($sql);
    }

    public function update($student_number, $first_name, $middle_name, $last_name, $gender, $birthday, $details, $program_code) {
        $first_name   = $this->conn->real_escape_string($first_name);
        $middle_name  = $this->conn->real_escape_string($middle_name);
        $last_name    = $this->conn->real_escape_string($last_name);
        $gender       = $this->conn->real_escape_string($gender);
        $birthday     = $this->conn->real_escape_string($birthday);
        $details      = $this->conn->real_escape_string($details);
        $program_code = $this->conn->real_escape_string($program_code);
        $sql = "UPDATE student SET first_name = '$first_name', middle_name = '$middle_name', last_name = '$last_name',
                gender = '$gender', birthday = '$birthday', details = '$details', program_code = '$program_code'
                WHERE student_number = $student_number";
        return $this->conn->query($sql);
    }

    public function delete($student_number) {
        $sql = "DELETE FROM student WHERE student_number = $student_number";
        return $this->conn->query($sql);
    }
}
