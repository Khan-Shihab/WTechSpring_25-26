<?php
include "../Controller/viewFeetbackController.php";

$controller = new viewFeedbackController();
$result = $controller->getAllFeedback();
?>

<h2>View Feedback</h2>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Subject</th>
        <th>Message</th>
        <th>Status</th>
    </tr>

    <?php while($row = $result->fetch_assoc()) { ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['subject']; ?></td>
            <td><?php echo $row['message']; ?></td>
            <td><?php echo $row['Status']; ?></td>
        </tr>
    <?php } ?>
</table>