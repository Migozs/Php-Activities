<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Course</title>
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
        </ul>s
    </div>

    <div class="content">
        <div class="formcontainer">
            <div class="formdiv">

                <h2>Create Course</h2>

                <form action="createCourseProcess.php" method="post">

                    <div class="inputgroup">
                        <label>Course Code</label>
                        <input type="text" name="course_code" placeholder="Enter course code" required>
                    </div>

                    <div class="inputgroup">
                        <label>Course Title</label>
                        <input type="text" name="course_title" placeholder="Enter course title" required>
                    </div>

                    <div class="inputgroup">
                        <label>Units</label>
                        <input type="number" name="units" placeholder="Enter units" required>
                    </div>

                    <?php
                        include_once 'conn.php';
                        $courses = $conn->query("SELECT course_code FROM course");
                    ?>

                    <input type="submit" value="Submit">
                </form>

            </div>
        </div>
    </div>

</body>
</html>
