<?php
include "db.php";
function getAllBooks($connection){
    $sql = "SELECT * FROM books";
    $result = $connection->query($sql);
    if(!$result){
        die("SQL Error: ".$connection->error);
    }
    $books = [];
    while($row = $result->fetch_assoc()){
        $books[] = $row;
    }
    return $books;
}



?>