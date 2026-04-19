<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Program</title>
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
                <h2>Update Program</h2>

                <?php
                include_once 'conn.php';

                $program_code = $_GET['program_code'];
                $programResult = $conn->query("SELECT * FROM program WHERE program_code = '$program_code'");
                $program = $programResult->fetch_assoc();
                ?>

                <form action="updateProgramProcess.php" method="post">
                    <div class="inputgroup">
                        <label>Program Code:</label>
                        <input type="text" name="program_code" value="<?php echo $program['program_code']; ?>" readonly>
                    </div>

                    <div class="inputgroup">
                        <label>Program Name:</label>
                        <input type="text" name="program_name" value="<?php echo $program['program_name']; ?>" required>
                    </div>

                    <div class="inputgroup">
                        <label>College:</label>
                        <select name="college_code" class="selectelement" required>
                            <?php
                            $colleges = $conn->query("SELECT college_code, college_name FROM college");
                            foreach ($colleges as $college) {
                                $selected = ($program['college_code'] == $college['college_code']) ? "selected" : "";
                                echo "<option value='{$college['college_code']}' $selected>{$college['college_name']} ({$college['college_code']})</option>";
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
