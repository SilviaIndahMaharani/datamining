<?php
include 'koneksi.php'; // Menyertakan file koneksi

// Periksa apakah metode POST digunakan
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Ambil data dari formulir
    $tanggal = $_POST['tanggal'];
    $namaPelanggan = $_POST['namaPelanggan'];
    $jenisLayanan = intval($_POST['jenisLayanan']); // ID jenis layanan
    $kategori = intval($_POST['kategori']);
    $beratCucian = floatval($_POST['beratCucian']);
    $harga = floatval($_POST['harga']);

    // Hitung total harga
    $totalHarga = $beratCucian * $harga;

    // Validasi input
    if (!$tanggal || !$namaPelanggan || !$jenisLayanan || !$kategori || !$beratCucian || !$harga) {
        die("Error: Semua field wajib diisi!");
    }

    // Query menggunakan Prepared Statements
    $stmt = $koneksi->prepare("INSERT INTO pemasukan (tanggal, nama_pelanggan, jenis_layanan_id, kategori, berat_cucian, harga, total_harga) 
                               VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssiiidd", $tanggal, $namaPelanggan, $jenisLayanan, $kategori, $beratCucian, $harga, $totalHarga);

    // Eksekusi query
    if ($stmt->execute()) {
        echo "Data berhasil disimpan!";
        header("Location: buttons.php"); // Redirect setelah simpan
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    // Tutup statement dan koneksi
    $stmt->close();
    $koneksi->close();
}
?>
