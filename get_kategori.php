<?php
include 'koneksi.php'; // Sambungkan ke database

// Query untuk mengambil data kategori
$queryKategori = "SELECT id, nama_kategori FROM kategori ORDER BY nama_kategori ASC";
$resultKategori = mysqli_query($koneksi, $queryKategori);

if (!$resultKategori) {
    die("Query kategori gagal: " . mysqli_error($koneksi));
}
?>