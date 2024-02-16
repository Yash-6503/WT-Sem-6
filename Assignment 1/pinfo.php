<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_SESSION['name'] = $_POST['name'];
    $_SESSION['addr'] = $_POST['addr'];
    $_SESSION['mobNo'] = $_POST['mobNo'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Information</title>
</head>
<body bgcolor=pink>
<font size=3 color=black>
    <h2>Product Information</h2>
    <form action="gbill.php" method="post">
        <label for="prodName">Product Name:</label>
        <input type="text" name="prodName" required>

        <label for="qty">Quantity:</label>
        <input type="number" name="qty" required>

        <label for="rate">Rate:</label>
        <input type="number" name="rate" required>

        <button type="submit">Generate Bill</button>
    </form>
</body>
</html>
