<?php
include "../Model/db.php";

class viewFeedbackController {

    public function getAllFeedback() {

        $db = new db();
        $connection = $db->connection();

        $sql = "SELECT * FROM feedback ORDER BY id ";
        $result = $connection->query($sql);

        return $result;
    }
}
?>