<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Colleges</title>
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

    <div class="pageheader">
      <h1>College</h1>
    </div>
    <div class="tablecontainer">
      <a href="createCollegeForm.php"><button class="addbutton">Add New College</button></a>
      <table class="table" border=1>

        <tr>
          <th>College Code</th>
          <th>College Name</th>
          <th>Actions</th>
        </tr>

        </tr>

        <?php
        include_once 'conn.php';


        $colleges = $conn->query("
                                SELECT college_code, college_name 
                                FROM college
                                ");



        foreach ($colleges as $college) {
          echo "
        <tr>
            <td>{$college['college_code']}</td>
            <td>{$college['college_name']}</td>
<td>
    <a href='updateCollegeForm.php?college_code={$college['college_code']}'><button>Update</button></a>
    <a href='deleteCollegeProcess.php?college_code={$college['college_code']}'><button>Delete</button></a>
</td>

        </tr>
        ";
        }
        ?>


      </table>


    </div>










  </div>



</body>

</html>