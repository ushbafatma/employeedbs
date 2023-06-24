<?php
include("connection.php");
?>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DISPLAY DETAILS OF A DEPARTMENT</title>

<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body style="background-color: #4682b4">
  <div class = "center">
    <form action="#" method="POST">
    <h1>DISPLAY DETAILS OF A DEPARTMENT</h1>
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
    $search = $_POST['department'];
    $query = "SELECT name,fname,mname,lname,hod_id,budget from dept join emp on id= hod_id where name='$search'";
    $data =mysqli_query($conn, $query);
    $result = $conn-> query($query);
      echo "<table border='1'>
      <tr>
         <th>DEPARTMENT</th>
         <th>Firstname</th>
         <th>Middlename</th>
         <th>Lastname</th>
         <th>HOD_ID</th>
         <th>BUDGET</th>
      </tr>";
     if($result-> num_rows>0) {
    while($row = $result-> fetch_assoc())
    {
    if($data)
          {
            echo "<tr>";
            $name = $row['name'];
            echo "<td>".$name."</td>";
            $name = $row['fname'];
            echo "<td>".$name."</td>";
            $name = $row['mname'];
            echo "<td>".$name."</td>";
            $name = $row['lname'];
             echo "<td>".$name."</td>";
            $name = $row['hod_id'];
            echo "<td>".$name."</td>";
            $name = $row['budget'];
            echo "<td>".$name."</td>";
            echo "</tr>";
      }
      else
      {
        echo "Failed to Delete Data";
      }
  }
}}
?>