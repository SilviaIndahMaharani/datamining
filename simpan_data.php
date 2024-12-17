<?php
include 'koneksi.php'; // Menyertakan file koneksi

// Memeriksa apakah data POST dikirim
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Mengambil data dari formulir
    $tanggal = $_POST['tanggal'];
    $namaPelanggan = $_POST['namaPelanggan'];
    $jenisLayanan = $_POST['jenisLayanan']; // ID jenis layanan dari dropdown
    $kategori = $_POST['kategori'];
    $beratCucian = $_POST['beratCucian'];
    $harga = $_POST['harga'];

    // Memvalidasi input (opsional, misalnya untuk membersihkan input dari karakter khusus atau memeriksa tipe data)
    $tanggal = mysqli_real_escape_string($koneksi, $tanggal);
    $namaPelanggan = mysqli_real_escape_string($koneksi, $namaPelanggan);
    $jenisLayanan = mysqli_real_escape_string($koneksi, $jenisLayanan); // ID jenis layanan
    $kategori = mysqli_real_escape_string($koneksi, $kategori);
    $beratCucian = mysqli_real_escape_string($koneksi, $beratCucian);
    $harga = mysqli_real_escape_string($koneksi, $harga);

    // Query untuk menyimpan data ke dalam tabel pemasukan
    $sql = "INSERT INTO pemasukan (tanggal, nama_pelanggan, jenis_layanan_id, kategori, berat_cucian, harga) 
            VALUES ('$tanggal', '$namaPelanggan', '$jenisLayanan', '$kategori', '$beratCucian', '$harga')";

    if ($koneksi->query($sql) === TRUE) {
        echo "Data berhasil disimpan!";
        header("Location: buttons.php"); // Arahkan kembali ke halaman setelah simpan
        exit(); // Pastikan eksekusi berhenti setelah header redirect
    } else {
        echo "Error: " . $sql . "<br>" . $koneksi->error;
    }

    // Menutup koneksi
    $koneksi->close();
}
?>