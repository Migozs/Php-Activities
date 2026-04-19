<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>College Added Successfully</title>
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

            $college_code = $_POST['college_code'];
            $college_name = $_POST['college_name'];

            $conn->query("INSERT INTO college VALUES ('$college_code', '$college_name')");
            ?>

            <div class="successcard">
                <div class="successicon">✔</div>
                <h1>College Added Successfully!</h1>
                <p>
                    <?php echo $college_name; ?>
                    has been added to the system.
                </p>

                <div class="actionbuttons">
                    <a href="createCollegeForm.php" class="buttonAddAnother">Add Another</a>
                    <a href="colleges.php" class="buttonGoBack">Go Back</a>
                </div>
            </div>

        </div>
    </div>

</body>
</html>
