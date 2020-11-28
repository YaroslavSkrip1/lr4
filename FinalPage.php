<!DOCTYPE html>
<html lang="en" class="page">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FinalPage</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<p class="fig"><img src="../images/photo.jpg"width="200" height="200" alt="Photo"></p>
<?php
  session_start();
  echo 'This is final page of this site, and your name is '.$_SESSION['name'];
?>
<br>
</body>
</html>