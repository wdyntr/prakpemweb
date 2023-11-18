<?php
include 'koneksi.php';

if (isset($_POST["hapus"])) {
    // Proses penghapusan data terakhir dari database
    $sql = "DELETE FROM mahasiswa ORDER BY time DESC LIMIT 1";
    $result = $conn->query($sql);

    if ($result) {
        echo "Data terakhir berhasil dihapus.";
    } else {
        echo "Gagal menghapus data. Error: " . $conn->error;
    }
}
header("Location: index.php");
exit();
?>