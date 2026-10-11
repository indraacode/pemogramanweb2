<?php
$tipe = ["1.10", 5.0, 1.13];
$stringLimaDitemukan = in_array("5.0", $tipe, true);
$floatDitemukan = in_array(1.13, $tipe, true);
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Latihan 10 - In Array Strict</title>
</head>
<body>
<h1>in_array() dengan Tipe Data</h1>
<p>Argumen ketiga <code>true</code> membuat pencarian membandingkan nilai sekaligus tipe datanya.</p>

<table border="1" cellpadding="6" cellspacing="0">
    <tr><th>Nilai yang Dicari</th><th>Tipe</th><th>Hasil</th></tr>
    <tr>
        <td>"5.0"</td>
        <td>string</td>
        <td><?php echo $stringLimaDitemukan ? "Ditemukan" : "Tidak ditemukan"; ?></td>
    </tr>
    <tr>
        <td>1.13</td>
        <td>float</td>
        <td><?php echo $floatDitemukan ? "Ditemukan" : "Tidak ditemukan"; ?></td>
    </tr>
</table>

<p>Array berisi string <code>"1.10"</code>, float <code>5.0</code>, dan float <code>1.13</code>. Karena mode strict aktif, string <code>"5.0"</code> tidak sama dengan float <code>5.0</code>.</p>
</body>
</html>
