<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_SESSION['basic'] = $_POST['basic'];
    $_SESSION['da'] = $_POST['da'];
    $_SESSION['hra'] = $_POST['hra'];
}

$eno = $_SESSION['eno'];
$ename = $_SESSION['ename'];
$address = $_SESSION['address'];
$basic = $_SESSION['basic'];
$da = $_SESSION['da'];
$hra = $_SESSION['hra'];

$total = $basic + $da + $hra;
?>

<html>
<head>
    <title>Print Employee Info</title>
</head>
<body>
    <h2>Employee Information</h2>
    <p>Employee Number: <?php echo $eno; ?></p>
    <p>Employee Name: <?php echo $ename; ?></p>
    <p>Address: <?php echo $address; ?></p>
    <p>Basic: <?php echo $basic; ?></p>
    <p>DA: <?php echo $da; ?></p>
    <p>HRA: <?php echo $hra; ?></p>
    <p>Total Earnings: <?php echo $total; ?></p>
</body>
</html>