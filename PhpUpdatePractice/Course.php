<?php
require_once 'Model.php';

class Course extends Model {

    public function getAll() {
        $sql = "SELECT * FROM course ORDER BY course_code";
        return $this->conn->query($sql);
    }

    public function getByCode($course_code) {
        $course_code = $this->conn->real_escape_string($course_code);
        $sql = "SELECT * FROM course WHERE course_code = '$course_code'";
        return $this->conn->query($sql);
    }

    public function create($course_code, $course_title, $units) {
        $course_code  = $this->conn->real_escape_string($course_code);
        $course_title = $this->conn->real_escape_string($course_title);
        $sql = "INSERT INTO course (course_code, course_title, units) VALUES ('$course_code', '$course_title', $units)";
        return $this->conn->query($sql);
    }

    public function update($course_code, $course_title, $units) {
        $course_code  = $this->conn->real_escape_string($course_code);
        $course_title = $this->conn->real_escape_string($course_title);
        $sql = "UPDATE course SET course_title = '$course_title', units = $units WHERE course_code = '$course_code'";
        return $this->conn->query($sql);
    }

    public function delete($course_code) {
        $course_code = $this->conn->real_escape_string($course_code);
        $sql = "DELETE FROM course WHERE course_code = '$course_code'";
        return $this->conn->query($sql);
    }
}
