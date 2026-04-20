<?php
session_start();

$name = "";
$number = "";
$email = "";
$website = "";
$comment = "";
$gender = "";

$datafile = "../data.json";

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $name = $_POST["name"];
    $number = $_POST["number"];
    $email = $_POST["email"];
    $website = $_POST["website"];
    $comment = $_POST["message"];
    $gender = $_POST["gender"];

    if(!empty($name) && strlen($name) >= 5 && !empty($number) && !empty($email) && !empty($gender)
    )
    {
        $_SESSION["name"] = $name;
        setcookie('name', $name, time()+3600, "/");

        echo "Login Successful!<br>";

        $formdata = array(
            "name" => $name,
            "number" => $number,
            "email" => $email,
            "website" => $website,
            "comment" => $comment,
            "gender" => $gender
        );

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
            echo "Data Saved<br>";
        }
        else{
            echo "Please Try Again<br>";
        }

        $data = file_get_contents($datafile);
        $mydata = json_decode($data, true);
    }
    else{
        echo "Please fill all required fields properly";
    }

    if(isset($_SESSION['name']) || isset($_COOKIE['name']))
    {
        echo "Welcome Back";
    }
    else{
        echo "Login Again";
    }
}
?>