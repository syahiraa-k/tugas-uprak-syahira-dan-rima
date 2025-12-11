<?php
session_start();
if(!isset($_SESSION['login'])){ header("location:login.php"); }
include "koneksi.php";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard Absensi</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="navbar">Sistem Absensi | <a href="logout.php" class="btn" style="background:red;">Logout</a></div>

<div class="container">

    <div class="card">
        <center><h2>Dashboard</h2></center>
        <a class="btn" href="pegawai.php">Kelola Pegawai</a>
        <a class="btn" href="absensi.php">Data Absensi</a>
    </div>

</div>

</body>
</html>
