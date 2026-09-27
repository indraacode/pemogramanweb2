<?php
$namaFile = __DIR__ . "/test1.txt";
$daftarBaris = [];
$pesanError = "";

$file = fopen($namaFile, "r");

if ($file === false) {
    $pesanError = "Berkas test1.txt tidak dapat dibuka.";
} else {
    while (($baris = fgets($file)) !== false) {
        $daftarBaris[] = rtrim($baris, "\r\n");
    }

    fclose($file);
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Latihan 3</title>
</head>

<body>

<h1>Membaca Seluruh Berkas</h1>

<?php
if ($pesanError !== "") {
    echo $pesanError;
} else {
    foreach ($daftarBaris as $baris) {
        echo $baris . "<br>";
    }
}
?>

</body>
</html>