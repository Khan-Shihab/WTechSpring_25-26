<?php
session_start();

$name = "";
$number = "";
$email = "";
$website = "";
$commnet = "";
$gender = "";
$datafile = "../data.json";

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $name = $_POST["name"];
    $number = $_POST["number"];
    $email = $_POST["email"];
    $website = $_POST["website"];
    $comment = $_POST["comment"];
       
    if(!empty($name) && strlen($name) >= 5)
    {
        $_SESSION["name"] = $name;
        setcookie('name', $name, time()+3600, "/");
        echo "log in Successfull!";

        $formdata = array("name" => $name);

        if(file_exists($datafile)){
            $existdata = file_get_contents($datafile);
            $tempdata = json_decode($existdata, true);
        }
        else{
            $tempdata = array();
        }

        if(!is_array($tempdata))
        {
            $tempdata = array();
        }

        $tempdata[] = $formdata;
        $jsondata = json_encode($tempdata, JSON_PRETTY_PRINT);

        if(file_put_contents($datafile, $jsondata))
        {
            echo " Data Saved";
        }
        else{
            echo " Please Try Again";
        }

        $data = file_get_contents($datafile);
        $mydata = json_decode($data, true);
    }
    else{
        echo "Please ensure the session cookies";
    }
        
    if(isset($_SESSION['name']) || isset($_COOKIE['name']))
    {
        echo " Welcome Back";
    }
    else{
        echo " log in Again";
    }    
}
?>