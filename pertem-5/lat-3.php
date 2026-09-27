<?php
$namaFile = __DIR__ . "/counter.dat";

if (file_exists($namaFile)) {
    $berkas = fopen($namaFile, "r");

    $pencacah = (int) trim(fgets($berkas));
    $pencacah++;

    fclose($berkas);
} else {
    $pencacah = 1;
}

$berkas = fopen($namaFile, "w");
fputs($berkas, $pencacah);
fclose($berkas);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Contoh Counter</title>
</head>

<body>

<h1>Contoh Counter</h1>

<h2>Anda pengunjung ke-<?php echo $pencacah; ?></h2>

</body>
</html>