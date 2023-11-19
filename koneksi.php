<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tugaspemweb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
 die("Koneksi gagal: " . $conn->connect_error);
}

function show($conn){
    $sql = "SELECT NIM, Nama, Prodi FROM mahasiswa";
    $result = $conn->query($sql);
    return $result;
}

function searchProdi($conn, $prodi){
    $sql = "SELECT NIM, Nama, Prodi FROM mahasiswa WHERE Prodi = '$prodi'";
    $result = $conn->query($sql);
    return $result;
}

function getById($conn, $nim) {
    $sql = "SELECT * FROM mahasiswa WHERE NIM = ?";
    $res = $conn->prepare($sql);
    $res->bind_param("s", $nim);
    $res->execute();
    $result = $res->get_result();
    $res->close();
    return $result;
}
?>
