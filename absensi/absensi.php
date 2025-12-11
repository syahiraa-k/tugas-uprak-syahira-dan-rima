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
<a href="index.php"><div class="navbar">Data Absensi</div></a>

<div class="container">

<a class="btn" href="tambah_absensi.php">+ Tambah Absensi</a>

<div class="card">
<table>
<tr>
    <th>No</th><th>Nama</th><th>Tanggal</th><th>Status</th><th>Aksi</th>
</tr>

<?php 
$no=1;
$data = mysqli_query($koneksi,"SELECT absensi.*, pegawai.nama FROM absensi JOIN pegawai ON pegawai.id=absensi.pegawai_id");
while($d=mysqli_fetch_array($data)){
?>
<tr>
    <td><?= $no++; ?></td>
    <td><?= $d['nama']; ?></td>
    <td><?= $d['tanggal']; ?></td>
    <td><?= $d['status']; ?></td>
    <td>
        <a class="btn" href="edit_absensi.php?id=<?= $d['id']; ?>">Edit</a>
        <a class="btn-danger" href="delete_absensi.php?id=<?= $d['id']; ?>">Hapus</a>
    </td>
</tr>
<?php } ?>

</table>
</div>

</div>
</body>
</html>
