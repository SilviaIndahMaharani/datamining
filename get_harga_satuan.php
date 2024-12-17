<?php
include 'koneksi.php';

$id = $_GET['id'];
$query = "SELECT harga_satuan FROM jenis_layanan WHERE id = ?";
$stmt = $koneksi->prepare($query);
$stmt->bind_param('i', $id);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();

echo json_encode(['harga_satuan' => $row['harga_satuan']]);
?>
