<?php
session_start();

$name = "";
$password = "";
$email = "";
$website = "";
$gender = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = htmlspecialchars($_POST["name"] ?? "");
    $password = $_POST["password"] ?? "";
    $email = $_POST["email"] ?? "";
    $website = $_POST["website"] ?? "";
    $gender = $_POST["gender"] ?? "";

    if (
        !empty($name) && strlen($name) >= 3 &&
        !empty($password) && strlen($password) >= 4 &&
        filter_var($email, FILTER_VALIDATE_EMAIL) &&
        !empty($gender)
    ) {
        $_SESSION["name"] = $name;
        setcookie('name', $name, time() + 3600, "/");

        echo "Login Successful!<br>";
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