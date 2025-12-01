<?php
require 'db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Cari data berdasarkan ID
    $mhs = ORM::for_table('mahasiswa')->find_one($id);

    if ($mhs) {
        $mhs->delete(); // Hapus data pakai ORM
        echo "<script>alert('Data berhasil dihapus!'); window.location='index.php';</script>";
    } else {
        echo "<script>alert('Data tidak ditemukan!'); window.location='index.php';</script>";
    }
}
?>
