<?php
session_start();
?>

<html>
<head>
    <title>Employee Details</title>
</head>
<body>
    <h2>Employee Details</h2>
    <form action="Earning_details.php" method="post">
        <label for="eno">Employee Number:</label><br>
        <input type="text" name="eno" required>
        <br>
        <label for="ename">Employee Name:</label><br>
        <input type="text" name="ename" required>
            <br>
        <label for="address">Address:</label><br>
        <input type="text" name="address" required>
            <br>
        <button type="submit">Next</button>
    </form>
</body>
</html>