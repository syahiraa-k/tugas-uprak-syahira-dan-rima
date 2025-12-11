<?php
session_start();
include "koneksi.php";

$id=$_GET['id'];
$data=mysqli_fetch_array(mysqli_query($koneksi,"SELECT * FROM absensi WHERE id=$id"));
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>

<a href="absensi.php"><div class="navbar">Edit Absensi</div></a>
<div class="container">

<div class="card">

<form method="POST">
    Tanggal:
    <input type="date" name="tanggal" value="<?= $data['tanggal']; ?>">

    Status:
    <select name="status">
        <option <?= ($data['status']=="Hadir"?"selected":"") ?>>Hadir</option>
        <option <?= ($data['status']=="Izin"?"selected":"") ?>>Izin</option>
        <option <?= ($data['status']=="Sakit"?"selected":"") ?>>Sakit</option>
        <option <?= ($data['status']=="Alpha"?"selected":"") ?>>Alpha</option>
    </select>

    <button type="submit" name="update">Update</button>
</form>

<?php
if(isset($_POST['update'])){
    mysqli_query($koneksi,"UPDATE absensi SET tanggal='$_POST[tanggal]', status='$_POST[status]' WHERE id=$id");
    header("location:absensi.php");
}
?>

</div>

</div>
</body>
</html>
