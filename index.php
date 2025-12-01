<?php 
require 'db.php'; 
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Mahasiswa</title>
    <style>
        body { font-family: Arial; margin: 40px; }
        table { border-collapse: collapse; width: 70%; }
        th, td { border: 1px solid #ccc; padding: 8px; text-align: center; }
        th { background: #eee; }
        a { text-decoration: none; color: blue; }
        .btn { margin-right: 8px; }
    </style>
</head>
<body>
    <h1>Data Mahasiswa</h1>
    <a href="tambah.php">+ Tambah Data</a><br><br>

    <table>
        <tr>
            <th>No</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Jurusan</th>
            <th>Aksi</th>
        </tr>

        <?php
        // Ambil semua data mahasiswa pakai ORM
        $mahasiswa = ORM::for_table('mahasiswa')->find_many();
        $no = 1;

        foreach ($mahasiswa as $mhs) {
            echo "<tr>
                <td>{$no}</td>
                <td>{$mhs->nim}</td>
                <td>{$mhs->nama}</td>
                <td>{$mhs->jurusan}</td>
                <td>
                    <a class='btn' href='edit.php?id={$mhs->id}'>Edit</a>
                    <a class='btn' href='hapus.php?id={$mhs->id}' onclick='return confirm(\"Yakin hapus data?\")'>Hapus</a>
                </td>
            </tr>";
            $no++;
        }
        ?>
    </table>
</body>
</html>
