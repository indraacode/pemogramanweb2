<?php
$conn = new mysqli("localhost", "root", "", "lat_dbase");

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

$stmt = $conn->prepare(
    "INSERT INTO tbl_mhs (FirstName, LastName, Age)
     VALUES (?, ?, ?)"
);

$stmt->bind_param("ssi", $nama, $belakang, $umur);

$nama = "Karina";
$belakang = "Suwandi";
$umur = 29;
$stmt->execute();

$nama = "Glenn";
$belakang = "Gandari";
$umur = 32;
$stmt->execute();

echo "Data Karina dan Glenn berhasil ditambahkan.";

$stmt->close();
$conn->close();
?>