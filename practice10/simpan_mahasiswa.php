<?php
include "koneksi.php";

// Assuming the input values are properly sanitized before using in the SQL query
$nama_lengkap = $_POST['nama_lengkap'];
$kelas_id = $_POST['kelas_id'];
$alamat = $_POST['alamat'];

$sql = "INSERT INTO mahasiswa (nama_lengkap, kelas_id, alamat)
        VALUES ('$nama_lengkap', $kelas_id, '$alamat')";

if ($conn->query($sql) === TRUE) {
    $conn->close();
    header("location: index.php");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    $conn->close();
    exit();
}
?>
