<?php
// Koneksi ke database
include 'koneksi.php'; // Menghubungkan ke file koneksi

// Query untuk mengambil data jenis layanan
$queryJenisLayanan = "SELECT id, nama_jenis_layanan FROM jenis_layanan ORDER BY nama_jenis_layanan ASC";
$resultJenisLayanan = mysqli_query($koneksi, $queryJenisLayanan);

// Cek apakah query berhasil
if (!$resultJenisLayanan) {
    die("Query jenis layanan gagal: " . mysqli_error($koneksi));
}
?>