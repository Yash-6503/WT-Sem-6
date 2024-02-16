<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_SESSION['eno'] = $_POST['eno'];
    $_SESSION['ename'] = $_POST['ename'];
    $_SESSION['address'] = $_POST['address'];
}
?>

<html>
<head>
    <title>Employee Earnings</title>
</head>
<body>
    <h2>Employee Earnings</h2>
    <form action="displayed_employee_info.php" method="post"><br>
        <label for="basic">Basic:</label>
        <input type="text" name="basic" required>
            <br><br>
        <label for="da">DA:</label>
        <input type="text" name="da" required>
        <br><br>
        <label for="hra">HRA:</label>
        <input type="text" name="hra" required>
        <br><br>
        <button type="submit">Print Employee Info</button>
    </form>
</body>
</html>