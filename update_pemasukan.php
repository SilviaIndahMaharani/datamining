<?php
include 'koneksi.php';

// Validasi apakah semua input ada
if (!isset($_POST['id'], $_POST['tanggal'], $_POST['namaPelanggan'], $_POST['jenisLayanan'], $_POST['kategori'], $_POST['beratCucian'], $_POST['harga'], $_POST['totalHarga'])) {
    die("Semua input wajib diisi.");
}

// Ambil data dari form
$id = (int)$_POST['id'];
$tanggal = mysqli_real_escape_string($koneksi, $_POST['tanggal']);
$nama_pelanggan = mysqli_real_escape_string($koneksi, $_POST['namaPelanggan']);
$jenis_layanan_id = (int)$_POST['jenisLayanan'];
$kategori = (int)$_POST['kategori'];
$berat_cucian = (float)$_POST['beratCucian'];
$harga_satuan = (float)$_POST['harga'];
$total_harga = (float)$_POST['totalHarga'];
$is_express = isset($_POST['express']) ? 1 : 0;

// Debugging untuk memastikan nilai tidak kosong
if (empty($id)) {
    die("ID tidak valid.");
}

// Query Update
$query = "UPDATE pemasukan 
          SET tanggal='$tanggal', nama_pelanggan='$nama_pelanggan', jenis_layanan_id=$jenis_layanan_id, 
              kategori=$kategori, berat_cucian=$berat_cucian, harga=$harga_satuan, 
              total_harga=$total_harga, is_express=$is_express 
          WHERE id=$id";

// Eksekusi Query
if (mysqli_query($koneksi, $query)) {
    echo "Data berhasil diperbarui.";
} else {
    echo "Gagal memperbarui data: " . mysqli_error($koneksi);
}

// Tutup koneksi
mysqli_close($koneksi);
?>
