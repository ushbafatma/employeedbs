<!DOCTYPE html>
<?php
include("connection.php");
?>
<html>
<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>EMPLOYEE REGISTRATION FORM</title>

<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body style="background-color: #4682b4">
	<div class = "center" style="background-color: #f0e68c">
		<form action="#" method="POST" style="background-color: #f0e68c">
		<h1>EMPLOYEE REGISTRATION FORM</h1>
        <div class= "form">
        	<input type="text" name="fname" class="textfield" placeholder="First Name">
        	<input type="text" name="mname" class="textfield" placeholder="Middle Name">
        	<input type="text" name="lname" class="textfield" placeholder="Last  Name">

        	<label>   
			Gender :  
			</label><br>
			<select class="textfield" name="gender">
        		<option>Select Gender</option>
        		<option>Male</option>
        		<option>Female</option>
        		<option>Other</option>
        	</select>  
        	<input type="text" name="email" class="textfield" placeholder="Email Address">
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
        	<label for="doj">Date Of Joining:</label>
        	<input type="date" name="doj">
        	<input type="text" name="Address" class="textfield" placeholder="Address">
        	<input type="text" name="Salary" class="textfield" placeholder="Salary">
        	<input type="submit" name="save" value="SAVE" name="" class="btn" style="background-color: #4682b4;">
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
		$fname = $_POST['fname'];
		$mname = $_POST['mname'];
		$lname = $_POST['lname'];
		$gender = $_POST['gender'];
		$email = $_POST['email'];
        $dept = $_POST['department'];
        $doj = $_POST['doj'];
        $add = $_POST['Address'];
        $salary = $_POST['Salary'];

        $query = "INSERT INTO emp (fname,mname,lname,gender,email,course,doj,address,salary) VALUES ('$fname', '$mname','$lname','$gender','$email','$dept','$doj','$add','$salary')";
        $data = mysqli_query($conn,$query);
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