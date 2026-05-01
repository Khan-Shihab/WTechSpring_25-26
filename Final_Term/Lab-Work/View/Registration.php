<?php
include "../Controller/RegistrationController.php";
echo "<h1>Registration Page</h1>";
?>
<body>
    <form method="POST" action="../Controller/RegistrationController.php" enctype="multipart/form-data">
        <table>
        <tr>
            <td><label for="name">Name</label></td>
            <td><input type="text" name="name" id="name">
            <span style="color: #e31111;">*</span></td>
        </tr>
        <tr>
            <td><label for= "password">password</label></td>
            <td><input type="password" name="password" id="password">
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
            <td>
                <input type="file" name="file" id="file">
            </td>
        </tr>
        <tr>
            <td><input type="Submit" name="submit" id="submit" value="Submit"></td>
        </tr>

        </table>
        

    </form>
    
</body>
</html>