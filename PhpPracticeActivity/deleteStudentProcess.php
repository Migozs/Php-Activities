<?php
include_once 'conn.php';

$student_number = $_GET['student_number'];
$studentResult = $conn->query("SELECT first_name, last_name FROM student WHERE student_number = $student_number");
$student = $studentResult->fetch_assoc();
$student_name = ($student['first_name'] ?? '') . ' ' . ($student['last_name'] ?? $student_number);

$conn->query("DELETE FROM student WHERE student_number = $student_number");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Deleted Successfully</title>
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
            <h1>Student Deleted Successfully!</h1>
            <p><?php echo htmlspecialchars($student_name); ?> has been removed from the system.</p>
            <div class="actionbuttons">
                <a href="students.php" class="buttonGoBack">Go Back</a>
            </div>
        </div>
    </div>
</div>
</body>
</html>
