<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Students</title>
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
            <h1>Students</h1>
        </div>

        <div class="tablecontainer">
            <a href="createStudentForm.php">
                <button class="addbutton">Add Record</button>
            </a>

            <table class="table" border="1">
                <tr>
                    <th>Student No.</th>
                    <th>First Name</th>
                    <th>Middle Name</th>
                    <th>Last Name</th>
                    <th>Birthday</th>
                    <th>Program</th>
                    <th>Actions</th>
                </tr>


                <?php
                include_once 'conn.php';

                $students = $conn->query("
          SELECT s.student_number, s.first_name, s.middle_name, s.last_name,
                 s.birthday, p.program_name
          FROM student s
          JOIN program p ON s.program_code = p.program_code
        ");

                foreach ($students as $student) {
                    echo "
          <tr>
            <td>{$student['student_number']}</td>
            <td>{$student['first_name']}</td>
            <td>{$student['middle_name']}</td>
            <td>{$student['last_name']}</td>
            <td>{$student['birthday']}</td>
            <td>{$student['program_name']}</td>
            <td>
              <a href='viewStudent.php?student_number={$student['student_number']}'><button>View</button></a>
              <a href='updateStudentForm.php?student_number={$student['student_number']}'><button>Update</button></a>
              <a href='deleteStudentProcess.php?student_number={$student['student_number']}'><button>Delete</button></a>
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