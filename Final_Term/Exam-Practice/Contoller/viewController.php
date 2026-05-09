<?php
include "../Model/db.php";
session_start();
$datafile = "../data.json";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $id = $_POST["id"];
    $a_mark = $_POST["a_mark"];
    $e_mark = $_POST["e_mark"];

    // 1. Validation
    if (empty($name) || empty($id) || empty($a_mark) || empty($e_mark)) {
        echo "Error: All fields are required!";
    } 
    elseif (!is_numeric($id)) {
        echo "Error: ID must be numeric!";
    } 
    elseif ($a_mark > 100 || $a_mark < 0 || $e_mark > 100 || $e_mark < 0) {
        echo "Error: Marks should be between 0 - 100";
    } 
    else {
        // 2. Calculation
        $tot = ($a_mark * 0.4) + ($e_mark * 0.6);
        $total = (int)$tot;
        $grade = "";

        if ($total >= 80) $grade = "A+";
        elseif ($total >= 70) $grade = "A";
        elseif ($total >= 60) $grade = "B";
        elseif ($total >= 50) $grade = "C";
        else $grade = "F";

        // 3. Database Operation
        $database = new db();
        $connection = $database->connection();
        $result = $database->result($connection, "student_result", $name, $id, $a_mark, $e_mark, $total, $grade);

        // 4. JSON File Operation
        $formdata = array(
            "student_id" => $id,
            "name" => $name,
            "total_mark" => $total,
            "grade" => $grade
        );

        $tempdata = [];
        if (file_exists($datafile)) {
            $exist_data = file_get_contents($datafile);
            $tempdata = json_decode($exist_data, true);
            if (!is_array($tempdata)) $tempdata = []; // Jodi file khali thake
        }

        $tempdata[] = $formdata;
        $json_data = json_encode($tempdata, JSON_PRETTY_PRINT);
        file_put_contents($datafile, $json_data);

        // 5. Final Output (Etai AJAX Response hishebe HTML-e jabe)
        if ($result) {
            echo "<strong>Success!</strong><br>";
            echo "Name: $name <br> ID: $id <br> Total: $total <br> Grade: $grade";
        } else {
            echo "Database error occurred!";
        }
    }
}
?>