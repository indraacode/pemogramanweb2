<?php
$conn = new mysqli("localhost", "root", "", "lat_dbase");

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

$hasil = $conn->query("SELECT * FROM tbl_mhs");

$jumlah = $hasil->num_rows;

echo "Jumlah record: " . $jumlah;

$conn->close();
?>