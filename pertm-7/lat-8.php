<?php
$var = ["18", "11", "2010"];
$tanggal = join("/", $var);
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Latihan 8 - Join</title>
</head>
<body>
<h1>Penggunaan join()</h1>
<p><code>join()</code> menggabungkan elemen array menjadi string dengan karakter pemisah. Fungsi ini identik dengan <code>implode()</code>.</p>
<pre>[<?php echo implode(", ", $var); ?>]</pre>
<p>Hasil: <strong><?php echo $tanggal; ?></strong></p>
</body>
</html>
