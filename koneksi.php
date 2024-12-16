<?php
// Konfigurasi database
$host = 'localhost'; // Nama host
$user = 'root';      // Nama pengguna database
$password = '';      // Kata sandi pengguna database
$database = 'datamining'; // Nama database

// Membuat koneksi
$koneksi = mysqli_connect($host, $user, $password, $database);

// Cek koneksi
if (!$koneksi) {
    die("Koneksi ke database gagal: " . mysqli_connect_error());
}

// Opsional: pesan berhasil untuk debug
// echo "Koneksi ke database berhasil!";
?>
