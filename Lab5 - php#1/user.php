<?php if (!isset($_SESSION)) { session_start(); } ?>
<!DOCTYPE html>
<html>
<head>
<title>PHP</title>
<meta charset='UTF-8' />
</head>
<body>
<?php require_once("funkcje.php");
if($_SESSION['zalogowany']!=1)
    header("Location:index.php");
else{
    echo "Zalogowano jako ".$_SESSION['zalogowanyImie']. "!";
}   ?>

<br>
<form action="load_image.php" method="post" enctype='multipart/form-data'><fieldset>
  <legend>Upload zdjec:</legend>
    <input type="file" name="plik" id="plik">
    <input type="submit" value="Zaladuj_zdjecie" name="Zaladuj_zdjecie"><fieldset>
</form>
<br></br>
<a href="index.php">logging in page</a>
 <br></br>
<form action="logowanie.php" method="post"><fieldset>
  <legend>Wylogowywanie sie:</legend>
  <input type="submit" value="Wyloguj" name="Wyloguj"><fieldset>
</form>
</body>
</html>