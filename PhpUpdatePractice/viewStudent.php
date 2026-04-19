<?php
include_once 'conn.php';

$student_number = $_GET['student_number'];

$studentResult = $conn->query("SELECT * 
FROM student s 
JOIN program p
    ON s.program_Code = p.program_code
JOIN college c 
    ON p.college_code = c.college_code
WHERE s.student_number = $student_number");

$student = $studentResult->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Student</title>
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
        <div class="viewcontainer">
            <div class="viewcard">
                <div class="viewheader">
                    <div class="studenticon">
                        <?php echo strtoupper($student['first_name'][0] . $student['last_name'][0]); ?>
                    </div>
                </div>

                <h1>
                    <?php echo "{$student['first_name']} {$student['middle_name']} {$student['last_name']}" ?>
                </h1>

                <div class="infogroup">
                    <p><strong>Student Number:</strong> <?php echo $student['student_number']; ?></p>
                    <p><strong>Gender:</strong> <?php echo $student['gender']; ?></p>
                    <p><strong>Birthday:</strong> <?php echo $student['birthday']; ?></p>
                </div>

                <div class="infogroup">
                    <p><strong>Program:</strong> <?php echo "{$student['program_name']} ({$student['program_code']})"; ?></p>
                    <p><strong>College:</strong> <?php echo "{$student['college_name']} ({$student['college_code']})"; ?></p>
                </div>

                <div class="infogroup">
                    <p><strong>Details:</strong></p>
                    <p><?php echo nl2br($student['details']); ?></p>
                </div>

                <a href="students.php" class="buttonGoBack">Go Back</a>
            </div>
        </div>
    </div>

</body>
</html>
