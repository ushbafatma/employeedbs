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
		<h1>EMPLOYEE DATABASE SYSTEM</h1>
        <div class= "form">
        	<input type="text" name="fname" class="textfield" placeholder="First Name">

        	<input type="submit" name="search" value="DISPLAY" name="" class="btn">
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
		$query = "SELECT * from emp";
		$data =mysqli_query($conn, $query);

		$result = mysqli_fetch_assoc($data);

		$name = $result['mname'];
		echo $name;
	}
?>