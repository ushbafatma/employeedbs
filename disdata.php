<?php
include("connection.php");
  error_reporting(0);
  $query = "select * from emp";
  $connect = mysqli_query($conn,$query);
  $num = mysqli_num_rows($connect);
?>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Displaying ALl</title>

<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
</body>
</html>
<?php
  error_reporting(0);
  $query = "select * from emp";
  $connect = mysqli_query($conn,$query);
  $num = mysqli_num_rows($connect);
          echo "<table border='1'>
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
        </tr>";
        if($num>0)
        {
          while($data == mysqli_fetch_array($connect) or die($connect,$db))
          {
            echo "<tr>";
            $name = $result['mname'];
            echo "<td>".$name."</td>";
            $name = $result['lname'];
             echo "<td>".$name."</td>";
            $name = $result['email'];
    echo "<td>".$name."</td>";
    $name = $result['gender'];
    echo "<td>".$name."</td>";
    $name = $result['address'];
    echo "<td>".$name."</td>";
    $name = $result['salary'];
    echo "<td>".$name."</td>";
    $name = $result['course'];
    echo "<td>".$name."</td>";
            echo "</tr>";
          }
        }
        ?>
  

