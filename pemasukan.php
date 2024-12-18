<?php include 'get_kategori.php'; // Ambil query kategori ?>
<?php include 'get_layanan.php'; // Ambil query kategori ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>LAUNDRY MBAH US</title>

    <!-- Custom fonts for this template-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>

    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">


    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon rotate-n-10">
                    <img src="washing-machine.png" alt="Washing Machine" style="width: 40px; height: 40px;">
                </div>
                <div class="sidebar-brand-text mx-3">LAUNDRY MBAH US</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item active">
                <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true"
                    aria-controls="collapseTwo">
                    <i class="bi bi-folder"></i>
                    <span>Data Master</span>
                </a>
                <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Data Master: </h6>
                        <a class="collapse-item active" href="pemasukan.php">Pemasukan</a>
                        <a class="collapse-item" href="cards.php">Pengeluaran</a>
                    </div>
                </div>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
            
            </div>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="charts.html">
                    <i class="bi bi-person-fill-slash"></i>
                    <span>Sign Out</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            

        </ul>
      
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter"></span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerts Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 12, 2019</div>
                                        <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-donate text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 7, 2019</div>
                                        $290.29 has been deposited into your account!
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 2, 2019</div>
                                        Spending Alert: We've noticed unusually high spending for your account.
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                            </div>
                        </li>

                        <!-- Nav Item - Messages -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>
                                <!-- Counter - Messages -->
                                <span class="badge badge-danger badge-counter"></span>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    Message Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_1.svg"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div class="font-weight-bold">
                                        <div class="text-truncate">Hi there! I am wondering if you can help me with a
                                            problem I've been having.</div>
                                        <div class="small text-gray-500">Emily Fowler · 58m</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_2.svg"
                                            alt="...">
                                        <div class="status-indicator"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">I have the photos that you ordered last month, how
                                            would you like them sent to you?</div>
                                        <div class="small text-gray-500">Jae Chun · 1d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_3.svg"
                                            alt="...">
                                        <div class="status-indicator bg-warning"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Last month's report looks great, I am very happy with
                                            the progress so far, keep up the good work!</div>
                                        <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                                            told me that people say this to all dogs, even if they aren't good...</div>
                                        <div class="small text-gray-500">Chicken the Dog · 2w</div>
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Mbah Us</span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->
                 <!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tabel Pemasukan</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <button onclick="tambahData()" style="background-color: #4CAF50; color: white; border: none; padding: 6px 10px; cursor: pointer; border-radius: 5px;">
                <i class="bi bi-plus-circle" style="margin-right: 8px;"></i> Tambah Data
            </button>
        </div>

        <?php
include 'koneksi.php'; // Koneksi ke database

// Query untuk mengambil data dari tabel pemasukan
$query = "SELECT * FROM pemasukan ORDER BY tanggal DESC"; // Mengambil data dan mengurutkannya berdasarkan tanggal
$result = mysqli_query($koneksi, $query); // Menjalankan query

if (!$result) {
    die("Query gagal: " . mysqli_error($conn));
}
?>


<!-- HTML untuk menampilkan tabel -->
<div class="card-body">
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" style="color: black;">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Tanggal</th>
                    <th>Nama Pelanggan</th>
                    <th>Jenis Layanan</th>
                    <th>Kategori</th>
                    
                    <th>Berat Cucian</th>
                    <th>Harga Satuan (Rp)</th>
                    <th>Total Harga (Rp)</th>
                    <th>Layanan Express</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <?php
include 'koneksi.php'; // Koneksi ke database

// Query untuk LEFT JOIN tabel pemasukan, jenis_layanan, dan kategori
$query = "SELECT pemasukan.id, pemasukan.tanggal, pemasukan.nama_pelanggan, 
                 jenis_layanan.nama_jenis_layanan AS jenis_layanan, 
                 kategori.nama_kategori AS kategori, 
                 pemasukan.berat_cucian, pemasukan.harga AS harga_satuan, 
                 pemasukan.total_harga, pemasukan.is_express
          FROM pemasukan
          LEFT JOIN jenis_layanan ON pemasukan.jenis_layanan_id = jenis_layanan.id
          LEFT JOIN kategori ON pemasukan.kategori = kategori.id
          ORDER BY pemasukan.tanggal DESC";



$result = mysqli_query($koneksi, $query);

if (!$result) {
    die("Query gagal: " . mysqli_error($koneksi));
}

// Query untuk dropdown kategori
$resultKategori = mysqli_query($koneksi, "SELECT id, nama_kategori FROM kategori");

// Query untuk dropdown jenis layanan
$resultJenisLayanan = mysqli_query($koneksi, "SELECT id, nama_jenis_layanan FROM jenis_layanan");
?>
            <tbody>
                <?php
                if ($result->num_rows > 0) {
                    $no = 1;
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $no++ . "</td>";
                        echo "<td>" . date('d-m-Y', strtotime($row['tanggal'])) . "</td>";
                        echo "<td>" . htmlspecialchars($row['nama_pelanggan']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['jenis_layanan']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['kategori']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['berat_cucian']) . " KG</td>";
                        echo "<td>Rp. " . number_format($row['harga_satuan'], 0, ',', '.') . "</td>";
                        echo "<td>Rp. " . number_format($row['total_harga'], 0, ',', '.') . "</td>"; // Menampilkan total harga
                        echo "<td>" . ($row['is_express'] ? 'Ya' : 'Tidak') . "</td>"; // Kolom Express
                        echo "<td>
                             <button onclick=\"editData('" . $row['id'] . "')\" style=\"background: none; border: none; cursor: pointer;\">
                                <i class=\"bi bi-pencil-square\" style=\"margin-right: 10px;\"></i>
                            </button>
                            <button onclick=\"hapusData(" . $row['id'] . ")\" style=\"background: none; border: none; cursor: pointer;\">
                                <i class=\"bi bi-trash3-fill\" style=\"color: red;\"></i>
                            </button>
                        </td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='8' class='text-center'>Data tidak ditemukan</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</div>

<script>
    document.getElementById('editBeratCucian').addEventListener('input', hitungTotalEditHarga);
document.getElementById('editExpress').addEventListener('change', hitungTotalEditHarga);

function hitungTotalEditHarga() {
    const berat = parseFloat(document.getElementById('editBeratCucian').value) || 0; // Berat cucian
    const hargaSatuan = parseFloat(document.getElementById('editHarga').value) || 0; // Harga satuan
    const isExpress = document.getElementById('editExpress').checked; // Layanan Express

    // Hitung total harga
    let totalHarga = berat * hargaSatuan;

    // Jika express dipilih, kalikan 2
    if (isExpress) {
        totalHarga *= 2;
    }

    // Tampilkan total harga di input
    document.getElementById('editTotalHarga').value = Math.round(totalHarga);
}

   // Fungsi untuk menampilkan modal edit data
   function editData(id) {
    fetch('get_data_pemasukan.php?id=' + id)
        .then(response => response.json())
        .then(data => {
            document.getElementById('editId').value = id;
            document.getElementById('editTanggal').value = data.tanggal;
            document.getElementById('editNamaPelanggan').value = data.nama_pelanggan;
            document.getElementById('editJenisLayanan').value = data.jenis_layanan_id;
            document.getElementById('editKategori').value = data.kategori;
            document.getElementById('editBeratCucian').value = data.berat_cucian;

            // Format harga satuan dan total harga
            document.getElementById('editHarga').value = Math.round(data.harga_satuan);
            document.getElementById('editTotalHarga').value = Math.round(data.total_harga);
            document.getElementById('editExpress').checked = data.is_express == 1;

            // Jalankan perhitungan ulang saat modal pertama kali dibuka
            hitungTotalEditHarga();

            // Tampilkan modal edit
            $('#editDataModal').modal('show');
        })
        .catch(error => console.error('Error fetching data:', error));
}




    // Fungsi untuk menyimpan perubahan data
    function simpanEditData() {
        const formData = new FormData(document.getElementById('editDataForm'));

        fetch('update_pemasukan.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.text())
        .then(result => {
            alert(result);
            location.reload(); // Refresh halaman setelah update
        })
        .catch(error => console.error('Error updating data:', error));

        return false; // Mencegah submit form secara default
    }

    // Fungsi untuk menutup modal edit
    function tutupEditForm() {
        $('#editDataModal').modal('hide');
    }

  // Fungsi untuk menghapus data
  function hapusData(id) {
    if (confirm("Apakah Anda yakin ingin menghapus data ini?")) {
        window.location.href = "hapus_pemasukan.php?id=" + id;
    }
}
     
</script>

<?php
// Tutup koneksi
$koneksi->close();
?>


<!-- Modal Form untuk Tambah Data -->
<div class="modal fade" id="tambahDataModal" tabindex="-1" aria-labelledby="tambahDataModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
    <div style="background-color: #007bff; height: 5px;"></div>
      <div class="modal-header">
        <h5 class="modal-title" id="tambahDataModalLabel">Tambah Data Pemasukan</h5>
        <button type="button" style="background: none; border: none; cursor: pointer;" onclick="tutupForm()">
            <i class="bi bi-x-lg" aria-label="Close"></i>
        </button>        
      </div>
      <div class="modal-body">
        <!-- Form Input -->
        <form action="simpan_data.php" method="POST" onsubmit="return validasiForm()">
        <div class="row">
        <div class="col-md-6">
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
                        <select class="form-control" id="jenisLayanan" name="jenisLayanan" onchange="filterKategoriByLayanan()">
    <option value="" disabled selected>Pilih Jenis Layanan</option>
    <?php
    while ($row = mysqli_fetch_assoc($resultJenisLayanan)) {
        echo "<option value='" . $row['id'] . "'>" . htmlspecialchars($row['nama_jenis_layanan']) . "</option>";
    }
    ?>
</select>
          </div>
</div>

                   
                    <div class="col-md-6">
                    <div class="mb-3">
                            <label for="kategori" class="form-label">Kategori</label>
                            <select class="form-control" id="kategori" name="kategori" required>
                                <option value="" disabled selected>Pilih Kategori</option>
                                <?php
                                while ($row = mysqli_fetch_assoc($resultKategori)) {
                                    echo "<option value='" . $row['id'] . "'>" . htmlspecialchars($row['nama_kategori']) . "</option>";
                                }
                                ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">
                            <input type="checkbox" id="express" name="express" value="1"> Layanan Express (2x Harga)
                            </label>
                        </div>


          <div class="mb-3">
              <label for="beratCucian" class="form-label">Berat Cucian</label>
              <input type="text" class="form-control" id="beratCucian" name="beratCucian" required>
          </div>
          <div class="col-md-6 offset-md-6">
          <div class="mb-3">
    <label for="harga" class="form-label">Harga satuan</label>
    <input type="number" class="form-control" id="harga" name="harga" readonly>
</div>

<div class="mb-3">
    <label for="totalHarga" class="form-label">Total Harga</label>
    <input type="number" class="form-control"  id="totalHarga" name="totalHarga" readonly 
    style="border: 1px solid green; background-color:rgb(208, 237, 219); color: green ;">
</div>
</div>
</div>
</div>
<div class="modal-footer">
          <button type="button" class="btn btn-secondary" onclick="redirectToCards()">Tutup</button>
          <button type="submit" class="btn btn-primary">Simpan Data</button>
        </form>
      </div>
    </div>
  </div>
  </div>
</div>
</div>
<!-- Modal Form untuk Edit Data -->
<div class="modal fade" id="editDataModal" tabindex="-1" aria-labelledby="editDataModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div style="background-color: #007bff; height: 5px;"></div>
            <div class="modal-header">
                <h5 class="modal-title" id="editDataModalLabel">Edit Data Pemasukan</h5>
                <button type="button" style="background: none; border: none; cursor: pointer;" onclick="tutupEditForm()">
                    <i class="bi bi-x-lg" aria-label="Close"></i>
                </button>
            </div>
            <div class="modal-body">
                <!-- Form Input -->
                <form id="editDataForm" onsubmit="return simpanEditData()">
                    <input type="hidden" id="editId" name="id"> <!-- Input Hidden untuk ID -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="editTanggal" class="form-label">Tanggal</label>
                                <input type="date" class="form-control" id="editTanggal" name="tanggal" required>
                            </div>
                            <div class="mb-3">
                                <label for="editNamaPelanggan" class="form-label">Nama Pelanggan</label>
                                <input type="text" class="form-control" id="editNamaPelanggan" name="namaPelanggan" required>
                            </div>
                            <div class="mb-3">
                                <label for="editJenisLayanan" class="form-label">Jenis Layanan</label>
                                <select class="form-control" id="editJenisLayanan" name="jenisLayanan" onchange="filterKategoriByLayananEdit()" required>
                                    <option value="" disabled selected>Pilih Jenis Layanan</option>
                                    <?php
                                    mysqli_data_seek($resultJenisLayanan, 0);
                                    while ($row = mysqli_fetch_assoc($resultJenisLayanan)) {
                                        echo "<option value='" . $row['id'] . "'>" . htmlspecialchars($row['nama_jenis_layanan']) . "</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="editKategori" class="form-label">Kategori</label>
                                <select class="form-control" id="editKategori" name="kategori" required>
                                    <option value="" disabled selected>Pilih Kategori</option>
                                    <?php
                                    mysqli_data_seek($resultKategori, 0);
                                    while ($row = mysqli_fetch_assoc($resultKategori)) {
                                        echo "<option value='" . $row['id'] . "'>" . htmlspecialchars($row['nama_kategori']) . "</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">
                                    <input type="checkbox" id="editExpress" name="express" value="1"> Layanan Express (2x Harga)
                                </label>
                            </div>
                            <div class="mb-3">
                                <label for="editBeratCucian" class="form-label">Berat Cucian</label>
                                <input type="text" class="form-control" id="editBeratCucian" name="beratCucian" required>
                            </div>
                            <div class="mb-3">
                                <label for="editHarga" class="form-label">Harga Satuan</label>
                                <input type="number" class="form-control" id="editHarga" name="harga" readonly>
                            </div>
                            <div class="mb-3">
                                <label for="editTotalHarga" class="form-label">Total Harga</label>
                                <input type="number" class="form-control" id="editTotalHarga" name="totalHarga" readonly
                                    style="border: 1px solid green; background-color:rgb(208, 237, 219); color: green;">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" onclick="tutupEditForm()">Tutup</button>
                        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    // Event Listener untuk Modal Edit
document.getElementById('editBeratCucian').addEventListener('input', hitungTotalEditHarga);
document.getElementById('editExpress').addEventListener('change', hitungTotalEditHarga);

function hitungTotalEditHarga() {
    const berat = parseFloat(document.getElementById('editBeratCucian').value) || 0; // Berat cucian
    const hargaSatuan = parseFloat(document.getElementById('editHarga').value) || 0; // Harga satuan
    const isExpress = document.getElementById('editExpress').checked; // Checkbox Express

    // Hitung total harga
    let totalHarga = berat * hargaSatuan;

    // Jika Express dipilih, kalikan 2
    if (isExpress) {
        totalHarga *= 2;
    }

    // Tampilkan total harga di input Total Harga
    document.getElementById('editTotalHarga').value = Math.round(totalHarga);
}
function editData(id) {
    fetch('get_data_pemasukan.php?id=' + id)
        .then(response => response.json())
        .then(data => {
            document.getElementById('editId').value = id;
            document.getElementById('editTanggal').value = data.tanggal;
            document.getElementById('editNamaPelanggan').value = data.nama_pelanggan;
            document.getElementById('editJenisLayanan').value = data.jenis_layanan_id;
            document.getElementById('editKategori').value = data.kategori;
            document.getElementById('editBeratCucian').value = data.berat_cucian;

            // Set harga satuan dan total harga
            document.getElementById('editHarga').value = Math.round(data.harga_satuan);
            document.getElementById('editTotalHarga').value = Math.round(data.total_harga);
            document.getElementById('editExpress').checked = data.is_express == 1;

            // Jalankan hitung total harga saat modal dibuka
            hitungTotalEditHarga();

            // Tampilkan modal edit
            $('#editDataModal').modal('show');
        })
        .catch(error => console.error('Error fetching data:', error));
}

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
  function redirectToCards() {
            window.location.href = "pemasukan.php"; // Ganti sesuai nama halaman tujuan
        }

        function ambilHargaSatuan(idLayanan) {
    fetch('get_harga_satuan.php?id=' + idLayanan)
        .then(response => response.json())
        .then(data => {
            document.getElementById('hargaSatuan').value = data.harga_satuan;
        })
        .catch(error => console.error('Error:', error));
}

function filterKategoriByLayanan() {
    var jenisLayananId = document.getElementById('jenisLayanan').value;

    fetch('get_kategori_by_layanan.php?jenis_layanan_id=' + jenisLayananId)
        .then(response => response.json())
        .then(data => {
            var kategoriSelect = document.getElementById('kategori');
            kategoriSelect.innerHTML = "<option value='' disabled selected>Pilih Kategori</option>";

            data.forEach(function (kategori) {
                var option = document.createElement('option');
                option.value = kategori.id;
                option.setAttribute('data-harga', kategori.harga); // Simpan harga dalam atribut data
                option.textContent = kategori.nama_kategori;
                kategoriSelect.appendChild(option);
            });
        })
        .catch(error => console.error('Error fetching kategori:', error));
}

// Event listener untuk dropdown kategori
document.getElementById('kategori').addEventListener('change', function () {
    var jenisLayananId = document.getElementById('jenisLayanan').value;
    var kategoriId = this.value;

    // Ambil harga kombinasi dari server
    fetch('get_harga_kombinasi.php?jenis_layanan_id=' + jenisLayananId + '&kategori_id=' + kategoriId)
        .then(response => response.json())
        .then(data => {
            // Tampilkan harga di input Harga
            document.getElementById('harga').value = data.harga;
        })
        .catch(error => console.error('Error fetching harga kombinasi:', error));
});

// Fungsi untuk menghitung Total Harga
// Event listener untuk setiap perubahan pada input berat cucian, harga satuan, dan checkbox express
// Event listener untuk setiap perubahan input
document.getElementById('beratCucian').addEventListener('input', hitungTotalHarga);
document.getElementById('harga').addEventListener('input', hitungTotalHarga);
document.getElementById('express').addEventListener('change', hitungTotalHarga);

function hitungTotalHarga() {
    const berat = parseFloat(document.getElementById('beratCucian').value) || 0; // Ambil berat cucian
    const hargaSatuan = parseFloat(document.getElementById('harga').value) || 0; // Ambil harga satuan
    const isExpress = document.getElementById('express').checked; // Cek checkbox Express

    // Hitung total harga
    let totalHarga = berat * hargaSatuan;

    // Jika layanan Express dipilih, kalikan 2
    if (isExpress) {
        totalHarga *= 2;
    }

    // Tampilkan total harga tanpa desimal
    document.getElementById('totalHarga').value = Math.round(totalHarga);
}







</script>

            
            
            <!-- End of Main Content -->

            

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->
 <!-- Footer -->
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; Laundry 2024</span>
        </div>
    </div>
</footer>
<!-- End of Footer -->

            

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">X</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>
    <script>
        // Fungsi untuk menampilkan modal
function tambahData() {
    // Menampilkan modal ketika tombol "Tambah Data" diklik
    $('#tambahDataModal').modal('show');
}

// Fungsi untuk menyimpan data
function simpanData() {
    const tanggal = document.getElementById('tanggal').value;
    const namaPelanggan = document.getElementById('namaPelanggan').value;
    const jenisLayanan = document.getElementById('jenisLayanan').value;
    const kategori = document.getElementById('kategori').value;
    const beratCucian = document.getElementById('beratCucian').value;
    const harga = document.getElementById('harga').value;

    // Validasi input
    if (!tanggal || !namaPelanggan || !jenisLayanan || !kategori || !beratCucian || !harga) {
        alert("Semua field harus diisi!");
        return;
    }

    // Logika untuk menyimpan data, bisa menggunakan AJAX untuk mengirim ke server
    console.log('Data yang disimpan:', {
        tanggal,
        namaPelanggan,
        jenisLayanan,
        kategori,
        beratCucian,
        harga
    });

    // Menutup modal setelah data disimpan
    $('#tambahDataModal').modal('hide');
}

    </script>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>