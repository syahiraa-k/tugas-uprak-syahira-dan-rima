<!DOCTYPE html>
<html>
<head>
    <title>Register Admin</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container" style="max-width:400px; margin-top:80px;">
    <div class="card">
        <h2>REGISTER</h2>

        <form action="" method="POST">
            Username:
            <input type="text" name="username" required>

            Password:
            <input type="password" name="password" required>

            <button type="submit" name="register">Daftar</button>
        </form>
        <p>sudah punya akun?<a href="login.php">login disini</a></p>

        <?php
        include "koneksi.php";

        if(isset($_POST['register'])){
            $username = $_POST['username'];
            $password = $_POST['password'];

            
            $password = $password;

            $query = mysqli_query($koneksi, 
                "INSERT INTO admin VALUES('', '$username', '$password')"
            );

            if($query){
                echo "<br><b>Akun berhasil dibuat!</b>";
            } else {
                echo "<br><b>Gagal registrasi.</b>";
            }
        }
        ?>
    </div>
</div>

</body>
</html>
