<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST["name"];
    $email = $_POST["email"];
    $mark = $_POST["mark"];

    // VALIDATION
    if(empty($name) || strlen($name) < 3){
        echo json_encode(["error" => "Invalid name"]);
        exit;
    }

    if(empty($email)){
        echo json_encode(["error" => "Email required"]);
        exit;
    }

    if(empty($mark)){
        echo json_encode(["error" => "Mark required"]);
        exit;
    }

    // SUCCESS RESPONSE
    echo json_encode([
        "name" => $name,
        "email" => $email,
        "mark" => $mark
    ]);
}
?>