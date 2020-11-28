<!DOCTYPE html>
<html lang="en" class="page">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MainPage</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body >
<p class="fig"><img src="../images/photo.jpg"width="200" height="200" alt="Photo"></p>
   <?php
   session_start();
   $_SESSION['name']=$_GET['Login'];
   if ($_GET['Login']=="Yaroslav"&&$_GET['Password']=="12345") {
           echo $_SESSION['name'].', you came to another page of this site!<br>';
       }
       else echo "<h1>Incorrect login or password<br></h1>"?> 
        <a href="FinalPage.php">Final page</a>
        
</body>

</html>