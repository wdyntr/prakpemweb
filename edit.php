<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Update</title>
</head>
<body>
<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['update'])) {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $prodi = $_POST['prodi'];

    $sql = "UPDATE mahasiswa SET Nama=?, Prodi=? WHERE NIM=?";
    $res = $conn->prepare($sql);
    $res->bind_param("sss", $nama, $prodi, $nim);
    $res->execute();

    if ($res->affected_rows > 0) {
        echo '<script>alert("Data berhasil diupdate."); window.location.href = "index.php";</script>';
        exit();
    } else {
        echo "Gagal mengupdate data. Error: " . $res->error;
    }

    $res->close();
} elseif ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['NIM'])) {
    $nim = $_GET['NIM'];
    $result = getById($conn, $nim);

    if ($result->num_rows > 0) {
        $data = $result->fetch_assoc();

        ?>
        <section class="form update">
            <form action="" method="post">
                <div class="input-box">
                    <label for="nim">NIM</label>
                    <input type="number" name="nim" value="<?= $data['NIM'] ?>" required>
                </div>
                <div class="input-box">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" value="<?= $data['Nama'] ?>" required>
                </div>
                <div class="input-box">
                    <label for="prodi">Prodi: </label> 
                    <select id="prodi" name="prodi">
                        <option value="---Pilih Prodi---">---Pilih Prodi---</option>
                        <option value="T.IF">T.IF</option>
                        <option value="T.Elektro">T.Elektro</option>
                        <option value="T.Mesin">T.Mesin</option>
                        <option value="T.Kimia">T.Kimia</option>
                        <option value="T.Fisika">T.Fisika</option>
                        <option value="T.Industri">T.Industri</option>
                        <option value="T.Industri">T.Pangan</option>
                        <option value="T.Industri">T.Kelautan</option>
                        <option value="Matematika">Matematika</option>
                        <option value="Kimia">Kimia</option>
                        <option value="Fisika">Fisika</option>
                        <option value="Biologi">Biologi</option>
                        <option value="Sains Data">Sains Data</option>
                        <option value="Perencanaan Wilayah dan Kota">Perencanaan Wilayah dan Kota</option>
                        <option value="Desain Komunikasi Visual">Desain Komunikasi Visual</option>
                    </select>
                </div>
                <div class="btn">
                    <input type="submit" name="update" value="Update">
                </div>
            </form>
        </section>
        
        <?php
    } else {
        echo "Data tidak ditemukan.";
    }
} else {
    echo "Permintaan tidak valid.";
}
?>

</body>
</html>