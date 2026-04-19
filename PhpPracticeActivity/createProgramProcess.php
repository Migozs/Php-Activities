<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program Added Successfully</title>
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


            $program_code = $_POST['program_code'];
            $program_name = $_POST['program_name'];
            $college_code = $_POST['college_code'];



            $conn->query("INSERT INTO program
VALUES('$program_code', '$program_name', '$college_code')");
            ?>
            <div class="successcard">
                <div class="successicon">✔</div>
                <h1>Program Added Successfully!</h1>
                <p>
                    Program has been successfully uploaded to the system.
                </p>

                <div class="actionbuttons">
                    <a href="createProgramForm.php" class="buttonAddAnother">Add Another</a>
                    <a href="programs.php" class="buttonGoBack">Go Back</a>
                </div>
            </div>

        </div>
    </div>

</body>

</html>