<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>College Form</title>
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
        <h2>Update Course</h2>

        <?php
        include_once 'conn.php';


        $course_code = $_GET['course_code'];


        $courseResult = $conn->query("SELECT * FROM course WHERE course_code = '$course_code'");


        $course = $courseResult->fetch_assoc();
        ?>


        <form action="updateCourseProcess.php" method="post">
          <div class="inputgroup">
            <label> Course Code:</label>
            <input type="text" name="course_code" value="<?php echo
              $course['course_code'] ?>" readonly>
          </div>

          <div class="inputgroup">
            <label> Course Title:</label>
            <input type="text" name="course_title" value="<?php echo
              $course['course_title'] ?>">
          </div>
          <div class="inputgroup">
            <label>Units:</label>
            <input type="number" name="units" value="<?php echo
              $course['units'] ?>">
          </div>
          <input type="submit" value="Submit">
        </form>
      </div>
    </div>
  </div>

</body>

</html>