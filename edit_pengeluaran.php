<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $tanggal = $_POST['tanggal'];
    $kategori = $_POST['kategori'];
    $jumlah = $_POST['jumlah'];
    $harga = $_POST['harga'];
    $keterangan = $_POST['keterangan'];

    $sql = "UPDATE pengeluaran SET 
            tanggal = '$tanggal',
            kategori = '$kategori',
            jumlah = '$jumlah',
            harga = '$harga',
            keterangan = '$keterangan'
            WHERE id = '$id'";

    if ($koneksi->query($sql) === TRUE) {
        header("Location: pengeluaran.php?status=success");
    } else {
        echo "Error updating record: " . $koneksi->error;
    }

    $koneksi->close();
}
?>
