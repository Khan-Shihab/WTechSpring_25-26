<?php

include "model.php";

$database = new db();
$conn = $database->connection();

$model = new studentModel();

$result = $model->getStudents($conn);

if($result->num_rows > 0){

    while($row = $result->fetch_assoc()){

        echo "

        <tr>

            <td>".$row['name']."</td>

            <td>".$row['email']."</td>

            <td>".$row['registration_no']."</td>

            <td>".$row['department']."</td>

            <td>

                <a href='edit.php?id=".$row['id']."'>Edit</a>

                <a href='delete.php?id=".$row['id']."'>Delete</a>

            </td>

        </tr>

        ";
    }
}
else{

    echo "

    <tr>

        <td colspan='5'>No Data Found</td>

    </tr>

    ";
}

?>