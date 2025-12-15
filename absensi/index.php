<?php
session_start();
if(!isset($_SESSION['login'])){ header("location:login.php"); }
include "koneksi.php";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard Absensi</title>
    <style>
        ul { list-style-type: none; padding: 0; }
        li { margin-bottom: 10px; }
        a { text-decoration: none; color: #007bff; padding: 10px; border: 1px solid #3B82F6; display: block; width: 200px; text-align: center; border-radius: 5px; }
    </style>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="navbar"> <center><h2>Sistem Absensi</h2></center>  <a href="logout.php" class="bttn" style="background:#0984e3;">Logout</a></div>

<div class="container">
    <table>
    <div class="card">
        <ul>
        <center><li><a href="pegawai.php">Kelola Siswa</a></li></center>
        <center><li><a href="absensi.php">Absensi</a></li></center>
        <center><li><a href="rekap.php">Rekap</a></li></center>
    </div>
    </table>
</div>

</body>
</html>
