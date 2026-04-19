<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update Grade</title>
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
        <h2>Update Grade</h2>

        <?php
        include_once 'conn.php';
        $grade_id = $_GET['grade_id'];
        $gradeResult = $conn->query("SELECT * FROM grade WHERE grade_id = $grade_id");
        $grade = $gradeResult->fetch_assoc();
        ?>

        <form action="updateGradeProcess.php" method="post">
          <div class="inputgroup">
            <label>Grade ID:</label>
            <input type="number" name="grade_id" value="<?php echo $grade['grade_id']; ?>" readonly>
          </div>

          <div class="inputgroup">
            <label>Semester:</label>
            <select name="semester" class="selectelement" required>
              <option value="1st Semester" <?php if ($grade['semester'] == '1st Semester')
                echo 'selected'; ?>>1st
                Semester</option>
              <option value="2nd Semester" <?php if ($grade['semester'] == '2nd Semester')
                echo 'selected'; ?>>2nd
                Semester</option>
            </select>
          </div>

          <div class="inputgroup">
            <label>School Year:</label>
            <select name="school_year" class="selectelement" required>
              <?php
              $school_years = ['2020-2021', '2021-2022', '2022-2023', '2023-2024', '2024-2025', '2025-2026', '2026-2027'];
              foreach ($school_years as $year) {
                $selected = ($grade['school_year'] == $year) ? 'selected' : '';
                echo "<option value='$year' $selected>$year</option>";
              }
              ?>
            </select>
          </div>

          <div class="inputgroup">
            <label>Grade:</label>
            <select name="grade" class="selectelement" required>
              <?php
              $grades = [1.00, 1.25, 1.50, 1.75, 2.00, 2.25, 2.50, 2.75, 3.00, 5.00];
              foreach ($grades as $g) {
                $selected = ($grade['grade'] == $g) ? 'selected' : '';
                echo "<option value='$g' $selected>$g</option>";
              }
              ?>
            </select>
          </div>

          <div class="inputgroup">
            <label>Student Number:</label>
            <select name="student_number" class="selectelement" required>
              <?php
              $students = $conn->query("SELECT student_number, first_name, last_name FROM student");
              foreach ($students as $student) {
                $selected = ($grade['student_number'] == $student['student_number']) ? 'selected' : '';
                echo "<option value='{$student['student_number']}' $selected>{$student['first_name']} {$student['last_name']} ({$student['student_number']})</option>";
              }
              ?>
            </select>
          </div>

          <div class="inputgroup">
            <label>Course:</label>
            <select name="course_code" class="selectelement" required>
              <?php
              $courses = $conn->query("SELECT course_code, course_title FROM course");
              foreach ($courses as $course) {
        
                $selected = ($grade['course_code'] == $course['course_code']) ? 'selected' : '';
                echo "<option value='{$course['course_code']}' $selected>{$course['course_title']} ({$course['course_code']})</option>";
              }
              ?>
            </select>
          </div>

          <input type="submit" value="Update Grade">
        </form>

      </div>
    </div>
  </div>

</body>

</html>