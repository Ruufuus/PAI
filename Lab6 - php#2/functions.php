<?php
function set_connection(){
    $_SESSION['link'] = mysqli_connect("localhost","scott","tiger","instytut");
    if(!$_SESSION['link'])
    {
    printf("Connect failed:%s\n",mysqli_connect_error());
    exit();
    }
}

function show_message(){
    if(isset($_SESSION['message'])){
        printf($_SESSION['message']);
        print<<<KONIEC
        <br></br>
        KONIEC;
        unset($_SESSION['message']);
    }
}
?>