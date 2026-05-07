<?php
include "../Model/db.php";
session_start();
if($_SERVER["REQUEST_METHOD"]=="POST"){  
    $count = isset($_COOKIE['fb_count']) ? $_COOKIE['fb_count'] : 0;
    $datafile = "../data.json";
    $subject = $_POST["subject"];
    $message = $_POST["message"];
    $name = $_SESSION["name"];
    if(empty($subject) || empty($message) ){
        echo "please provie subject and feedback message";
    }
    else{
        $formdata=array("Name"=>$name,"Message"=>$message,"subject"=>$subject);
        if(file_exists($datafile)){
            $existdata = file_get_contents($datafile);
            $tempdata = json_decode($existdata,true);
        }
        else{
            $tempdata = array();
        }
        $tempdata = $formdata;
        $jsondata = json_encode($tempdata,JSON_PRETTY_PRINT);
        if(file_put_contents($datafile,$jsondata)){
            echo "data saved";
        }
        else{
            echo "try agian";
        }
        $data = file_get_contents($datafile);
        $mydata = json_decode($data,true);

        $database = new db();
        $connection = $database -> connection();
        $result = $database -> addfeedback($connection,"feedback",$subject,$message,$name,"Pending");
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