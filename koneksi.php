<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tugaspemweb";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
 die("Koneksi gagal: " . $conn->connect_error);
}

function show($conn){
    $sql = "SELECT NIM, Nama, Prodi FROM mahasiswa";
    $result = $conn->query($sql);
    return $result;
}

?>
