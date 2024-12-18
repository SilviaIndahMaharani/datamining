<?php
include 'koneksi.php'; // Koneksi ke database

// Ambil ID dari parameter URL
$id = isset($_GET['id']) ? intval($_GET['id']) : 0;
if ($id <= 0) {
    die('ID tidak valid');
}

// Query untuk mendapatkan data pemasukan berdasarkan ID
$query = "SELECT * FROM pemasukan WHERE id = $id";
$result = mysqli_query($koneksi, $query);
if (!$result || mysqli_num_rows($result) === 0) {
    die('Data tidak ditemukan');
}
$data = mysqli_fetch_assoc($result);

// Query untuk dropdown kategori
$resultKategori = mysqli_query($koneksi, "SELECT id, nama_kategori FROM kategori");

// Query untuk dropdown jenis layanan
$resultJenisLayanan = mysqli_query($koneksi, "SELECT id, nama_jenis_layanan FROM jenis_layanan");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ambil data dari form
    $tanggal = mysqli_real_escape_string($koneksi, $_POST['tanggal']);
    $namaPelanggan = mysqli_real_escape_string($koneksi, $_POST['namaPelanggan']);
    $jenisLayanan = intval($_POST['jenisLayanan']);
    $kategori = intval($_POST['kategori']);
    $beratCucian = floatval($_POST['beratCucian']);
    $harga = floatval($_POST['harga']);
    $totalHarga = floatval($_POST['totalHarga']);
    $isExpress = isset($_POST['express']) ? 1 : 0;

    // Validasi sederhana
    if (empty($tanggal) || empty($namaPelanggan) || $jenisLayanan <= 0 || $kategori <= 0 || $beratCucian <= 0 || $harga <= 0) {
        echo '<script>alert("Semua kolom wajib diisi!");</script>';
    } else {
        // Query untuk update data
        $updateQuery = "UPDATE pemasukan SET 
                        tanggal = '$tanggal', 
                        nama_pelanggan = '$namaPelanggan', 
                        jenis_layanan_id = $jenisLayanan, 
                        kategori = $kategori, 
                        berat_cucian = $beratCucian, 
                        harga = $harga, 
                        total_harga = $totalHarga, 
                        is_express = $isExpress
                        WHERE id = $id";

        if (mysqli_query($koneksi, $updateQuery)) {
            echo '<script>alert("Data berhasil diperbarui!"); window.location.href = "index.php";</script>';
        } else {
            echo '<script>alert("Gagal memperbarui data: ' . mysqli_error($koneksi) . '");</script>';
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Pemasukan</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h2>Edit Data Pemasukan</h2>
    <form action="" method="POST">
        <div class="mb-3">
            <label for="tanggal" class="form-label">Tanggal</label>
            <input type="date" class="form-control" id="tanggal" name="tanggal" value="<?php echo htmlspecialchars($data['tanggal']); ?>" required>
        </div>
        <div class="mb-3">
            <label for="namaPelanggan" class="form-label">Nama Pelanggan</label>
            <input type="text" class="form-control" id="namaPelanggan" name="namaPelanggan" value="<?php echo htmlspecialchars($data['nama_pelanggan']); ?>" required>
        </div>
        <div class="mb-3">
            <label for="jenisLayanan" class="form-label">Jenis Layanan</label>
            <select class="form-control" id="jenisLayanan" name="jenisLayanan" required>
                <option value="" disabled>Pilih Jenis Layanan</option>
                <?php while ($row = mysqli_fetch_assoc($resultJenisLayanan)) { ?>
                    <option value="<?php echo $row['id']; ?>" <?php echo ($data['jenis_layanan_id'] == $row['id']) ? 'selected' : ''; ?>>
                        <?php echo htmlspecialchars($row['nama_jenis_layanan']); ?>
                    </option>
                <?php } ?>
            </select>
        </div>
        <div class="mb-3">
            <label for="kategori" class="form-label">Kategori</label>
            <select class="form-control" id="kategori" name="kategori" required>
                <option value="" disabled>Pilih Kategori</option>
                <?php while ($row = mysqli_fetch_assoc($resultKategori)) { ?>
                    <option value="<?php echo $row['id']; ?>" <?php echo ($data['kategori'] == $row['id']) ? 'selected' : ''; ?>>
                        <?php echo htmlspecialchars($row['nama_kategori']); ?>
                    </option>
                <?php } ?>
            </select>
        </div>
        <div class="mb-3">
            <label for="beratCucian" class="form-label">Berat Cucian</label>
            <input type="number" class="form-control" id="beratCucian" name="beratCucian" value="<?php echo htmlspecialchars($data['berat_cucian']); ?>" required>
        </div>
        <div class="mb-3">
            <label for="harga" class="form-label">Harga Satuan</label>
            <input type="number" class="form-control" id="harga" name="harga" value="<?php echo htmlspecialchars($data['harga']); ?>" required>
        </div>
        <div class="mb-3">
            <label for="totalHarga" class="form-label">Total Harga</label>
            <input type="number" class="form-control" id="totalHarga" name="totalHarga" value="<?php echo htmlspecialchars($data['total_harga']); ?>" required readonly>
        </div>
        <div class="mb-3">
            <label class="form-label">
                <input type="checkbox" id="express" name="express" value="1" <?php echo ($data['is_express'] ? 'checked' : ''); ?>> Layanan Express (2x Harga)
            </label>
        </div>
        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        <a href="buttons.php" class="btn btn-secondary">Batal</a>
    </form>
</div>

<script>
// Tambahkan logika untuk menghitung ulang total harga jika diperlukan
</script>
</body>
</html>
