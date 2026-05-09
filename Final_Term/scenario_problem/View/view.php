<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form id = "formdata">
        Name
        <input type="text" name="name" id="name">
        <br><br>
        Email
        <input type="email" name="email" id="email">
        <br><br>
        Number
        <input type="number" name="mark" id="mark">
        <br><br>
        <button onclick="addData()" >add button</button>
        <button onclick="deleteData()">delete button</button>
    </form>
    <br><br>
    <table border="1">
    <thead>
        <tr>
            <th>Name</th>
            <th>Price</th>
        </tr>
    </thead>

    <tbody id="bookTable">
    </tbody>
</table>
    <script src="ajax.js"></script>
</body>
</html>
