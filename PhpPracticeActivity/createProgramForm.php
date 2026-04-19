<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Program</title>

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
                <h2>Create Program</h2>

                <form action="createProgramProcess.php" method="post">

                    <div class="inputgroup">
                        <label>Program Code</label>
                        <input type="text" name="program_code" placeholder="Enter program code" required>
                    </div>

                    <div class="inputgroup">
                        <label>Program Name</label>
                        <input type="text" name="program_name" placeholder="Enter program name" required>
                    </div>

                    <div class="inputgroup">
                        <label>College</label>
                        <select name="college_code" class="selectelement"  required>
                            <option value="" disabled selected>Select a college</option>
                            <?php
                            include_once 'conn.php';
                            $colleges = $conn->query("SELECT college_code, college_name FROM college");

                            foreach ($colleges as $college) {
                                echo "<option value='{$college['college_code']}'>
                                        {$college['college_code']} - {$college['college_name']}
                                      </option>";
                            }
                            ?>
                        </select>
                    </div>

                    <input type="submit" value="Submit">
                </form>

            </div>
        </div>
    </div>

</body>
</html>
