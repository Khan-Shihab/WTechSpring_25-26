<?php
include "../Model/db.php";
session_start();
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $subject = $_POST["subject"];
    $message = $_POST["message"];
    $name = $_SESSION["name"];
    if(empty($subject) || empty($message) ){
        echo "please provie subject and feedback message";
    }
    else{
        $database = new db();
        $connection = $database -> connection();
        $result = $database -> addfeedback($connection,"feedback",$subject,$message,$name);
        if($result){
            header("Location: ../View/Dashboard.php");
            exit();
        }
        else{
            echo "Something is Wrong";
        }
    }
}
?>