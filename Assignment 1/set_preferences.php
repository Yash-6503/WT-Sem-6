<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fontStyle = $_POST['font-style'];
    $fontSize = $_POST['font-size'];
    $fontColor = $_POST['font-color'];
    $bgColor = $_POST['background-color'];

    setcookie('fontStyle', $fontStyle, time() + (86400 * 30), "/");
    setcookie('fontSize', $fontSize, time() + (86400 * 30), "/");
    setcookie('fontColor', $fontColor, time() + (86400 * 30), "/");
    setcookie('bgColor', $bgColor, time() + (86400 * 30), "/");

    header("Location: display_preferences.php");
    exit();
}
?>