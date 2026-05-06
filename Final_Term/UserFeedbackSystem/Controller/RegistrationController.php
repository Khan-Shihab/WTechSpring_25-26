<?php
include "../Model/db.php";
session_start();
if($_SERVER['REQUEST_METHOD']=="POST"){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $pass = $_POST["password"];
    $confirm = $_POST["confirm_password"];

    if(empty($name) || empty($email) || empty($pass)){
        echo "All fields are required";
    }
    elseif($pass !== $confirm){
        echo "Password do not match";
    }
    elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        echo "Enter a valid email";
    }
    else{
        $database = new db();
        $connection = $database ->connection();
        $result = $database->signup($connection,"user_table",$name,$pass,$email);
        if($result)
            {
           Header("Location: ../View/Login.php");     
            }
        else{
            echo "Something is Wrong";
        }
    }
}
?>