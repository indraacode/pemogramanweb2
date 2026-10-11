<?php
$x = ["one", "two", "three"];
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Latihan 2 - Foreach Array</title>
</head>
<body>
<h1>Menampilkan Isi Array</h1>
<p>Perulangan <code>foreach</code> mengambil setiap nilai array secara berurutan.</p>
<ol>
<?php foreach ($x as $value): ?>
    <li><?php echo $value; ?></li>
<?php endforeach; ?>
</ol>
</body>
</html>
