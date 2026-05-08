<?php
include "../Model/db.php";
session_start();
$data ="../data.json";
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name = $_POST["name"];
    $id = $_POST["id"];
    $a_mark = $_POST["a_mark"];
    $e_mark = $_POST["e_mark"];
    if(empty($name)||empty($id)||empty($a_mark)||empty($e_mark)){
        echo "must fill all the section";
    }
    elseif(!is_numeric($id)){
        echo "id must be numeric";
    }
    elseif($a_mark>100 || $a_mark<0 || $e_mark>100 || $e_mark<0){
        echo "All mark should be with in 0 - 100";
    }
    else{
        $tot = ($a_mark*0.4)+($e_mark*0.6);
        $total = (int)$tot;
        $grade = "";
        if($total>=80){
            $grade = "A+";
        }
        elseif($total>=70){
            $grade = "A";
        }
         elseif($total>=60){
            $grade = "B";
        }
         elseif($total>=50){
            $grade = "C";
        }
        else{
            $grade = "F";
        }
        echo "total mark is".$total;
        echo "grade ".$grade;

        $database = new db();
        $connection = $database->connection();
        $result = $database -> result($connection,"student_result",$name,$id,$a_mark,$e_mark,$total,$grade);
        if($result){
            echo "Successfullly Inserted";
        }
        else{
            echo "Something is wrong";
        }
        
        $formdata = array("student_id":$id,"name":$name,"total_mark":$total,"grade":$grade);
    }
}
?>