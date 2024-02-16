<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Displayed Preferences</title>
    <?php
    if(isset($_COOKIE['fontStyle'])) {
        echo '<style>body { font-family: "' . $_COOKIE['fontStyle'] . '"; }</style>';
    }
    if(isset($_COOKIE['fontSize'])) {
        echo '<style>body { font-size: ' . $_COOKIE['fontSize'] . 'px; }</style>';
    }
    if(isset($_COOKIE['fontColor'])) {
        echo '<style>body { color: ' . $_COOKIE['fontColor'] . '; }</style>';
    }
    if(isset($_COOKIE['bgColor'])) {
        echo '<style>body { background-color: ' . $_COOKIE['bgColor'] . '; }</style>';
    }
    ?>
</head>
<body>
    <h1>Displayed Preferences</h1>
    <?php
    if(isset($_COOKIE['fontStyle'])) {
        echo '<p>Font Style: ' . $_COOKIE['fontStyle'] . '</p>';
    }
    if(isset($_COOKIE['fontSize'])) {
        echo '<p>Font Size: ' . $_COOKIE['fontSize'] . 'px</p>';
    }
    if(isset($_COOKIE['fontColor'])) {
        echo '<p>Font Color: <span style="color:' . $_COOKIE['fontColor'] . ';">Sample Text</span></p>';
    }
    if(isset($_COOKIE['bgColor'])) {
        echo '<p>Background Color: <span style="background-color:' . $_COOKIE['bgColor'] . ';">Sample Background</span></p>';
    }
    ?>
    <p>This is the actual page with the selected preferences.</p>
</body>
</html>