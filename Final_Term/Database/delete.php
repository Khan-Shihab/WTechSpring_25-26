<?php

include "model.php";

$database = new db();
$conn = $database->connection();

$model = new studentModel();

$id = $_GET['id'];

$result = $model->deleteStudent($conn,$id);

if($result){

    echo "Student Deleted Successfully";
}
else{

    echo "Delete Failed";
}

?>

<br><br>

<a href="index.php">Back</a>