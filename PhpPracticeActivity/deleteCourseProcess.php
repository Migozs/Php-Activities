<?php
include_once 'conn.php';

$course_code = $_GET['course_code'];

$courseResult = $conn->query("SELECT course_title FROM course WHERE course_code = '$course_code'");
$course = $courseResult->fetch_assoc();
$course_title = $course['course_title'] ?? $course_code; // fallback if not found

$conn->query("DELETE FROM course WHERE course_code = '$course_code'");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Deleted Successfully</title>
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
                <h1>Course Deleted Successfully!</h1>
                <p>
                    <?php echo htmlspecialchars($course_title); ?> has been removed from the system.
                </p>

                <div class="actionbuttons">
                    <a href="courses.php" class="buttonGoBack">Go Back</a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
