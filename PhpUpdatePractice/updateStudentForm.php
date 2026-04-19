<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update Student</title>
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
        <h2>Update Student</h2>

        <?php
        include_once 'conn.php';
        $student_number = $_GET['student_number'];
        $studentResult = $conn->query("SELECT * FROM student WHERE student_number = $student_number");
        $student = $studentResult->fetch_assoc();
        ?>

        <form action="updateStudentProcess.php" method="post">
          <div class="inputgroup">
            <label>Student Number:</label>
            <input type="number" name="student_number" value="<?php echo $student['student_number']; ?>" readonly>
          </div>

          <div class="inputgroup">
            <label>First Name:</label>
            <input type="text" name="first_name" value="<?php echo $student['first_name']; ?>" required>
          </div>

          <div class="inputgroup">
            <label>Middle Name:</label>
            <input type="text" name="middle_name" value="<?php echo $student['middle_name']; ?>">
          </div>

          <div class="inputgroup">
            <label>Last Name:</label>
            <input type="text" name="last_name" value="<?php echo $student['last_name']; ?>" required>
          </div>

          <div class="inputgroup">
            <label>Gender:</label>
            <select name="gender" class="selectelement" required>
              <option value="Male" <?php if ($student['gender'] == 'Male')
                echo 'selected'; ?>>Male</option>
              <option value="Female" <?php if ($student['gender'] == 'Female')
                echo 'selected'; ?>>Female</option>
            </select>
          </div>

          <div class="inputgroup">
            <label>Birthday:</label>
            <input type="date" name="birthday" value="<?php echo $student['birthday']; ?>" required>
          </div>

          <div class="inputgroup">
            <label>Details:</label>
            <textarea name="details" rows="3"><?php echo $student['details']; ?></textarea>
          </div>

          <div class="inputgroup">
            <label>Program:</label>
            <select name="program_code" class="selectelement" required>
              <?php
              $programs = $conn->query("SELECT program_code, program_name FROM program");
              foreach ($programs as $program) {
                $selected = ($student['program_code'] == $program['program_code']) ? 'selected' : '';
                echo "<option value='{$program['program_code']}' $selected>{$program['program_name']} ({$program['program_code']})</option>";
              }
              ?>
            </select>
          </div>

          <input type="submit" value="Update Student">
        </form>
      </div>
    </div>
  </div>

</body>

</html>