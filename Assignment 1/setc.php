<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Information</title>
</head>
<body bgcolor=pink>
<font size=3 color=black>
    <h2>Customer Information</h2>
    <form action="pinfo.php" method="post">
        <label for="name">Name:</label>
        <input type="text" name="name" required>

        <label for="addr">Address:</label>
        <input type="text" name="addr" required>

        <label for="mobNo">Mobile Number:</label>
        <input type="text" name="mobNo" required>

        <button type="submit">Next</button>
    </form>
</body>
</html>
