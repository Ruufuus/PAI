<?php function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}



class Osoba {
    public $login;
    public $haslo;
    public $imieNazwisko;
    }
    
$osoba1 = new Osoba;
$osoba1->login = "adam";
$osoba1->haslo = "adam2020";
$osoba1->imieNazwisko = "Adam Kowalski";
$osoba2 = new Osoba;
$osoba2->login = "agata";
$osoba2->haslo = "2020agata";
$osoba2->imieNazwisko = "Agata Nowak";


function test_if_log_in($login,$password,$osoba1,$osoba2){
    if($login == $osoba1->login && $password == $osoba1->haslo)
    {
        $_SESSION['zalogowanyImie'] = $osoba1->imieNazwisko;
        $_SESSION['zalogowany'] = 1;
    }
    else if($login == $osoba2->login && $password == $osoba2->haslo)
    {
        $_SESSION['zalogowanyImie'] = $osoba2->imieNazwisko;
        $_SESSION['zalogowany'] = 1;
    }
    else
    {
        $_SESSION['zalogowany'] = 0;
    }
}
function load_image(){
    if(isSet($_POST["Zaladuj_zdjecie"])){
  $currentDir = getcwd();
  $uploadDirectory = '/zdjeciaUzytkownikow//';
  $fileName = $_FILES['plik']['name'];
  $fileSize = $_FILES['plik']['size'];
  $fileType = $_FILES['plik']['type'];
  $fileTmpName = $_FILES['plik']['tmp_name'];
  if($fileName != "" && ($fileType == 'image/png' || $fileType == 'image/jpg' || $fileType == 'image/PNG' || $fileType == 'image/JPG' )){
    $uploadPath = $currentDir.$uploadDirectory.$fileName;
    if(move_uploaded_file($fileTmpName,$uploadPath))
      return 1;
  }
  return 0;
}
}?>