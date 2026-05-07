<?php
session_start();
if(isset($_SESSION["name"])){
    $username = $_SESSION["name"];
    echo "Welcome ".$username;
}
else{
    header("Location: ../View/Login.php");
}

?>