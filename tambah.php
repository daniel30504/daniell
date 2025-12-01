<?php 
require 'db.php'; 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ambil data dari form
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $jurusan = $_POST['jurusan'];

    // Gunakan ORM untuk menyimpan ke database
    $mhs = ORM::for_table('mahasiswa')->create();
    $mhs->nim = $nim;
    $mhs->nama = $nama;
    $mhs->jurusan = $jurusan;
    $mhs->save();

    // Setelah simpan, kembali ke index
    header('Location: index.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Data Mahasiswa</title>
    <style>
        body { font-family: Arial; margin: 40px; }
        input { display: block; margin-bottom: 10px; padding: 8px; width: 300px; }
        button { padding: 8px 12px; }
        a { text-decoration: none; color: blue; }
    </style>
</head>
<body>
    <h1>Tambah Data Mahasiswa</h1>
    <form method="POST">
        <label>NIM:</label>
        <input type="text" name="nim" required>

        <label>Nama:</label>
        <input type="text" name="nama" required>

        <label>Jurusan:</label>
        <input type="text" name="jurusan" required>

        <button type="submit">Simpan</button>
    </form>

    <br>
    <a href="index.php">← Kembali</a>
</body>
</html>
