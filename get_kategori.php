<?php
include 'koneksi.php';

if (isset($_GET['jenis_layanan_id'])) {
    $jenis_layanan_id = intval($_GET['jenis_layanan_id']);

    $query = "
        SELECT kategori.id AS kategori_id, kategori.nama_kategori, jenis_layanan_kategori.harga
        FROM jenis_layanan_kategori
        JOIN kategori ON jenis_layanan_kategori.kategori_id = kategori.id
        WHERE jenis_layanan_kategori.jenis_layanan_id = $jenis_layanan_id
    ";

    $result = mysqli_query($koneksi, $query);

    $data = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }

    echo json_encode($data);
}
?>