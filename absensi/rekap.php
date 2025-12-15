<?php
include "koneksi.php";

// Query untuk ambil semua pegawai
$pegawai = mysqli_query($koneksi, "
    SELECT p.id, p.nama,
        SUM(CASE WHEN a.status='Hadir' THEN 1 ELSE 0 END) AS hadir,
        SUM(CASE WHEN a.status='Sakit' THEN 1 ELSE 0 END) AS sakit,
        SUM(CASE WHEN a.status='Izin' THEN 1 ELSE 0 END) AS izin,
        SUM(CASE WHEN a.status='Alfa' THEN 1 ELSE 0 END) AS alfa
    FROM pegawai p
    LEFT JOIN absensi a ON p.id = a.pegawai_id
    GROUP BY p.id
");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Rekap Absensi</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<a href="index.php"><div class="navbar">Rekap</div></a>
<table>
    <tr>
        <th>Nama</th>
        <th>Hadir</th>
        <th>Sakit</th>
        <th>Izin</th>
        <th>Alfa</th>
    </tr>

    <?php while ($row = mysqli_fetch_assoc($pegawai)) { ?>
    <tr>
        <td><?= $row['nama']; ?></td>
        <td><?= $row['hadir']; ?></td>
        <td><?= $row['sakit']; ?></td>
        <td><?= $row['izin']; ?></td>
        <td><?= $row['alfa']; ?></td>
    </tr>
    <?php } ?>
</table>

</body>
</html>
