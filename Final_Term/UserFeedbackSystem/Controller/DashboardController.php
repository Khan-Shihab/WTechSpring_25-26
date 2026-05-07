<?php
session_start(); // Start session first
include "feedbackController.php";

if (isset($_SESSION["name"])) {
    $database = new db();
    $count = $database->countRow();
    $username = $_SESSION["name"];
    echo "Welcome " . htmlspecialchars($username); // XSS Protection
} else {
    header("Location: ../View/Login.php");
    exit(); // Stop script execution
}
?>