<?php
include 'koneksi.php';

$res = isset($_GET['search_prodi']) ? searchProdi($conn, $_GET['search_prodi']) : show($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>121140183</title>
</head>
<body>
    <div class="heading">
        <h1>Data Mahasiswa</h1>
    </div>
    <section>
        <div class="form">
            <form action="" method="get" class="input">
                <label for="search_prodi">Cari berdasarkan Prodi: </label> 
                <select id="search_prodi" name="search_prodi">
                    <option value="">---Pilih Prodi---</option>
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
                <input type="submit" value="Cari">
            </form>
        </div>

        <table>
            <thead>
                <tr>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Prodi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                while ($row = $res->fetch_assoc()):
                    ?>
                    <tr>
                        <td><?= $row['NIM']?></td>
                        <td><?= $row['Nama']?></td>
                        <td><?= $row['Prodi']?></td>
                        <td>
                            <a href="edit.php?NIM=<?= $row['NIM'] ?>">Edit</a>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>

        <div class="form">
            <form action="insert.php" method="post">
                <div class="input-box">
                    <input type="number" name="nim" required>
                    <label for="nim">NIM</label>
                </div>
                <div class="input-box">
                    <input type="text" name="nama" required>
                    <label for="nama">Nama</label>
                </div>
                <div class="input-box">
                    <label for="prodi">Prodi: </label> 
                    <select id="prodi" name="prodi">
                        <option value="">---Pilih Prodi---</option>
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
                    <input type="submit" value="Tambahkan">
                </div>
            </form>
            <form action="del.php" method='POST'>
                <div class="btn hapus">
                    <input type="submit" name="hapus" value="Hapus">
                </div>
            </form>
        </div>
    </section>

</body>
</html>
