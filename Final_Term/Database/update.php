<?php

include "model.php";

$database = new db();
$conn = $database->connection();

$model = new studentModel();

$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$department = $_POST['department'];

$result = $model->updateStudent($conn,$id,$name,$email,$department);

if($result){

    echo "Student Updated Successfully";
}
else{

    echo "Update Failed";
}

?>

<br><br>

<a href="index.php">Back</a>