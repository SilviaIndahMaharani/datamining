<?php
include 'koneksi.php';

session_start(); // Memulai session

// Cek apakah session sudah terinisialisasi dan data pengguna ada
if (isset($_SESSION['user_id'])) {
    // Ambil data pengguna dari session
    $first_name = $_SESSION['first_name'];
    $last_name = $_SESSION['last_name'];
    $email = $_SESSION['email'];
} else {
    // Jika belum login, arahkan ke halaman login
    header("Location: login.php");
    exit();
}
?>
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
    <link rel="icon" href="washing-machine.png" type="image/x-icon">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="dashboard.php">
                <div class="sidebar-brand-icon rotate-n-10">
                    <img src="washing-machine.png" alt="Washing Machine" style="width: 40px; height: 40px;">
                </div>
                <div class="sidebar-brand-text mx-3">LAUNDRY MBAH US</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="dashboard.php">
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
                        <a class="collapse-item" href="pengeluaran.php">Pengeluaran</a>
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
            <a class="nav-link" href="logout.php">
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

                        

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $first_name . ' ' . $last_name; ?></span>
                            <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
                        </a>

                            <!-- Dropdown Menu -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="logout.php">
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
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-2 text-gray-800">Tabel Pengeluaran</h1>
    <!-- Tombol Generate Report -->
    <a href="#" onclick="generateReport()" class="btn btn-sm btn-primary shadow-sm">
        <i class="fas fa-download fa-sm text-white-50"></i> Generate Report
    </a>
    </div>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <button onclick="tambahData()" style="background-color: #4CAF50; color: white; border: none; padding: 6px 10px; cursor: pointer; border-radius: 5px;">
                <i class="bi bi-plus-circle" style="margin-right: 8px;"></i> Tambah Data
            </button>
        </div>

        
        <div class="card-body">
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" style="color:black">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Tanggal</th>
                    <th>Kategori</th>
                    <th>Jumlah</th>
                    <th>Harga (Rp)</th>
                    <th>Keterangan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
            include 'koneksi.php';
                // Query untuk mengambil data pengeluaran
                $sql = "SELECT * FROM pengeluaran";
                $result = $koneksi->query($sql);

                // Menampilkan data jika ada
                if ($result->num_rows > 0) {
                    $no = 1;
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $no++ . "</td>";
                        echo "<td>" . date('d-m-Y', strtotime($row['tanggal'])) . "</td>";
                        echo "<td>" . htmlspecialchars($row['kategori']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['jumlah']) . " </td>";
                        echo "<td>Rp. " . number_format($row['harga'], 0, ',', '.') . "</td>";
                        echo "<td>" . htmlspecialchars($row['keterangan']) . "</td>";
                        echo "<td>
                             <button type=\"button\" class=\"btn btn-sm btn-primary\" onclick='showEditModal(" . json_encode($row) . ")'>
                                <i class=\"bi bi-pencil-square\" style=\"margin-right: 10px;\"></i> Edit
                            </button>
                <!-- Tombol Hapus -->
                <button onclick=\"hapusData(" . $row['id'] . ")\" style=\"background: none; border: none; cursor: pointer;\">
                    <i class=\"bi bi-trash3-fill\" style=\"color: red;\"></i>
                </button>
                        </td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='7' class='text-center'>Data tidak ditemukan</td></tr>";
                }

                // Menutup koneksi
                $koneksi->close();
                ?>
            </tbody>
        </table>
    </div>
</div>

<!-- Modal Form untuk Tambah Data -->
<div class="modal fade" id="tambahDataModal" tabindex="-1" aria-labelledby="tambahDataModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="tambahDataModalLabel">Tambah Data Pengeluaran</h5>
                    <button type="button" onclick="redirectToCards()" style="background: none; border: none; cursor: pointer;">
                        <i class="bi bi-x-lg" aria-label="Close"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Form Input -->
                    <form action="simpan_data_pengeluaran.php" method="POST" onsubmit="return validasiForm()">
                        <div class="mb-3">
                            <label for="tanggal" class="form-label">Tanggal</label>
                            <input type="date" class="form-control" id="tanggal" name="tanggal" required>
                        </div>
                        <div class="mb-3">
                            <label for="kategori" class="form-label">Kategori</label>
                            <input type="text" class="form-control" id="kategori" name="kategori" required>
                        </div>
                        <div class="mb-3">
                            <label for="jumlah" class="form-label">Jumlah</label>
                            <input type="text" class="form-control" id="jumlah" name="jumlah" required>
                        </div>
                        <div class="mb-3">
                            <label for="harga" class="form-label">Harga (Rp)</label>
                            <input type="text" class="form-control" id="harga" name="harga" required>
                        </div>
                        <div class="mb-3">
                            <label for="keterangan" class="form-label">Keterangan</label>
                            <input type="text" class="form-control" id="keterangan" name="keterangan" required>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" onclick="redirectToCards()">Tutup</button>
                            <button type="submit" class="btn btn-primary">Simpan Data</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


            </div>
            </div>
            <div class="modal fade" id="editDataModal" tabindex="-1" aria-labelledby="editDataModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editDataModalLabel">Edit Data Pengeluaran</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Form Edit -->
                <form action="edit_pengeluaran.php" method="POST" id="editForm">
                    <input type="hidden" id="editId" name="id">
                    <div class="mb-3">
                        <label for="editTanggal" class="form-label">Tanggal</label>
                        <input type="date" class="form-control" id="editTanggal" name="tanggal" required>
                    </div>
                    <div class="mb-3">
                        <label for="editKategori" class="form-label">Kategori</label>
                        <input type="text" class="form-control" id="editKategori" name="kategori" required>
                    </div>
                    <div class="mb-3">
                        <label for="editJumlah" class="form-label">Jumlah</label>
                        <input type="text" class="form-control" id="editJumlah" name="jumlah" required>
                    </div>
                    <div class="mb-3">
                        <label for="editHarga" class="form-label">Harga (Rp)</label>
                        <input type="text" class="form-control" id="editHarga" name="harga" required>
                    </div>
                    <div class="mb-3">
                        <label for="editKeterangan" class="form-label">Keterangan</label>
                        <input type="text" class="form-control" id="editKeterangan" name="keterangan" required>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


            <script>
   function redirectToCards() {
            window.location.href = "pengeluaran.php"; // Ganti sesuai nama halaman tujuan
        }
        function hapusData(id) {
    if (confirm("Apakah Anda yakin ingin menghapus data ini?")) {
        window.location.href = "hapus_pengeluaran.php?id=" + id;
    }
}
        
</script>

            
            <!-- End of Main Content -->

            

        </div>
        <!-- End of Content Wrapper -->
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
        function showEditModal(data) {
    // Isi form modal dengan data dari baris yang dipilih
    document.getElementById('editId').value = data.id;
    document.getElementById('editTanggal').value = data.tanggal;
    document.getElementById('editKategori').value = data.kategori;
    document.getElementById('editJumlah').value = data.jumlah;
    document.getElementById('editHarga').value = data.harga;
    document.getElementById('editKeterangan').value = data.keterangan;

    // Tampilkan modal edit
    $('#editDataModal').modal('show');
}

        function generateReport() {
        // Sembunyikan kolom "Aksi" hanya saat cetak
        var aksiColumns = document.querySelectorAll('.aksi');
        aksiColumns.forEach(function(col) {
            col.style.display = 'none';
        });

        // Ambil elemen tabel
        var printContents = document.getElementById("dataTable").outerHTML;

        // Buat halaman cetak
        var originalContents = document.body.innerHTML;
        document.body.innerHTML = "<html><head><title>Generate Report</title></head><body>" + 
                                  "<h2 style='text-align:center;'>Laporan Pengeluaran</h2>" + 
                                  printContents + "</body></html>";

        // Cetak halaman
        window.print();

        // Kembalikan tampilan kolom "Aksi" setelah cetak
        document.body.innerHTML = originalContents;
        location.reload(); // Refresh halaman
    }

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