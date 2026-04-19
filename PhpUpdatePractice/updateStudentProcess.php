<?php
include_once 'conn.php';

$student_number = $_POST['student_number'];
$first_name = $_POST['first_name'];
$middle_name = $_POST['middle_name'];
$last_name = $_POST['last_name'];
$gender = $_POST['gender'];
$birthday = $_POST['birthday'];
$details = $_POST['details'];
$program_code = $_POST['program_code'];

$conn->query("UPDATE student 
SET first_name = '$first_name' , middle_name = '$middle_name' , last_name = '$last_name' , 
gender = '$gender' , birthday = '$birthday', details = '$details', program_code = '$program_code'
WHERE student_number = $student_number
");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Updated Successfully</title>
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
            <h1>Student Updated Successfully!</h1>
            <div class="actionbuttons">
                <a href="students.php" class="buttonGoBack">Go Back</a>
            </div>
        </div>