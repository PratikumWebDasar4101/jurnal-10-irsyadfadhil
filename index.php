<?php
    session_start();
    if (isset($_SESSION['login'])) {
        header("location: dashboard.php");
    }
    if (isset($_GET['logout'])) {
        session_destroy();
        header("location: index.php");
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <center>
    <h2>Login</h2>
    <hr>
    <form action="proses.php?login=asu" method="post">
        <table>
            <tr>
                <td>Username</td>
                <td><input type="text" name="user" maxlength="20" required></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="pass" minlength="6" required></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" value="Submit"></td>
                <td><a href="register.php">Create User</a></td>
            </tr>
        </table>
        </center>
    </form>
</body>
</html>