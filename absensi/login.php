<!DOCTYPE html>
<html>
<head>
    <title>Login Absensi</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container" style="margin-top:80px; max-width:400px;">
    <div class="card">
        <h2>LOGIN</h2>
        <form action="cek_login.php" method="POST">
            Username:
            <input type="text" name="username" required>
            Password:
            <input type="password" name="password" required>
            <button type="submit">Masuk</button>
        </form>
        <p>belum punya akun? <a href="register.php">Register</a></p>
        

    </div>
</div>


</body>
</html>
