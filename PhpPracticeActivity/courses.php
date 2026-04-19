<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Courses</title>
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
        <div class="pageheader">
            <h1>Courses</h1>
        </div>

        <div class="tablecontainer">
            <a href="createCourseForm.php"><button class="addbutton">Add New Course</button></a>

            <table class="table" border="1">
                <tr>
                    <th>Course Code</th>
                    <th>Course Title</th>
                    <th>Units</th>
                    <th>Actions</th>
                </tr>

                <?php
                include_once 'conn.php';

                $courses = $conn->query("
                    SELECT course_code, course_title, units 
                    FROM course
                ");

                foreach ($courses as $course) {
                    echo "
                    <tr>
                        <td>{$course['course_code']}</td>
                        <td>{$course['course_title']}</td>
                        <td>{$course['units']}</td>
                        <td>
                            <a href='updateCourseForm.php?course_code={$course['course_code']}'><button>Update</button></a>
                            <a href='deleteCourseProcess.php?course_code={$course['course_code']}'><button>Delete</button></a>
                        </td>
                    </tr>
                    ";
                }
                ?>
            </table>
        </div>
    </div>
</body>

</html>
