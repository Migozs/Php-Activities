<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade Added Successfully</title>
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

            <?php
            include_once 'conn.php';

            $semester = $_POST['semester'];
            $school_year = $_POST['school_year'];
            $grade = $_POST['grade'];
            $student_number = $_POST['student_number'];
            $course_code = $_POST['course_code'];

            $conn->query("INSERT INTO grade(semester, school_year, grade, student_number, course_code) 
Values('$semester', '$school_year', $grade, $student_number, '$course_code')");
            ?>

            <div class="successcard">
                <div class="success">✔</div>
                <h1>Grade Added Successfully!</h1>
                <p>
                    Grade has been successfully uploaded to the system.
                </p>

                <div class="actionbuttons">
                    <a href="createGradeForm.php" class="buttonAddAnother">Add Another</a>
                    <a href="grades.php" class="buttonGoBack">Go Back</a>
                </div>
            </div>

        </div>
    </div>

</body>

</html>