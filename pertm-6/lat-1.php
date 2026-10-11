<?php
$a[0] = 1;
$a[1] = 3;
$a[2] = 5;
$jumlahA = count($a);

$b["buah"] = "semangka";
$b["sayur"] = "wortel";
$b["daging"] = "ayam";
$b["utama"] = "nasi";
$jumlahB = sizeof($b);
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Latihan 1 - Count dan Sizeof</title>
</head>
<body>
<h1>Menghitung Elemen Array</h1>
<p><code>count()</code> dan <code>sizeof()</code> memiliki fungsi yang sama, yaitu menghitung jumlah elemen array.</p>

<h2>Array numerik $a</h2>
<p><?php echo implode(", ", $a); ?></p>
<p>Jumlah: <?php echo $jumlahA; ?></p>

<h2>Array asosiatif $b</h2>
<p><?php echo implode(", ", $b); ?></p>
<p>Jumlah: <?php echo $jumlahB; ?></p>
</body>
</html>
