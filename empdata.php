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
      background-color: #4682b4;
    }
    .header .logo {
    	text-align: center;
      font-size: 25px;
      font-family: 'Sriracha', cursive;
      color: whitesmoke;
      text-decoration: none;
      margin-left: 30px;
    }
    .body
    {
      background-color: #4682b4;
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
  padding: 3px;  
  background-color:#4682b4;  
  text-align: center;
  color: white;
  font: Merriweather;
}
.cent
{
  padding: 3px;  
  background-color:#4682b4;  
  text-align: center;
  color: white;
  font: Merriweather;
}
</style>
</head>
<body style="background-color: #4682b4">
  <header class="cent">
    <h1>Employee Data Modification</h1>
    <br>
  </header>
  <form style="background-color: #f0e68c">
      <input type="submit" formaction="form.php" name="save" value="REGISTER" name="" class="btn" style="background-color: #4682b4;">
      <input type="submit" name="save" formaction="modify.php" value="MODIFY" name="" class="btn" style="background-color: #4682b4;">
      <input type="submit" name="save" formaction="search.php" value="SEARCH" name="" class="btn" style="background-color: #4682b4;">
      <input type="submit" name="save" formaction="delete.php" value="DROP" name="" class="btn" style="background-color: #4682b4;">
      <input type="submit" formaction="index.html" value="HOME" name="" class="btn">
    </form>
</body>
</html>