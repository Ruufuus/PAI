<?php if (!isset($_SESSION)) { session_start(); } ?>
<!DOCTYPE html>
<html>
<head>
<?php require 'funkcje.php'?>
<title>PHP</title>
<meta charset='UTF-8' />
</head>
<body>
<?php if(isSet($_GET["utworzCookie"])){
  $life_time = $_GET['czas'];
  if(setcookie("Cookie", "121", time()+$life_time,"/")){
      echo "Cookie utworzono pomyslnie!";
  }
  else{
      echo "Cookie utworzono niepomyslnie!"; 
  }
}?>
<br></br>
<a href="index.php">logging in page</a>


</body>
</html>