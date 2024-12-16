<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>LAUNDRY MBAH US</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">


    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>
<div class="modal-body">
        <!-- Form Input -->
        <form action="simpan_data.php" method="POST" onsubmit="return validasiForm()">
          <div class="mb-3">
              <label for="tanggal" class="form-label">Tanggal</label>
              <input type="date" class="form-control" id="tanggal" name="tanggal" required>
          </div>
          <div class="mb-3">
              <label for="namaPelanggan" class="form-label">Nama Pelanggan</label>
              <input type="text" class="form-control" id="namaPelanggan" name="namaPelanggan" required>
          </div>
          <div class="mb-3">
              <label for="jenisLayanan" class="form-label">Jenis Layanan</label>
              <input type="text" class="form-control" id="jenisLayanan" name="jenisLayanan" required>
          </div>
          <div class="mb-3">
              <label for="kategori" class="form-label">Kategori</label>
              <input type="text" class="form-control" id="kategori" name="kategori" required>
          </div>
          <div class="mb-3">
              <label for="beratCucian" class="form-label">Berat Cucian</label>
              <input type="text" class="form-control" id="beratCucian" name="beratCucian" required>
          </div>
          <div class="mb-3">
              <label for="harga" class="form-label">Harga</label>
              <input type="number" class="form-control" id="harga" name="harga" required>
          </div>
          <button type="submit" class="btn btn-primary">Simpan Data</button>
        </form>
      </div>
    </div>
  </div>
</div>

<script>
  // Fungsi untuk menutup form dan mengosongkan input
  function tutupForm() {
    var modal = document.getElementById('tambahDataModal');
    modal.classList.remove('show'); // menutup modal
    modal.setAttribute('aria-hidden', 'true');
    var backdrop = document.querySelector('.modal-backdrop');
    if (backdrop) {
      backdrop.remove();
    }
    // Bersihkan form
    document.getElementById('tambahDataModal').reset();
  }

  // Fungsi validasi sebelum submit
  function validasiForm() {
    var tanggal = document.getElementById('tanggal').value;
    var namaPelanggan = document.getElementById('namaPelanggan').value;
    var jenisLayanan = document.getElementById('jenisLayanan').value;
    var kategori = document.getElementById('kategori').value;
    var beratCucian = document.getElementById('beratCucian').value;
    var harga = document.getElementById('harga').value;

    // Validasi sederhana
    if (!tanggal || !namaPelanggan || !jenisLayanan || !kategori || !beratCucian || !harga) {
      alert('Semua kolom wajib diisi!');
      return false;
    }
    return true;
  }
</script>
