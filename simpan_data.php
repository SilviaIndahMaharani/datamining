<?php
include 'koneksi.php'; // Koneksi ke database

// Periksa apakah metode POST digunakan
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Ambil data dari formulir
    $tanggal = $_POST['tanggal'];
    $namaPelanggan = $_POST['namaPelanggan'];
    $jenisLayanan = intval($_POST['jenisLayanan']);
    $kategori = intval($_POST['kategori']);
    $beratCucian = floatval($_POST['beratCucian']);
    $harga = floatval($_POST['harga']);
    $express = isset($_POST['express']) ? 1 : 0; // Periksa apakah Express dicentang

    // Hitung total harga
    $totalHarga = $beratCucian * $harga;
    if ($express) {
        $totalHarga *= 2; // Kalikan total harga jika Express dipilih
    }

    // Simpan data ke database
    $stmt = $koneksi->prepare("INSERT INTO pemasukan (tanggal, nama_pelanggan, jenis_layanan_id, kategori, berat_cucian, harga, total_harga, is_express) 
                               VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssiiiddi", $tanggal, $namaPelanggan, $jenisLayanan, $kategori, $beratCucian, $harga, $totalHarga, $express);

    if ($stmt->execute()) {
        echo "Data berhasil disimpan!";
        header("Location: buttons.php");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    // Tutup statement dan koneksi
    $stmt->close();
    $koneksi->close();
}
?>