<?php 
if (!isset($_SESSION)) { session_start(); }
require 'functions.php';
set_connection();
$sql = "SELECT * FROM pracownicy";
$result = $_SESSION['link']->query($sql);
$fields = mysqli_fetch_fields($result);
printf("<h1>PRACOWNICY</h1>");
printf("<table border=\"1\">");
printf("<tr><th>%s</th><th>%s</th></tr>",$fields[0]->name,$fields[1]->name);
while($row = mysqli_fetch_array($result))
	printf("<tr><td>%s</td><td>%s</td></tr>",$row[0],$row[1]);
printf("</table>");
$result->free();
$_SESSION['link']->close();
show_message();
print<<<KONIEC
<a href="form06_post.php">dodaj pracownika</a>
KONIEC;
?>