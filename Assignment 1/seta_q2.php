<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preferences Settings</title>
</head>
<body>
    <h1>Preferences Settings</h1>
    <form action="set_preferences.php" method="post">
        <label for="font-style">Font Style:</label>
        <select name="font-style" id="font-style">
            <option value="Arial">Arial</option>
            <option value="Times New Roman">Times New Roman</option>
        </select><br>

        <label for="font-size">Font Size:</label>
        <input type="number" name="font-size" id="font-size"><br>

        <label for="font-color">Font Color:</label>
        <input type="color" name="font-color" id="font-color"><br>

        <label for="background-color">Background Color:</label>
        <input type="color" name="background-color" id="background-color"><br>

        <input type="submit" value="Save Preferences">
    </form>
</body>
</html>
