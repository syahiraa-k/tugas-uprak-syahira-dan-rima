<?php
session_start();
include "koneksi.php";

$username = $_POST['username'];
$password = $_POST['password'];

$cek = mysqli_query($koneksi, "SELECT * FROM admin WHERE username='$username' AND password='$password'");
$hasil = mysqli_num_rows($cek);

if($hasil > 0){
    $_SESSION['login'] = true;
    header("location:index.php");
} else {
    echo "<script>alert('Login gagal!'); window.location='login.php'</script>";
}
?>
