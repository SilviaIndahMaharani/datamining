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
                        <a class="collapse-item active" href="buttons.php">Pemasukan</a>
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
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Tanggal</th>
                    <th>Nama Pelanggan</th>
                    <th>Jenis Layanan</th>
                    <th>Kategori</th>
                    <th>Berat Cucian</th>
                    <th>Harga</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <?php
include 'koneksi.php'; // Sambungkan ke database

// Query untuk LEFT JOIN
$query = "SELECT pemasukan.id, pemasukan.tanggal, pemasukan.nama_pelanggan, 
                 jenis_layanan.nama_jenis_layanan AS jenis_layanan, 
                 pemasukan.kategori, pemasukan.berat_cucian, pemasukan.harga
          FROM pemasukan
          LEFT JOIN jenis_layanan ON pemasukan.jenis_layanan_id = jenis_layanan.id
          ORDER BY pemasukan.tanggal DESC";

$result = mysqli_query($koneksi, $query);

if (!$result) {
    die("Query gagal: " . mysqli_error($koneksi));
}
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
                        echo "<td>Rp. " . number_format($row['harga'], 0, ',', '.') . "</td>";
                        echo "<td>
                            <button onclick=\"editData(" . $row['id'] . ")\" style=\"background: none; border: none; cursor: pointer;\">
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
  // Fungsi untuk mengedit data
  function editData(id) {
    // Redirect ke halaman edit (sesuaikan dengan URL edit data Anda)
    window.location.href = 'edit_pemasukan.php?id=' + id;
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
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="tambahDataModalLabel">Tambah Data Pemasukan</h5>
        <button type="button" style="background: none; border: none; cursor: pointer;" onclick="tutupForm()">
            <i class="bi bi-x-lg" aria-label="Close"></i>
        </button>        
      </div>
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
                        <select class="form-control" id="jenisLayanan" name="jenisLayanan" required>
                            <option value="" disabled selected>Pilih Jenis Layanan</option>
                            <?php
                            // Menampilkan data jenis layanan dari database
                            while ($row = mysqli_fetch_assoc($resultJenisLayanan)) {
                                echo "<option value='" . $row['id'] . "'>" . htmlspecialchars($row['nama_jenis_layanan']) . "</option>";
                            }
                            ?>
                        </select>
                    </div>
                    <div class="mb-3">
    <label for="kategori" class="form-label">Kategori</label>
    <select class="form-control" id="kategori" name="kategori" required>
        <option value="" disabled selected>Pilih Kategori</option>
        <?php
        // Menampilkan data kategori dari database
        while ($row = mysqli_fetch_assoc($resultKategori)) {
            echo "<option value='" . $row['id'] . "'>" . htmlspecialchars($row['nama_kategori']) . "</option>";
        }
        ?>
    </select>
</div>

          <div class="mb-3">
              <label for="beratCucian" class="form-label">Berat Cucian</label>
              <input type="text" class="form-control" id="beratCucian" name="beratCucian" required>
          </div>
          <div class="mb-3">
              <label for="harga" class="form-label">Harga</label>
              <input type="number" class="form-control" id="harga" name="harga" required>
          </div>
          <button type="button" class="btn btn-secondary" onclick="redirectToCards()">Tutup</button>
          <button type="submit" class="btn btn-primary">Simpan Data</button>
        </form>
      </div>
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
  function redirectToCards() {
            window.location.href = "buttons.php"; // Ganti sesuai nama halaman tujuan
        }
</script>

            
            
            <!-- End of Main Content -->
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