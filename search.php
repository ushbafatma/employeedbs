<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Employee Data Modification</title>

<link rel="stylesheet" type="text/css" href="style.css">
<style>
  

    .header {
      text-align: center;
      display: flex;
      justify-content: space-between;
      align-items: center;
      background-color: #f5f5f5;
    }
    .header .logo {
      text-align: center;
      font-size: 25px;
      font-family: 'Sriracha', cursive;
      color: #000;
      text-decoration: none;
      margin-left: 30px;
    }

     .btn
{
  background-color: #4CAF50;  
  color: white;  
  padding: 16px 20px;  
  margin: 8px 120px;  
  border: none;  
  cursor: pointer;  
  width: 70%;  
  opacity: 0.9;  
}

.cent .h1
{
  padding: 1px;  
  background-color:#4682b4;  
  text-align: center;
  color: white;
  font: Merriweather;
}
.cent
{
  padding: 1px;  
  background-color:#4682b4;  
  text-align: center;
  color: #4682b4 ;
  font: Merriweather;
}

</style>
</head>
<body style="background-color: #4682b4">
  <header class="cent" style="background-color: #f0e68c">
    <h1>DISPLAY EMPLOYEE DETAILS</h1>
    <br>
  </header>
  <form style="background-color: #f0e68c">
      <input type="submit" formaction="disall.php" name="save" value="DISPLAY ALL" name="" class="btn" style="background-color: #4682b4;">
      <input type="submit" name="save" formaction="byfname.php" value="SEARCH BY NAME" name="" class="btn" style="background-color: #4682b4;">
      <input type="submit" name="save" formaction="byid.php" value="SEARCH BY ID" name="" class="btn" style="background-color: #4682b4;">
      <input type="submit" name="save" formaction="bydept.php" value="SEARCH BY DEPARTMENT" name="" class="btn" style="background-color: #4682b4;">
      <input type="submit" formaction="index.html" value="HOME" name="" class="btn">
    </form>
</body>
</html>