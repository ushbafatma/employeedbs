<?php
include("connection.php");
?>
<html>
<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Software Development</title>

<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
	<div class = "center">
		<form action="#" method="POST">
		<h1>DELETE EMPLOYEE DATA</h1>
        <div class= "form">
        	<input type="text" name="eid" class="textfield" placeholder="Employee ID">

        	<input type="submit" name="search" value="DELETE" name="" class="btn">
			<input type="submit" value="CLEAR" name="" class="btn">
		</div>
	</form>
</div>

</body>
</html>
<?php
	if(isset($_POST['search']))
	{
		$search = $_POST['eid'];
		$query = "DELETE from emp where id= $search";
		$data =mysqli_query($conn, $query);

		if($data)
        	{
        		echo "Data Deleted";
    		}
    	else
    	{
			 echo "Data Deleted";
    	}
	}
?>