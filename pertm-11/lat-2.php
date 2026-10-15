<?php
$conn = new mysqli("localhost", "root", "");

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

$sql = "CREATE DATABASE IF NOT EXISTS lat_dbase";

if ($conn->query($sql)) {
    echo "Database lat_dbase berhasil dibuat";
} else {
    echo "Gagal membuat database: " . $conn->error;
}

$conn->close();
?>