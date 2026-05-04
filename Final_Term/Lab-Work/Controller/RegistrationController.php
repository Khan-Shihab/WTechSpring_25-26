<?php
include "../Model/db.php";
session_start();

$name = "";
$password = "";
$email = "";
$website = "";
$gender = "";
$datafile = "../data.json";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST["name"];
    $password = $_POST["password"];
    $email = $_POST["email"];
    $website = $_POST["website"];
    $gender = $_POST["gender"];

    if (
        !empty($name) && strlen($name) >= 3 &&
        !empty($password) && strlen($password) >= 4 &&
        filter_var($email, FILTER_VALIDATE_EMAIL) &&
        !empty($gender)
    ) {
        $_SESSION["name"] = $name;
        setcookie('name', $name, time() + 3600, "/");

        echo "Login Successful!<br>";

        $formdata = array("name"=>$name,"password"=>$password,"email"=>$email);
        if(file_exists($datafile)){
            $existdata = file_get_contents($datafile);
            $tempdata = json_decode($existdata,true);

             if (json_last_error() !== JSON_ERROR_NONE) {
                $tempdata = array();
            }
        }
        else{
            $tempdata = array();
        }
        if(!is_array($tempdata)){
            $tempdata = array();
        }
        $tempdata[]=$formdata;
        $jsondata=json_encode($tempdata,JSON_PRETTY_PRINT);

        if( file_put_contents($datafile,$jsondata)){
            echo "Data saved";
        }
        else{
            echo "please try again";
        }
        $data = file_get_contents($datafile);
        $mydata = json_decode($data,true);

        $database = new db();
        $connection = $database ->connection();
        $result = $database->signup($connection,"Information",$name,$password,$email);
        if($result)
            {
           Header("Location: ../View/Login.php");     
            }

    } else {
        echo "Invalid input! Please check your data.<br>";
    }
}

if (isset($_SESSION['name']) || isset($_COOKIE['name'])) {
    echo "Welcome Back";
} else {
    echo "Login Again";
}
?>