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
<a href="index.php"><div class="navbar">Data Pegawai</div></a>

<div class="container">

<div class="card">
<h3>Tambah Pegawai</h3>
<form method="POST">
    <input type="text" name="nama" placeholder="Nama Pegawai" required>
    <button type="submit" name="save">Simpan</button>
</form>

<?php 
if(isset($_POST['save'])){
    $nama = $_POST['nama'];
    mysqli_query($koneksi, "INSERT INTO pegawai VALUES('', '$nama')");
}
?>
</div>

<div class="card">
<h3>List Pegawai</h3>

<table>
<tr>
    <th>No</th><th>Nama</th><th>Aksi</th>
</tr>

<?php 
$no=1;
$data = mysqli_query($koneksi,"SELECT * FROM pegawai");
while($d=mysqli_fetch_array($data)){
?>
<tr>
    <td><?= $no++; ?></td>
    <td><?= $d['nama']; ?></td>
    <td><a href="pegawai.php?hapus=<?= $d['id']; ?>" class="btn-danger">Hapus</a></td>
</tr>
<?php } ?>

</table>

<?php
if(isset($_GET['hapus'])){
    mysqli_query($koneksi, "DELETE FROM pegawai WHERE id=".$_GET['hapus']);
    header("location:pegawai.php");
}
?>

</div>

</div>
</body>
</html>
