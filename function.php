<?php
include 'koneksi.php'; // Koneksi ke database

// Fungsi untuk mengambil data dengan JOIN untuk tabel pemasukan
function getPemasukanData($koneksi) {
    $query = "SELECT pemasukan.id, pemasukan.tanggal, pemasukan.nama_pelanggan, 
                     jenis_layanan.nama_jenis_layanan AS jenis_layanan, 
                     kategori.nama_kategori AS kategori, 
                     pemasukan.berat_cucian, pemasukan.harga
              FROM pemasukan
              LEFT JOIN jenis_layanan ON pemasukan.jenis_layanan_id = jenis_layanan.id
              LEFT JOIN kategori ON pemasukan.kategori_id = kategori.id
              ORDER BY pemasukan.tanggal DESC";

    $result = mysqli_query($koneksi, $query);
    if (!$result) {
        die("Query gagal: " . mysqli_error($koneksi));
    }
    return $result;
}

// Fungsi untuk mengambil data kategori
function getKategoriData($koneksi) {
    $query = "SELECT id, nama_kategori FROM kategori ORDER BY nama_kategori ASC";
    $result = mysqli_query($koneksi, $query);
    if (!$result) {
        die("Query gagal: " . mysqli_error($koneksi));
    }
    return $result;
}

// Fungsi untuk mengambil data jenis layanan
function getJenisLayananData($koneksi) {
    $query = "SELECT id, nama_jenis_layanan FROM jenis_layanan ORDER BY nama_jenis_layanan ASC";
    $result = mysqli_query($koneksi, $query);
    if (!$result) {
        die("Query gagal: " . mysqli_error($koneksi));
    }
    return $result;
}
?>
