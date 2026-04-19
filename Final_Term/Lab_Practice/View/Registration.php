<?php
    include "../Controller/RegistrationController.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
</head>
<body>
    <h1>welcome to Registration Page</h1>
    <form method="POST" action="">
        <table>
        <tr>
            <td><label for="Name">Name</label></td>
            <td><input type="text" name="name" id="name">
            <span style="color: #e31111;">*</span></td>
        </tr>
        <tr>
            <td><label for="Number">Number</label></td>
            <td><input type="number" name="number" id="number">
            <span style="color: #e31111;">*</span></td>
        </tr>
        <tr>
            <td><label for="email">Email</label></td>
            <td><input type="email" name="email" id="email">
            <span style="color: #e31111;">*</span></td>
        </tr>
        <tr>
            <td><label for="web">Website</label></td>
            <td><input type="text" name="website" id="website"></td>
        </tr>
        <tr>
            <td><label for="comment">Comment</label></td>
            <td><textarea name="message" id="message" rows="6" cols="50"></textarea></td>
        </tr>
        <tr>
            <td><label for="gender">Gender</label></td>
        
            <td>
                <input type="radio" name="gender" value="male"> Male           
                <input type="radio" name="gender" value="female">Female 
                <input type="radio" name="gender" value="others">Others 
                <span style="color: #e31111;">*</span>           
            </td>
        </tr>
        <tr>
            <td><input type="Submit" name="submit" id="submit" value="Submit"></td>
        </tr>

        </table>
        

    </form>
    
</body>
</html>