
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
</head>
<body>
    <center>
    <h1>Halaman Login</h1>
    <form action="proses-login.php" method="post">
        <table>
            <tr>
                <td>Username</td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password"></td>
            </tr>
            
            <tr>
                <td></td>
                <td><input type="submit" value="Login"></td>
            </tr>
            <tr>
                <td></td>
                <td><a href="registrasi.php">registrasi</a></td>
            </tr>
        </table>
    </form>
    </center>
</body>
</html>
