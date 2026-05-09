<?php

include "db.php";

class studentModel{

    // INSERT STUDENT
    function insertStudent($conn,$name,$email,$reg,$department){

        $sql = "INSERT INTO students(name,email,registration_no,department)
        VALUES('$name','$email','$reg','$department')";

        return $conn->query($sql);
    }

    // FETCH ALL STUDENTS
    function getStudents($conn){

        $sql = "SELECT * FROM students";

        return $conn->query($sql);
    }

    // GET SINGLE STUDENT
    function getStudentById($conn,$id){

        $sql = "SELECT * FROM students WHERE id='$id'";

        return $conn->query($sql);
    }

    // UPDATE STUDENT
    function updateStudent($conn,$id,$name,$email,$department){

        $sql = "UPDATE students 
        SET
        name='$name',
        email='$email',
        department='$department'
        WHERE id='$id'";

        return $conn->query($sql);
    }

    // DELETE STUDENT
    function deleteStudent($conn,$id){

        $sql = "DELETE FROM students WHERE id='$id'";

        return $conn->query($sql);
    }

}

?>