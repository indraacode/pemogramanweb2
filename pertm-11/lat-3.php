<?php
$conn = new mysqli("localhost", "root", "", "lat_dbase");

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

$sql = "CREATE TABLE IF NOT EXISTS tbl_mhs (
    mhsID INT AUTO_INCREMENT PRIMARY KEY,
    FirstName VARCHAR(15),
    LastName VARCHAR(15),
    Age INT
)";

if (!$conn->query($sql)) {
    die("Gagal membuat tabel: " . $conn->error);
}

$stmt = $conn->prepare(
    "INSERT INTO tbl_mhs (FirstName, LastName, Age)
     VALUES (?, ?, ?)"
);
$nama = "Anjar";
$belakang = "Prabowo";
$umur = 25;
$stmt->bind_param("ssi", $nama, $belakang, $umur);

if ($stmt->execute()) {
    echo "Tabel berhasil dibuat dan data Anjar berhasil ditambahkan.";
} else {
    echo "Gagal menambahkan data: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>