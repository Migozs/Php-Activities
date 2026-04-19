<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Student</title>

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
                <h2>Create Student</h2>

                <form action="createStudentProcess.php" method="post">

                    <div class="inputgroup">
                        <label>Student Number</label>
                        <input type="number" name="student_number" placeholder="Enter student number" required>
                    </div>

                    <div class="inputgroup">
                        <label>First Name</label>
                        <input type="text" name="first_name" placeholder="Enter first name" required>
                    </div>

                    <div class="inputgroup">
                        <label>Middle Name</label>
                        <input type="text" name="middle_name" placeholder="Enter middle name">
                    </div>

                    <div class="inputgroup">
                        <label>Last Name</label>
                        <input type="text" name="last_name" placeholder="Enter last name" required>
                    </div>

                    <div class="inputgroup">
                        <label>Gender</label>
                        <select name="gender" class="selectelement"required>
                            <option value="" disabled selected>Select gender</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>

                    <div class="inputgroup">
                        <label>Birthday</label>
                        <input type="date" name="birthday" required>
                    </div>

                    <div class="inputgroup">
                        <label>Details</label>
                        <textarea name="details" class="additionaldetails" rows="3" placeholder="Additional details"></textarea>
                    </div>

                    <div class="inputgroup">
                        <label>Program</label>
                        <select name="program_code" class="selectelement" required>
                            <option value="" disabled selected>Select program</option>
                            <?php
                            include_once 'conn.php';
                            $programs = $conn->query("SELECT program_code FROM program");
                            foreach ($programs as $program) {
                                echo "<option value='{$program['program_code']}'>
                                        {$program['program_code']}
                                      </option>";
                            }
                            ?>
                        </select>
                    </div>

                    <input type="submit" value="Add Student">
                </form>

            </div>
        </div>
    </div>

</body>
</html>
