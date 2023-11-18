<?php
include "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $prodi = $_POST['prodi'];

    if (isset($nim, $nama, $prodi)) {
        $sql = "INSERT INTO mahasiswa (NIM, Nama, Prodi) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("iss", $nim, $nama, $prodi);
        $stmt->execute();

        if ($stmt->affected_rows > 0) {
            echo '<script>alert("Data berhasil ditambahkan."); window.location.href = "index.php";</script>';
        } else {
            echo "Terjadi kesalahan : " . $stmt->error;
        }

        $stmt->close();
    } 
}
exit();
?>
