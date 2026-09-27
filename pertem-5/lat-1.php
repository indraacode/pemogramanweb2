<?php
$namaFile = __DIR__ . "/test1.txt";
$barisPertama = "";
$pesanError = "";
$file = fopen($namaFile, "r");

if ($file === false) {
    $pesanError = "Berkas test1.txt tidak dapat dibuka.";
} else {
    $hasilBaca = fgets($file);
    $barisPertama = $hasilBaca === false ? "" : rtrim($hasilBaca, "\r\n");
    fclose($file);
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Latihan 2</title>
</head>

<body>

<h1>Membaca Baris Pertama</h1>

<?php
if ($pesanError !== "") {
    echo $pesanError;
} else {
    echo $barisPertama;
}
?>

</body>
</html>