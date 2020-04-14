<?php
if (!isset($_SESSION)) { session_start(); }
require 'functions.php';
set_connection();
if(isset($_POST['id_prac'])&&is_numeric($_POST['id_prac'])&&is_string($_POST['nazwisko']))
{
    $sql="INSERT INTO pracownicy(id_prac,nazwisko) VALUES(?,?)";
    $stmt=$_SESSION['link']->prepare($sql);
    $stmt->bind_param("is",$_POST['id_prac'],$_POST['nazwisko']);
    $result=$stmt->execute();
    $stmt->close();    
    if(!$result)
    {
        printf("Query failed:%s\n",mysqli_error($_SESSION['link']));
        header("Location:form06_post.php");
        $_SESSION['message'] = "Nie udało się dodać użytkownika!";
    }
    else{
        header("Location:form06_get.php");
        $_SESSION['message'] = "Pomyślnie dodano użytkownika!";
    }
}
?>