<?php
include 'koneksi.php';

if (isset($_POST["nim"])) {
    $nim = $_POST['nim'];
    $sql = "DELETE FROM mahasiswa WHERE NIM=$nim";
    $result = $conn->query($sql);

    if ($result) {
        echo '<script>alert("Data berhasil dihapus."); window.location.href = "index.php";</script>';
    } else {
        echo "Gagal menghapus data. Error: " . $conn->error;
    }
}
exit();

?>