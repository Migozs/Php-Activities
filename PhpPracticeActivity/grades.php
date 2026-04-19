<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Grades</title>
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
            <h1>Grades</h1>
        </div>

        <div class="tablecontainer">
            <a href="createGradeForm.php">
                <button class="addbutton">Add Grade</button>
            </a>

            <table class="table" border=1>
                <tr>
                    <th>Grade ID</th>
                    <th>Semester</th>
                    <th>School Year</th>
                    <th>Grade</th>
                    <th>Student No.</th>
                    <th>Course Code</th>
                    <th>Actions</th>

                </tr>
                            <?php
                            include_once 'conn.php';

                            $students = $conn->query(
                                "SELECT g.grade_id, g.semester, g.school_year, g.grade, s.student_number, c.course_code
        FROM grade g 
        LEFT JOIN student s
            ON g.student_number = s.student_number
        LEFT JOIN course c
            ON g.course_code = c.course_code
        "
                            );

                            foreach ($students as $student) {
                                echo "
            <tr>
                <td>{$student['grade_id']}</td>
                <td>{$student['semester']}</td>
                <td>{$student['school_year']}</td> 
                <td>{$student['grade']}</td>
                <td>{$student['student_number']}</td>
                <td>{$student['course_code']}</td>
                <td>
                    <a href='updateGradeForm.php?grade_id={$student['grade_id']}'><button>Update</button></a>
                    <a href='deleteGradeProcess.php?grade_id={$student['grade_id']}'><button>Delete</button></a>
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