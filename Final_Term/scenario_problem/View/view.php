<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>AJAX Form</title>
</head>
<body>

<form id="formdata">

    Name
    <input type="text" id="name">
    <br><br>

    Email
    <input type="email" id="email">
    <br><br>

    Mark
    <input type="number" id="mark">
    <br><br>

    <button type="button" onclick="addData()">Add</button>
    <button type="button" onclick="deleteData()">Delete</button>

</form>

<br><br>

<table border="1">
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Mark</th>
        </tr>
    </thead>

    <tbody id="bookTable"></tbody>
</table>

<script src="ajax.js"></script>

</body>
</html>