<?php
require_once 'Model.php';

class Grade extends Model {

    public function getAll() {
        $sql = "SELECT g.*, CONCAT(s.last_name, ', ', s.first_name) AS student_name, c.course_title
                FROM grade g
                LEFT JOIN student s ON g.student_number = s.student_number
                LEFT JOIN course c ON g.course_code = c.course_code
                ORDER BY g.grade_id DESC";
        return $this->conn->query($sql);
    }

    public function getById($grade_id) {
        $sql = "SELECT * FROM grade WHERE grade_id = $grade_id";
        return $this->conn->query($sql);
    }

    public function create($semester, $school_year, $grade, $student_number, $course_code) {
        $semester    = $this->conn->real_escape_string($semester);
        $school_year = $this->conn->real_escape_string($school_year);
        $course_code = $this->conn->real_escape_string($course_code);
        $sql = "INSERT INTO grade (semester, school_year, grade, student_number, course_code)
                VALUES ('$semester', '$school_year', $grade, $student_number, '$course_code')";
        return $this->conn->query($sql);
    }

    public function update($grade_id, $semester, $school_year, $grade, $student_number, $course_code) {
        $semester    = $this->conn->real_escape_string($semester);
        $school_year = $this->conn->real_escape_string($school_year);
        $course_code = $this->conn->real_escape_string($course_code);
        $sql = "UPDATE grade SET semester = '$semester', school_year = '$school_year',
                grade = $grade, student_number = $student_number, course_code = '$course_code'
                WHERE grade_id = $grade_id";
        return $this->conn->query($sql);
    }

    public function delete($grade_id) {
        $sql = "DELETE FROM grade WHERE grade_id = $grade_id";
        return $this->conn->query($sql);
    }
}
