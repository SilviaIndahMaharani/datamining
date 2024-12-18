<?php
include 'koneksi.php';
header('Content-Type: application/json');

if (isset($_GET['kategori_id'])) {
    $kategori_id = intval($_GET['kategori_id']);
    $query = "SELECT harga FROM kategori WHERE id = $kategori_id";
    $result = mysqli_query($koneksi, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        echo json_encode(['harga' => $row['harga']]);
    } else {
        echo json_encode(['harga' => 0]);
    }
} else {
    echo json_encode(['harga' => 0]);
}
?>
