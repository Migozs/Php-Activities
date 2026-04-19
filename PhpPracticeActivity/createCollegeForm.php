<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create College</title>

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
        <div class="formcontainer">
            <div class="formdiv">
                <h2>Create College</h2>
                <form action="createCollegeProcess.php" method="post">
                    <div class="inputgroup">
                        <label>College Code</label>
                        <input type="text" name="college_code" placeholder="Enter college code" required>
                    </div>

                    <div class="inputgroup">
                        <label>College Name</label>
                        <input type="text" name="college_name" placeholder="Enter college name" required>
                    </div>

                    <?php
                    include_once 'conn.php';
                    $colleges = $conn->query("SELECT college_code FROM college");
                    ?>
                    <input type="submit" value="Submit">
                </form>
            </div>
        </div>

    </div>



</body>

</html>