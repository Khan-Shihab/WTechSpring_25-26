<!DOCTYPE html>
<html>
<head>
    <title>Student Management System</title>
</head>
<body>

<h2>Add Student</h2>

<form action="insert.php" method="POST">

    <label>Name:</label><br>
    <input type="text" name="name"><br><br>

    <label>Email:</label><br>
    <input type="email" name="email"><br><br>

    <label>Registration Number:</label><br>
    <input type="text" name="registration_no"><br><br>

    <label>Department:</label><br>
    <input type="text" name="department"><br><br>

    <input type="submit" value="Add Student">

</form>

<hr>

<h2>Student Records</h2>

<table border="1" cellpadding="10">

<thead>

<tr>
    <th>Name</th>
    <th>Email</th>
    <th>Registration No</th>
    <th>Department</th>
    <th>Action</th>
</tr>

</thead>

<tbody id="studentData">

</tbody>

</table>

<script src="ajax.js"></script>

</body>
</html>