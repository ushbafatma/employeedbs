<?php
include("connection.php");
?>
<html>
<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>SEARCH BY FIRST NAME</title>

<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body style="background-color: #4682b4">
	<div class = "center">
		<form action="#" method="POST">
		<h1>EMPLOYEE DATABASE SYSTEM</h1>
        <div class= "form">
        	<input type="text" name="fname" class="textfield" placeholder="First Name">

        	<input type="submit" name="search" value="SEARCH" name="" class="btn">
			<input type="submit" value="CLEAR" name="" class="btn">
      <input type="submit" formaction="index.html" value="HOME" name="" class="btn">
		</div>
	</form>
</div>

</body>
</html>
<?php
	if(isset($_POST['search']))
	{
		$search = $_POST['fname'];
		$query = "SELECT * from emp where fname= '$search'";
		 $result = $conn-> query($query);

		echo "<table border='1'>
      <tr>
         <th>ID</th>
         <th>Firstname</th>
         <th>Middlename</th>
         <th>Lastname</th>
         <th>Gender</th>
         <th>Department</th>
         <th>Date of Joining</th>
         <th>Address</th>
         <th>Salary</th>
      </tr>";
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
	}
?>