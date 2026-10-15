<?php
$conn = new mysqli("localhost", "root", "", "lat_dbase");

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

$hasil = $conn->query("SELECT * FROM tbl_mhs");

while ($data = $hasil->fetch_row()) {
    echo $data[0] . " ";
    echo $data[1] . " ";
    echo $data[2] . " ";
    echo $data[3] . "<br>";
}

$conn->close();
?>