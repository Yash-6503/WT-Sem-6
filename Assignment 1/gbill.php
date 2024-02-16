<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_SESSION['prodName'] = $_POST['prodName'];
    $_SESSION['qty'] = $_POST['qty'];
    $_SESSION['rate'] = $_POST['rate'];
}

$name = $_SESSION['name'];
$addr = $_SESSION['addr'];
$mobNo = $_SESSION['mobNo'];
$prodName = $_SESSION['prodName'];
$qty = $_SESSION['qty'];
$rate = $_SESSION['rate'];

$totalAmount = $qty * $rate;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bill</title>
</head>
<body bgcolor=pink>
<font size=3 color=black>
    <h2>Bill</h2>
    <p><strong>Customer Information:</strong></p>
    <p>Name: <?php echo $name; ?></p>
    <p>Address: <?php echo $addr; ?></p>
    <p>Mobile Number: <?php echo $mobNo; ?></p>

    <p><strong>Product Information:</strong></p>
    <p>Product Name: <?php echo $prodName; ?></p>
    <p>Quantity: <?php echo $qty; ?></p>
    <p>Rate: <?php echo $rate; ?></p>
    
    <p><strong>Total Amount:</strong> <?php echo $totalAmount; ?></p>
</body>
</html>
