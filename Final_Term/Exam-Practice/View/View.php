<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>AJAX External JS</title>
</head>
<body>
    <form id="studentForm" onsubmit="return true">
        <label>Student Name</label>
        <input type="text" id="name">
        <br><br>
        <label>Student ID</label>
        <input type="text" id="id">
        <br><br>
        <label>Assignment Mark</label>
        <input type="number" id="a_mark">
        <br><br>
        <label>Exam Mark</label>
        <input type="number" id="e_mark">
        <br><br>  
        <button type="button" onclick="SubmitFormData()">Submit</button>     
    </form>

    <div id="userresponse"></div>

    <!-- External JS File Link -->
    <script src="../Contoller/JS/ShowResult.js"></script>
</body>
</html>