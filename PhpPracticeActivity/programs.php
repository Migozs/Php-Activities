<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Programs</title>
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
            <h1>Programs</h1>
        </div>

        <div class="tablecontainer">
            <a href="createProgramForm.php">
                <button class="addbutton">Add New Program</button>
            </a>

            <table class="table" border="1">
                <tr>
                    <th>Program Code</th>
                    <th>Program Name</th>
                    <th>College Code</th>
                    <th>Actions</th>
                </tr>

                <?php
                include_once 'conn.php';


                $programs = $conn->query("
                               SELECT prg.program_code, prg.program_name, c.college_code
                               FROM program prg
                                LEFT JOIN college c ON prg.college_code = c.college_code
                            ");



                foreach ($programs as $program) {
                    echo "
        <tr>
            <td>{$program['program_code']}</td>
            <td>{$program['program_name']}</td>
            <td>{$program['college_code']}</td>
            <td>
            <a href='updateProgramForm.php?program_code={$program['program_code']}'><button>Update</button></a>
            <a href='deleteProgramProcess.php?program_code={$program['program_code']}'><button>Delete</button></a>
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