<?php
$usiaKaryawan = [
    "Lisa" => 28,
    "Jack" => 16,
    "Ryan" => 35,
    "Rachel" => 46,
    "Grace" => 34,
];
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Latihan 3 - Array Asosiatif</title>
</head>
<body>
<h1>Usia Karyawan</h1>
<p>Nama menjadi key dan usia menjadi value pada array asosiatif.</p>
<ul>
<?php foreach ($usiaKaryawan as $nama => $umur): ?>
    <li>Nama Karyawan: <strong><?php echo $nama; ?></strong> | Usia: <?php echo $umur; ?> th</li>
<?php endforeach; ?>
</ul>
</body>
</html>
