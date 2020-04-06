<?php if (!isset($_SESSION)) { session_start(); } ?>
<!DOCTYPE html>
<html>
<head>
<?php require 'funkcje.php'?>
<title>PHP</title>
<meta charset='UTF-8' />
</head>
<body>
<?php
if(load_image()){
    echo "<br></br>Pomyslnie zaladowano zdjecie!";
  }else{
      echo "<br></br>Nie udalo sie zaladowac zdjecia!";
  }
  ?>
<br></br>
<a href="index.php">logging in page</a>


</body>
</html>