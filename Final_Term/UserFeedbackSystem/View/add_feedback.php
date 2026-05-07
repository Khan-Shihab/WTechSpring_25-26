<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Form</title>
</head>
<body>

    <form action="../Controller/feedbackController.php" method="POST">
        <label for="subject">Subject</label> 
        <input type="text" id="subject" name="subject" required>       
        <br><br>
        <label for="message">Message</label>
        <textarea id="message" name="message" rows="10" cols="50" required></textarea>
        <br><br>
        <button type="submit">Send Feedback</button>
    </form>
</body>
</html>