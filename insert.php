<?php
include "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $prodi = $_POST['prodi'];

    if (isset($nim, $nama, $prodi)) {
        $sql = "INSERT INTO mahasiswa (NIM, Nama, Prodi) VALUES (?, ?, ?)";
        $res = $conn->prepare($sql);
        $res->bind_param("iss", $nim, $nama, $prodi);
        $res->execute();

        if ($res->affected_rows > 0) {
            echo '<script>alert("Data berhasil ditambahkan."); window.location.href = "index.php";</script>';
        } else {
            echo "Terjadi kesalahan : " . $res->error;
        }

        $res->close();
    } 
}
exit();
?>
