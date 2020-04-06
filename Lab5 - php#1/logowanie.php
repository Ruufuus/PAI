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
if(isSet($_POST["Zaloguj"])){
    $Login = $_POST["Login"];
    $Haslo = $_POST["Haslo"];
    $Login = test_input($Login);
    $Haslo = test_input($Haslo);
    //echo "Przeslany login: ";
    //echo $Login;
    //echo '<br></br>';
    //echo "Przeslane haslo: ";
    //echo $Haslo;
    test_if_log_in($Login,$Haslo,$osoba1,$osoba2);
    if($_SESSION['zalogowany'] == 1){
        header("Location:user.php");   
    }
    else{
        header("Location:index.php");
    }
     
}
if(isSet($_POST["Wyloguj"])){
    session_unset();
    header("Location:index.php");
    
}
?>


</body>
</html>