<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>EMPLOYEE DETAILS</title>

<link rel="stylesheet" type="text/css" href="style.css">
 <H1 style="text-align: center; color: white;"> EMPLOYEE DETAILS</H1>
</head>
<body style="background-color: #4682b4;">
  <table>
    <tr>
          <th>ID</th>
          <th>First Name</th>
          <th>Middle Name</th>
          <th>Last Name</th>
          <th>Gender</th>
          <th>Email</th>
          <th>Department</th>
          <th>Date of Joing</th>
          <th>Address</th>
          <th>Salary</th>
        </tr>
        <form>
        <input type="submit" formaction="index.html" value="HOME" name="" class="btn">
      </form>
<?php
include("connection.php");
  $sql = "SELECT * FROM emp";
  $result = $conn-> query($sql);

  if($result-> num_rows>0) {
    while($row = $result-> fetch_assoc())
    {
            echo "<tr>";
            $name = $row['id'];
            echo "<td>".$name."</td>";
            $name = $row['fname'];
            echo "<td>".$name."</td>";
            $name = $row['mname'];
            echo "<td>".$name."</td>";
            $name = $row['lname'];
             echo "<td>".$name."</td>";
            $name = $row['gender'];
            echo "<td>".$name."</td>";
            $name = $row['email'];
            echo "<td>".$name."</td>";
            $name = $row['course'];
            echo "<td>".$name."</td>";
            $name = $row['doj'];
            echo "<td>".$name."</td>";
            $name = $row['address'];
            echo "<td>".$name."</td>";
            $name = $row['salary'];
            echo "<td>".$name."</td>";
            echo "</tr>";
    }
    echo "</table>";
  }
  else{
    echo "0 result";
  }
?>
</table>
  </body>
  </html>