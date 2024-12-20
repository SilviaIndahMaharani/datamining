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
<?php
// Query total pemasukan
$queryPemasukan = "SELECT SUM(total_harga) AS total_pemasukan FROM pemasukan";
$resultPemasukan = mysqli_query($koneksi, $queryPemasukan);
$totalPemasukan = ($row = mysqli_fetch_assoc($resultPemasukan)) ? $row['total_pemasukan'] : 0;

// Query total pengeluaran
$queryPengeluaran = "SELECT SUM(jumlah*harga) AS total_pengeluaran FROM pengeluaran";
$resultPengeluaran = mysqli_query($koneksi, $queryPengeluaran);
$totalPengeluaran = ($row = mysqli_fetch_assoc($resultPengeluaran)) ? $row['total_pengeluaran'] : 0;

// Query pelanggan
$queryPelanggan = "SELECT COUNT(id) AS total_pelanggan FROM pemasukan";
$resultPelanggan = mysqli_query($koneksi, $queryPelanggan);
$totalPelanggan = ($row = mysqli_fetch_assoc($resultPelanggan)) ? $row['total_pelanggan'] : 0;

// Query pemasukan harian
$queryPemasukanHarian = "SELECT DATE(tanggal) AS tanggal, SUM(total_harga) AS total_harian 
                         FROM pemasukan 
                         WHERE MONTH(tanggal) = MONTH(CURDATE()) 
                         GROUP BY DATE(tanggal)";
$resultPemasukanHarian = mysqli_query($koneksi, $queryPemasukanHarian);
$pemasukanHarian = [];
while ($row = mysqli_fetch_assoc($resultPemasukanHarian)) {
    $pemasukanHarian[$row['tanggal']] = $row['total_harian'];
}

// Query pengeluaran harian
$queryPengeluaranHarian = "SELECT DATE(tanggal) AS tanggal, SUM(harga) AS total_harian 
                           FROM pengeluaran 
                           WHERE MONTH(tanggal) = MONTH(CURDATE()) 
                           GROUP BY DATE(tanggal)";
$resultPengeluaranHarian = mysqli_query($koneksi, $queryPengeluaranHarian);
$pengeluaranHarian = [];
while ($row = mysqli_fetch_assoc($resultPengeluaranHarian)) {
    $pengeluaranHarian[$row['tanggal']] = $row['total_harian'];
}

// Query pemasukan bulanan
$queryPemasukanBulanan = "SELECT MONTH(tanggal) AS bulan, SUM(total_harga) AS total_pemasukan 
                          FROM pemasukan WHERE YEAR(tanggal) = YEAR(CURDATE()) 
                          GROUP BY MONTH(tanggal)";
$resultPemasukanBulanan = mysqli_query($koneksi, $queryPemasukanBulanan);
$pemasukanBulanan = array_fill(0, 12, 0);
while ($row = mysqli_fetch_assoc($resultPemasukanBulanan)) {
    $pemasukanBulanan[$row['bulan'] - 1] = (int)$row['total_pemasukan'];
}

// Query pengeluaran bulanan
$queryPengeluaranBulanan = "SELECT MONTH(tanggal) AS bulan, SUM(harga) AS total_pengeluaran 
                            FROM pengeluaran WHERE YEAR(tanggal) = YEAR(CURDATE()) 
                            GROUP BY MONTH(tanggal)";
$resultPengeluaranBulanan = mysqli_query($koneksi, $queryPengeluaranBulanan);
$pengeluaranBulanan = array_fill(0, 12, 0);
while ($row = mysqli_fetch_assoc($resultPengeluaranBulanan)) {
    $pengeluaranBulanan[$row['bulan'] - 1] = (int)$row['total_pengeluaran'];
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
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link rel="icon" href="washing-machine.png" type="image/x-icon">
    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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
            <li class="nav-item active">
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
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="bi bi-folder"></i>
                    <span>Data Master</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Data Master:</h6>
                        <a class="collapse-item" href="pemasukan.php">Pemasukan</a>
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
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        
                    </div>
                  
                    <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Pemasukan</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">Rp. <?php echo number_format($totalPemasukan, 0, ',', '.'); ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Pengeluaran</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">Rp. <?php echo number_format($totalPengeluaran, 0, ',', '.'); ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                PELANGGAN</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $totalPelanggan; ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                 <!-- Grafik Harian -->
<div class="row">
    <!-- Grafik Pemasukan Harian -->
    <div class="col-md-6 mb-4">
        <div class="card shadow">
            <div class="card-header font-weight-bold">Grafik Pemasukan Harian</div>
            <div class="card-body">
                <canvas id="pemasukanHarianChart"></canvas>
            </div>
        </div>
    </div>
    <!-- Grafik Pengeluaran Harian -->
    <div class="col-md-6 mb-4">
        <div class="card shadow">
            <div class="card-header font-weight-bold">Grafik Pengeluaran Harian</div>
            <div class="card-body">
                <canvas id="pengeluaranHarianChart"></canvas>
            </div>
        </div>
    </div>
</div>

<!-- Grafik Bulanan -->
<div class="row">
    <!-- Grafik Pemasukan Bulanan -->
    <div class="col-md-6 mb-4">
        <div class="card shadow">
            <div class="card-header font-weight-bold">Grafik Pemasukan Bulanan</div>
            <div class="card-body">
                <canvas id="pemasukanChart"></canvas>
            </div>
        </div>
    </div>
    <!-- Grafik Pengeluaran Bulanan -->
    <div class="col-md-6 mb-4">
        <div class="card shadow">
            <div class="card-header font-weight-bold">Grafik Pengeluaran Bulanan (Bar)</div>
            <div class="card-body">
                <canvas id="pengeluaranChart"></canvas>
            </div>
        </div>
    </div>
</div>

<!-- Script Chart JS -->
<script>
    // Data Pemasukan Harian
    var pemasukanLabels = <?php echo json_encode(array_keys($pemasukanHarian)); ?>;
    var pemasukanData = <?php echo json_encode(array_values($pemasukanHarian)); ?>;

    // Grafik Pemasukan Harian
    new Chart(document.getElementById('pemasukanHarianChart'), {
        type: 'line',
        data: {
            labels: pemasukanLabels,
            datasets: [{
                label: 'Total Harga (Rp)',
                data: pemasukanData,
                borderColor: 'rgb(23, 177, 56)',
                backgroundColor: 'rgba(144, 252, 180, 0.2)',
                fill: true,
                tension: 0.3
            }]
        },
        options: { responsive: true }
    });

    // Data Pengeluaran Harian
    var pengeluaranLabels = <?php echo json_encode(array_keys($pengeluaranHarian)); ?>;
    var pengeluaranData = <?php echo json_encode(array_values($pengeluaranHarian)); ?>;

    // Grafik Pengeluaran Harian
    new Chart(document.getElementById('pengeluaranHarianChart'), {
        type: 'bar',
        data: {
            labels: pengeluaranLabels,
            datasets: [{
                label: 'Total Pengeluaran (Rp)',
                data: pengeluaranData,
                backgroundColor: 'rgba(255, 77, 116, 0.6)',
                borderColor: 'rgba(255, 99, 132, 1)',
                borderWidth: 1
            }]
        },
        options: { responsive: true }
    });
</script>
<!-- Chart JS -->
<script>
    
        var pemasukanData = <?php echo json_encode(array_values($pemasukanBulanan)); ?>;
        var pengeluaranData = <?php echo json_encode(array_values($pengeluaranBulanan)); ?>;

        // Grafik Line Pemasukan
        new Chart(document.getElementById('pemasukanChart'), {
            type: 'line',
            data: {
                labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                datasets: [{
                    label: "Pemasukan",
                    data: pemasukanData,
                    borderColor: "rgb(173, 87, 223)",
                    backgroundColor: "rgba(213, 134, 255, 0.2)",
                    fill: true,
                    tension: 0.3
                }]
            }
        });

        // Grafik Bar Pengeluaran
        new Chart(document.getElementById('pengeluaranChart'), {
            type: 'bar',
            data: {
                labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                datasets: [{
                    label: "Pengeluaran",
                    data: pengeluaranData,
                    backgroundColor: "rgba(255, 0, 21, 0.6)",
                    borderColor: "rgb(212, 105, 105)",
                    borderWidth: 1
                }]
            }
        });
    </script>



    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>