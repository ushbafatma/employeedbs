<?php
include("connection.php");
?>
<html>
<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>DROP A DEPARTMENT</title>

<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body style="background-color: #4682b4">
	<div class = "center">
		<form action="#" method="POST">
		<h1>DROP A DEPARTMENT</h1>
        <div class= "form">
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
        	<input type="submit" name="search" value="DELETE" name="" class="btn">
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
		$search = $_POST['department'];
		$query = "DELETE from dept where name= '$search'";
		$queryy = "DELETE from emp where course='$search'";
		$data =mysqli_query($conn, $query);
        $dataa = mysqli_query($conn, $queryy);
		if($data)
        	{
        		echo "Data Deleted";
    		}
    	else
    	{
    		echo "Failed to Delete Data";
    	}
	}
?>