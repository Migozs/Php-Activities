<?php
include_once 'conn.php';


$college_code = $_POST['college_code'];
$college_name = $_POST['college_name'];



$conn->query("UPDATE college
SET  college_code = '$college_code', college_name = '$college_name'
WHERE college_code = '$college_code'");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>College Updated Successfully</title>
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
            <h1>College Updated Successfully!</h1>
            <div class="actionbuttons">
                <a href="colleges.php" class="buttonGoBack">Go Back</a>
            </div>
        </div>