<?php
include "../Model/db.php";
session_start();
if($_SERVER['REQUEST_METHOD']=="POST"){
    $username = $_POST["username"];
    $password = $_POST["password"];

    if(empty($username) ||  empty($password)){
        echo "All fields are required";
    }
    else{
        $database = new db();
        $connection = $database -> connection();
        $result = $database->signin($connection,"user_table",$username,$password);
        if($result){
            header("Location: ../View/Dashboard.php");
        }
        else{
            echo "Please enter a valid user name and password";
        }
    }
}
?>