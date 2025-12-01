<?php
require_once 'idiorm.php';

// Konfigurasi koneksi database menggunakan Idiorm (ORM)
ORM::configure('mysql:host=localhost;dbname=crud_db');
ORM::configure('username', 'root');
ORM::configure('password', '');
ORM::configure('return_result_sets', true); // supaya bisa foreach dengan hasil query

// Tes koneksi (opsional)
try {
    $test = ORM::for_table('information_schema.tables')->find_one();
} catch (Exception $e) {
    die("Koneksi database gagal: " . $e->getMessage());
}
?>
