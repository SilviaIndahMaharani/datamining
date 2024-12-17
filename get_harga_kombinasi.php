<?php
include 'koneksi.php';

$jenis_layanan_id = $_GET['jenis_layanan_id'];
$kategori_id = $_GET['kategori_id'];

// Query untuk mengambil harga kombinasi
$query = "SELECT harga FROM harga_kombinasi 
          WHERE jenis_layanan_id = $jenis_layanan_id 
          AND kategori_id = $kategori_id";

$result = mysqli_query($koneksi, $query);
if ($row = mysqli_fetch_assoc($result)) {
    echo json_encode(['harga' => $row['harga']]);
} else {
    echo json_encode(['harga' => 0]); // Jika tidak ditemukan
}
?>
