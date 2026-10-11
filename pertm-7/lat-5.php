<?php
$program = ["Bobo", "Doraemon", "Spiderman"];
list($majalah, $komik, $film) = $program;
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Latihan 5 - List</title>
</head>
<body>
<h1>Penggunaan list()</h1>
<p>Fungsi <code>list()</code> mengambil setiap komponen array ke dalam variabel terpisah.</p>
<p>Cerpen : <?php echo $majalah; ?></p>
<p>Cerita Bergambar : <?php echo $komik; ?></p>
<p>Bioskop : <?php echo $film; ?></p>
</body>
</html>
