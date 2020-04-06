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
echo '<h1>';
echo 'Nasz system';
echo '</h1>';
?>
<img src='/zdjeciaUzytkownikow/test.png' alt="Zdjęcie użytkownika!"></img>
<br></br>
<form action="logowanie.php" method="post"><fieldset>
  <legend>Podawanie danych logowania:</legend>
  <label for="Login">Login:</label><br>
  <input type="text" id="Login" name="Login"><br>
  <label for="Haslo">Haslo:</label><br>
  <input type="password" id="Haslo" name="Haslo"><br></br>
  <input type="submit" value="Zaloguj" name="Zaloguj"></fieldset>
</form>
<br></br>
<a href="user.php">user page</a>

<form action="cookie.php" method="get"><fieldset>
  <legend>Tworzenie cookie:</legend>
  <label for="czas">Czas:</label><br>
  <input type="number" id="czas" name="czas">
  <input type="submit" value="utworzCookie" name="utworzCookie">
</fieldset></form>
<?php if(isSet($_COOKIE['Cookie']))
{
  echo "Cookie ma wartosc: ".$_COOKIE['Cookie']."!";
}
else
{
  echo "Cookie jest przedawnione!";
}?>


</body>
</html>