<?php
include 'koneksi.php';

// Ambil ID jenis layanan dari permintaan GET
$jenis_layanan_id = $_GET['jenis_layanan_id'];

if ($jenis_layanan_id == 1) { // Laundry (semua kategori, pakaian 6000)
    $query = "SELECT id, nama_kategori, 
                     CASE 
                         WHEN nama_kategori = 'Pakaian' THEN 6000 
                         ELSE harga 
                     END AS harga
              FROM kategori";
} else { // Cuci Kering atau Gosok (hanya pakaian)
    $query = "SELECT id, nama_kategori, 6000 AS harga 
              FROM kategori WHERE nama_kategori = 'Pakaian'";
}

$result = mysqli_query($koneksi, $query);

$kategori = [];
while ($row = mysqli_fetch_assoc($result)) {
    $kategori[] = $row;
}

echo json_encode($kategori);
?>