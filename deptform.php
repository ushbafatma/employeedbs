<!DOCTYPE html>
<?php
include("connection.php");
?>
<html>
<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>DEPARTMENT MODIFICATION FORM</title>

<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body style="background-color: #4682b4">
	<div class = "center" style="background-color: #f0e68c">
		<form action="#" method="POST" style="background-color: #f0e68c">
		<h1>DEPARTMENT MODIFICATION FORM</h1>
        <div class= "form">
        	<label for="department">Department :</label>
        	<select class="textfield" name="department">
        		<option>Select Department</option>
        		<option>IT</option>
        		<option>HR</option>
        		<option>Accounts</option>
        		<option>Sales</option>
        		<option>Marketing</option>
        		<option>Business Development</option>
        	</select>
        	<input type="text" name="hod_id" class="textfield" placeholder="EMPLOYEE ID OF HOD">
        	<input type="text" name="budget" class="textfield" placeholder="Budget">
        	<input type="submit" name="save" value="UPDATE" name="" class="btn" style="background-color: #4682b4;">
			<input type="submit" value="CLEAR" name="" class="btn">
			<input type="submit" formaction="index.html" value="HOME" name="" class="btn">
		</div>
	</form>
</div>

</body>
</html>

<?php
	if(isset($_POST['save']))
	{
		$dept = $_POST['department'];
		$hod_id = $_POST['hod_id'];
		$budget = $_POST['budget'];

        $query = "UPDATE dept SET hod_id = '$hod_id', budget = '$budget' WHERE department = '$department'";
		$data =mysqli_query($conn, $query);
        if($data)
        	{
        		echo "<script>alert('Success!');</script>";
    		}
    	else
    	{
    		echo "<script>alert('Try Again!');</script>";
    	}
	}
?>