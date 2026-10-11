<?php
date_default_timezone_set("Asia/Jakarta");

$sekarang = getdate();
$bulan = $sekarang["month"];
$hari = $sekarang["mday"];
$tahun = $sekarang["year"];
$jam = $sekarang["hours"];

if ($jam <= 11) {
    $salam = "Selamat Pagi";
} elseif ($jam <= 15) {
    $salam = "Selamat Siang";
} elseif ($jam <= 18) {
    $salam = "Selamat Sore";
} else {
    $salam = "Selamat Malam";
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Latihan 5 - Getdate</title>
</head>
<body>
<h1>Fungsi getdate()</h1>
<p><code>getdate()</code> mengembalikan informasi waktu dalam bentuk array asosiatif.</p>

<h2><?php echo $salam; ?></h2>
<h2>Selamat datang</h2>
<p>Sekarang adalah tanggal <strong><?php echo "$hari $bulan $tahun"; ?></strong>.</p>
<p>Hari : <?php echo $sekarang["weekday"]; ?></p>
<p>Jam (24 jam) : <?php echo str_pad((string) $jam, 2, "0", STR_PAD_LEFT); ?></p>
<p>Hari ke- dalam tahun : <?php echo $sekarang["yday"] + 1; ?></p>

<p>Salam ditentukan berdasarkan nilai elemen <code>hours</code> pada array hasil <code>getdate()</code>.</p>
</body>
</html>
