<?php
date_default_timezone_set("Asia/Jakarta");

$tanggal = date("d-F-Y");
$jam = date("h:i:s A");
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Latihan 4 - Tanggal dan Waktu</title>
</head>
<body>
<h1>Fungsi date()</h1>
<p>Tanggal dan waktu berikut diambil dari server menggunakan fungsi built-in <code>date()</code>.</p>
<p>Sekarang tanggal <strong><?php echo $tanggal; ?></strong> dan jam <strong><?php echo $jam; ?></strong></p>
<p>Zona waktu yang digunakan: Asia/Jakarta. Muat ulang halaman untuk memperbarui waktu.</p>
</body>
</html>
