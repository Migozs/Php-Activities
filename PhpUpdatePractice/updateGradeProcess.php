<?php
include_once 'conn.php';

$grade_id = $_POST['grade_id'];
$semester = $_POST['semester'];
$school_year = $_POST['school_year'];
$grade = $_POST['grade'];
$student_number = $_POST['student_number'];
$course_code = $_POST['course_code'];

$conn->query(" UPDATE grade 
SET semester = '$semester', school_year = '$school_year', grade = $grade, student_number = $student_number,  course_code = '$course_code'
where grade_id = $grade_id");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade Updated Successfully</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="nav">
    <ul>
        <li><a href="colleges.php">Colleges</a></li>
        <li><a href="programs.php">Programs</a></li>
        <li><a href="students.php">Students</a></li>
        <li><a href="courses.php">Courses</a></li>
        <li><a href="grades.php">Grades</a></li>
    </ul>
</div>

<div class="content">
    <div class="processcontainer">
        <div class="successcard">
            <div class="successicon">✔</div>
            <h1>Grade Updated Successfully!</h1>
            <div class="actionbuttons">
                <a href="grades.php" class="buttonGoBack">Go Back</a>
            </div>
        </div>