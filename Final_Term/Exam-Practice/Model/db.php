<?php
class db{
    function connection(){
        $db_host = "localhost";
        $db_user = "root";
        $db_pass = "";
        $db_database = "Lab_Work"

        $connection = new mysqli($db_host,$db_user,$db_pass,$db_database);

        if($connection->connect_error){
            die("Connection Error: ".$connection->connect_error);
        }

        return $connection;
    }

    function result($connection,$table_name,$name,$student_id,$a_mark,$e_mark,$total_mark,$grade){

        $sql = "INSERT INTO ".$table_name."(name,student_id,a_mark,e_mark,total_mark,grade) VALUES ('".$name."','".$student_id."','".$a_mark."','".$e_mark."','".$total_mark."','".$grade."')";
        $result = $connection->query($sql);
        return $result;
    }
?>