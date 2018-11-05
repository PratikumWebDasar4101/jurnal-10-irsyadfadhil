<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <center>
    <h2>Registrasi</h2>
    <hr>
    <form method="post" action="proses.php?register=registrasi">
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
                <td>Konfirmasi Password</td>
                <td><input type="password" name="confirmpass" required></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" value="Submit"></td>
            </tr>
        </table>
        </center>
    </form>
</body>
</html>