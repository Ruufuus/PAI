<?php
if (!isset($_SESSION)) { session_start(); }
require 'functions.php';
print<<<KONIEC
<html>
<head>
<meta http-equiv="Content-Type"content="text/html;charset=utf-8"/>
</head>
<body>
<form action="form06_redirect.php"method="POST">
id_prac<input type="text"name="id_prac"><br></br>
nazwisko<input type="text"name="nazwisko"><br></br>
<input type="submit"value="Wstaw">
<input type="reset" value="Wyczysc">
</form>
</html>
KONIEC;
show_message();
?>