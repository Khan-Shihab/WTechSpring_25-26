<?php
class db{
    function connection(){
        $db_host = "localhost";
        $db_user = "root";
        $db_pass = "";
        $db_name = "course_registration";
        $connection = new mysqli($db_host, $db_user, $db_pass, $db_name);
        if($connection->connect_error)
            {
                die("Error: ".$connection->connect_error);
            }
        return $connection;
    }
    
}
?>