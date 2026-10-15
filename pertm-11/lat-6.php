<?php
$conn = new mysqli("localhost", "root", "", "lat_dbase");

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

$hasil = $conn->query("SELECT * FROM tbl_mhs");

while ($data = $hasil->fetch_assoc()) {
    echo $data["FirstName"] . " ";
    echo $data["LastName"] . " ";
    echo $data["Age"] . "<br>";
}

$conn->close();
?>