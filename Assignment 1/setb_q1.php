<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <form method="post">
        <table>
            <tr>
                <td>Enter Username</td>
                <td><input type="text" name="txtname"><br></td>
            </tr>
            <tr>
                <td>Enter Password</td>
                <td><input type="password" name="txtpass"><br></td>
            </tr>
            <tr>
                <td><input type="submit" name="btnlogin" value="Login"></td>
            </tr>
        </table>
    </form>
</body>
</html>

<?php
session_start();

if (isset($_POST['btnlogin'])) {
    $enteredUsername = $_POST['txtname'];
    $enteredPassword = $_POST['txtpass'];

    if (!isset($_SESSION['login_attempts'])) {
        $_SESSION['login_attempts'] = 3;
    }

    if ($_SESSION['login_attempts'] > 0 && $enteredUsername == "kamini" && $enteredPassword == "2004") {
        
        header("Location: welcome.php");
    } else {
        echo "Incorrect username or password. Try again.";
        $_SESSION['login_attempts']--;
        if ($_SESSION['login_attempts'] == 0) {
            echo " Account blocked.";
        }
    }
    if ($enteredUsername == "kamini" && $enteredPassword == "2004") {
        
        header("Location: welcome.php");
    }
    
}
?>
