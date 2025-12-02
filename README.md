Project CRUD PHP – Sistem Pengelolaan Data Menggunakan Idiorm
Proyek ini merupakan tugas pengembangan aplikasi berbasis web yang berisi implementasi fitur pengelolaan data (CRUD) menggunakan PHP Native, Idiorm sebagai ORM, serta database MySQL. Project ini dibuat untuk mempraktikkan dasar-dasar manipulasi data, struktur file PHP, dan pengelolaan database. Seluruh file pada repository ini sudah diuji dan dapat dijalankan secara lokal menggunakan environment PHP seperti XAMPP atau Laragon.

📌 Fitur Utama

Menampilkan data dari database (Read)

Menambah data baru (Create)

Mengedit data (Update)

Menghapus data (Delete)

Koneksi database menggunakan Idiorm (ORM PHP lightweight)

Pengelolaan struktur file PHP yang sederhana

Interaksi data sepenuhnya menggunakan PHP Native dan MySQL

📂 Struktur Folder
Proyek ini memiliki struktur file sebagai berikut:

index.php – Menampilkan seluruh data

tambah.php – Form tambah data

edit.php – Form edit data

hapus.php – Menghapus data berdasarkan ID

db.php – Koneksi database + konfigurasi Idiorm

idiorm.php – Library Idiorm (ORM)

dan beberapa file pendukung lainnya

🛠️ Cara Menjalankan Proyek

Install XAMPP/Laragon atau web server lain.

Clone atau ekstrak repository ke folder server, contoh:

htdocs/crud__php/


Buat database MySQL:

CREATE DATABASE crud_db;


Buat tabel:

CREATE TABLE tb_data (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100),
    alamat TEXT,
    telp VARCHAR(20)
);


Sesuaikan konfigurasi pada db.php (username, password, nama database).

Jalankan melalui browser:

http://localhost/crud__php/
