<?php
// Include koneksi database
include 'koneksi.php';

// Tangkap ID dari parameter URL
$id = $_GET['id'];

// Periksa apakah ID valid
if (isset($id) && is_numeric($id)) {
    // Query untuk menghapus data
    $sql = "DELETE FROM pengeluaran WHERE id = $id";

    if ($koneksi->query($sql) === TRUE) {
        echo "<script>alert('Data berhasil dihapus!'); window.location.href='cards.php';</script>";
    } else {
        echo "<script>alert('Gagal menghapus data: " . $koneksi->error . "'); window.location.href='cards.php';</script>";
    }
} else {
    echo "<script>alert('ID tidak valid!'); window.location.href='cards.php';</script>";
}

// Tutup koneksi
$koneksi->close();
?>
