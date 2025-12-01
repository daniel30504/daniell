<?php 
require 'db.php'; 

// Ambil data berdasarkan ID
$id = $_GET['id'];
$mhs = ORM::for_table('mahasiswa')->find_one($id);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Data Mahasiswa</title>
</head>
<body>
    <h1>Edit Data Mahasiswa</h1>

    <?php if ($mhs): ?>
    <form action="" method="post">
        <label>NIM:</label><br>
        <input type="text" name="nim" value="<?= $mhs->nim ?>" required><br><br>

        <label>Nama:</label><br>
        <input type="text" name="nama" value="<?= $mhs->nama ?>" required><br><br>

        <label>Jurusan:</label><br>
        <input type="text" name="jurusan" value="<?= $mhs->jurusan ?>" required><br><br>

        <button type="submit" name="submit">Update</button>
    </form>
    <?php else: ?>
        <p>Data tidak ditemukan.</p>
    <?php endif; ?>

    <?php
    if (isset($_POST['submit'])) {
        $mhs->nim = $_POST['nim'];
        $mhs->nama = $_POST['nama'];
        $mhs->jurusan = $_POST['jurusan'];
        $mhs->save(); // Simpan perubahan ke database

        echo "<script>alert('Data berhasil diupdate!'); window.location='index.php';</script>";
    }
    ?>
</body>
</html>
