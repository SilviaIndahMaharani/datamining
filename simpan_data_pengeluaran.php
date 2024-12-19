<?php
// Include file koneksi
include 'koneksi.php';

// Tangkap data dari form
$tanggal = $_POST['tanggal'];
$kategori = $_POST['kategori'];
$jumlah = $_POST['jumlah'];
$harga = $_POST['harga'];
$keterangan = $_POST['keterangan'];

// Query untuk menyimpan data
$sql = "INSERT INTO pengeluaran (tanggal, kategori, jumlah, harga, keterangan) 
        VALUES ('$tanggal', '$kategori', '$jumlah', '$harga', '$keterangan')";

if ($koneksi->query($sql) === TRUE) {
    echo "Data berhasil disimpan!";
    header("Location: pengeluaran.php"); // Ganti dengan halaman yang sesuai
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $koneksi->error;
}

// Tutup koneksi
$koneksi->close();
?>
