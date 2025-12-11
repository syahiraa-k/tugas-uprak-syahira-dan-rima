<?php 
session_start();
if(!isset($_SESSION['login'])){ header("location:login.php"); }
include "koneksi.php";
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<a href="absensi.php"><div class="navbar">Tambah Absensi</div></a>
<div class="container">

<div class="card">
<form method="POST">
    Pegawai:
    <select name="pegawai">
        <?php
        $pegawai=mysqli_query($koneksi,"SELECT * FROM pegawai");
        while($p=mysqli_fetch_array($pegawai)){
            echo "<option value='$p[id]'>$p[nama]</option>";
        }
        ?>
    </select>

    Tanggal:
    <input type="date" name="tanggal" required>

    Status:
    <select name="status">
        <option>Hadir</option>
        <option>Izin</option>
        <option>Sakit</option>
        <option>Alpha</option>
    </select>

    <button type="submit" name="save">Simpan</button>
</form>

<?php
if(isset($_POST['save'])){
    $p = $_POST['pegawai'];
    $t = $_POST['tanggal'];
    $s = $_POST['status'];

    mysqli_query($koneksi, "INSERT INTO absensi VALUES('', '$p', '$t', '$s')");
    header("location:absensi.php");
}
?>

</div>

</div>
</body>
</html>
