<?php
include 'koneksi.php';

$id = $_GET['id'];
$query = "SELECT * FROM pemasukan WHERE id = $id";
$result = mysqli_query($koneksi, $query);

if ($result) {
    $row = mysqli_fetch_assoc($result);
    echo json_encode($row);
} else {
    echo json_encode(['error' => 'Data tidak ditemukan']);
}
?>
