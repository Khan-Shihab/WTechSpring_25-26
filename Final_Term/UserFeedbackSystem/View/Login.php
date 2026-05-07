
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>

    <h2>Login</h2>
    
    <form action="../Controller/LoginController.php" method="POST">
        <div>
            <label for="username">Username:</label><br>
            <input type="text" id="username" name="username" required>
        </div>   
        <br>
        <div>
            <label for="password">Password:</label><br>
            <input type="password" id="password" name="password" required>
        </div>
        <br>

        <button type="submit" name="login">Login</button>
    </form>

    <p>Don't have an account? <a href="Registration.php">Register here</a></p>

</body>
</html>