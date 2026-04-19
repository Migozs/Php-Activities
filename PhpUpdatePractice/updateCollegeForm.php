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
        <h2>Update College</h2>
        <?php
        include_once 'conn.php';


        $college_code = $_GET['college_code'];


        $collegeResult = $conn->query("SELECT * FROM college WHERE college_code = '$college_code'");


        $college = $collegeResult->fetch_assoc();
        ?>


        <form action="updateCollegeProcess.php" method="post">
          <div class="inputgroup">
            <label>College Code:</label>
            <input type="text" name="college_code" value="<?php echo
              $college['college_code'] ?>" readonly>
          </div>
          <div class="inputgroup">
            <label> College Name:</label>
            <input type="text" name="college_name" value="<?php echo
              $college['college_name'] ?>">
          </div>
          <input type="submit" value="Submit">
        </form>
      </div>
    </div>
  </div>

</body>

</html>