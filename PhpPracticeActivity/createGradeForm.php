<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Grade</title>

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
                <h2>Create Grade</h2>

                <form action="createGradeProcess.php" method="post">

                    <div class="inputgroup">
                        <label>Semester</label>
                        <select name="semester" class="selectelement" required>
                            <option value="" disabled selected>Select semester</option>
                            <option value="1st Semester">1st Semester</option>
                            <option value="2nd Semester">2nd Semester</option>
                        </select>
                    </div>

                    <div class="inputgroup">
                        <label>School Year</label>
                        <select name="school_year" class="selectelement" required>
                            <option value="" disabled selected>Select school year</option>
                            <option value="2020-2021">2020-2021</option>
                            <option value="2021-2022">2021-2022</option>
                            <option value="2022-2023">2022-2023</option>
                            <option value="2023-2024">2023-2024</option>
                            <option value="2024-2025">2024-2025</option>
                            <option value="2025-2026">2025-2026</option>
                            <option value="2026-2027">2026-2027</option>
                        </select>
                    </div>

                    <div class="inputgroup">
                        <label>Grade</label>
                        <select name="grade" class="selectelement" required>
                            <option value="" disabled selected>Select grade</option>
                            <option value="1.00">1.00</option>
                            <option value="1.25">1.25</option>
                            <option value="1.50">1.50</option>
                            <option value="1.75">1.75</option>
                            <option value="2.00">2.00</option>
                            <option value="2.25">2.25</option>
                            <option value="2.50">2.50</option>
                            <option value="2.75">2.75</option>
                            <option value="3.00">3.00</option>
                            <option value="5.00">5.00</option>
                        </select>
                    </div>

                    <div class="inputgroup">
                        <label>Student Number</label>
                        <select name="student_number" class="selectelement" required>
                            <option value="" disabled selected>Select student</option>
                            <?php
                            include_once 'conn.php';
                            $students = $conn->query("SELECT student_number FROM student");
                            foreach ($students as $student) {
                                echo "<option value='{$student['student_number']}'>
                                        {$student['student_number']}
                                      </option>";
                            }
                            ?>
                        </select>
                    </div>

                    <div class="inputgroup">
                        <label>Course</label>
                        <select name="course_code" class="selectelement" required>
                            <option value="" disabled selected>Select course</option>
                            <?php
                            include_once 'conn.php';
                            $courses = $conn->query("SELECT course_code FROM course");
                            foreach ($courses as $course) {
                                echo "<option value='{$course['course_code']}'>
                                        {$course['course_code']}
                                      </option>";
                            }
                            ?>
                        </select>
                    </div>

                    <input type="submit" value="Add Grade">
                </form>

            </div>
        </div>
    </div>

</body>
</html>
