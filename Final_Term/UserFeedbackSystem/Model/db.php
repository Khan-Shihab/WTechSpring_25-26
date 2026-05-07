<?php
class db{
    function connection(){
        $db_host = "localhost";
        $db_user = "root";
        $db_name = "UserFeedback";
        $db_password = "";

        $connection = new mysqli($db_host,$db_user,$db_password,$db_name);
        if($connection-> connect_error){
            die("Please connect the database".$connection-> connect_error);
        }
       return $connection;
    }

    function signup($connection,$tableName,$username,$password,$email){
        $sql = "INSERT INTO ".$tableName." (Name, Password, Email) VALUES ('".$username."', '".$password."', '".$email."')";       
        $result = $connection->query($sql);
        if (!$result) {
        die("SQL Error: " . $connection->error);
        }
        return $result;
    }
    function signin($connection,$tableName,$username,$password){
        $sql = "SELECT * FROM ".$tableName. " WHERE Name='".$username."' AND Password='".$password."'";
        $result = $connection->query($sql);
        
        if($result->num_rows > 0){
            return true;
        }
        return false;
    }
}
?>