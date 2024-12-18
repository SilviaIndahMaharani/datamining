<?php
include 'koneksi.php';

$id = $_GET['id'];
$query = "SELECT id, tanggal, nama_pelanggan, jenis_layanan_id, kategori, berat_cucian, harga AS harga_satuan, total_harga, is_express 
          FROM pemasukan WHERE id = $id";
$result = mysqli_query($koneksi, $query);

if ($result) {
    $data = mysqli_fetch_assoc($result);
    echo json_encode($data);
} else {
    echo json_encode(['error' => 'Data tidak ditemukan']);
}
?>
