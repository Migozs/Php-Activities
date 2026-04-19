<?php
include_once 'conn.php';


$course_code = $_POST['course_code'];
$course_title = $_POST['course_title'];
$units = $_POST['units'];


$conn->query("UPDATE course
SET  course_title = '$course_title', units = '$units'
WHERE course_code = '$course_code'");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Updated Successfully</title>
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
            <h1>Course Updated Successfully!</h1>
            <div class="actionbuttons">
                <a href="courses.php" class="buttonGoBack">Go Back</a>
            </div>
        </div>