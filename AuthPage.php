<!DOCTYPE html>
<html lang="en" class="page">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AuthPage</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<p class="fig"><img src="../images/photo.jpg"width="200" height="200" alt="Photo"></p>
<?php
session_start();  
if (!isset($_GET['submit'])){
  echo 
  "<form  method='LINK' action='MainPage.php'> 
  <h2>Login: <input type=text name=Login>
  Password: <input type=password name=Password hiden></h2>
  <div class='btncnt'>
  <input type=submit name=submit value=Send class='btn'>
  </div>
  </form>";
  
}?>
</body>
</html>