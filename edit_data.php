<?php
include 'koneksi.php';

$id = $_GET['id'];

// Query untuk mengambil data berdasarkan ID
$query = "SELECT * FROM pemasukan WHERE id = $id";
$result = mysqli_query($koneksi, $query);

if ($result) {
    $row = mysqli_fetch_assoc($result);
    echo json_encode([
        'id' => $row['id'],
        'tanggal' => $row['tanggal'],
        'nama_pelanggan' => $row['nama_pelanggan'],
        'jenis_layanan_id' => $row['jenis_layanan_id'],
        'kategori_id' => $row['kategori_id'],
        'berat_cucian' => $row['berat_cucian'],
        'harga_satuan' => $row['harga'],
        'total_harga' => $row['total_harga'],
        'is_express' => $row['is_express']
    ]);
} else {
    echo json_encode(['error' => 'Data tidak ditemukan']);
}

mysqli_close($koneksi);
?>