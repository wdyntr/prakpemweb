<?php
include 'koneksi.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['update'])) {
    // Retrieve form data
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $prodi = $_POST['prodi'];

    // Update the data in the database
    $sql = "UPDATE mahasiswa SET NIM=?, Nama=?, Prodi=? WHERE NIM=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $nim, $nama, $prodi, $nim);
    $stmt->execute();

    // Check for success or display an error message
    if ($stmt->affected_rows > 0) {
        echo "Data berhasil diupdate.";
    } else {
        echo "Gagal mengupdate data. Error: " . $stmt->error;
    }

    $stmt->close();
} elseif ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['NIM'])) {
    $nim = $_GET['NIM'];
    $result = getById($conn, $nim);

    if ($result->num_rows > 0) {
        $data = $result->fetch_assoc();

        // Display the form
        ?>
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
        <?php
    } else {
        echo "Data tidak ditemukan.";
    }
} else {
    echo "Permintaan tidak valid.";
}
?>
