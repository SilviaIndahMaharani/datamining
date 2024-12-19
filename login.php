<?php
session_start(); // Mulai session untuk menyimpan status login pengguna

include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form login
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Validasi jika email atau password kosong
    if (empty($email) || empty($password)) {
        $error_message = "Email dan Password harus diisi!";
    } else {
        // Query untuk mengambil data pengguna berdasarkan email
        $sql = "SELECT * FROM data_user WHERE email = '$email'";
        $result = $koneksi->query($sql);

        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();

            // Verifikasi password dengan yang ada di database
            if (password_verify($password, $user['password'])) {
                // Jika login berhasil, simpan data pengguna di session
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['first_name'] = $user['first_name'];
                $_SESSION['last_name'] = $user['last_name'];
                $_SESSION['email'] = $user['email'];

                // Arahkan pengguna ke halaman profile setelah login berhasil
                header("Location: dashboard.php");
                exit();
            } else {
                $error_message = "Email atau Password salah!";
            }
        } else {
            $error_message = "Email tidak ditemukan!";
        }
    }
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

    <title>Login</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="icon" href="washing-machine.png" type="image/x-icon">

</head>

<body class="bg-gradient-primary">

    <div class="container">
        <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body" style="padding: 120px;">
                <!-- Nested Row within Card Body -->
                <div class="row">
                <img src="washing-machine.png" alt="Washing Machine" style="width: 300px; height: auto; margin-top: 8px;">
                    <div class="col-lg-6">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                            </div>

                            <!-- Tampilkan pesan error jika ada -->
                            <?php if (isset($error_message)) { echo "<div class='alert alert-danger'>$error_message</div>"; } ?>

                            <form class="user" method="POST" action="login.php">
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user" name="email" placeholder="Enter Email Address..." required>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-user" name="password" placeholder="Password" required>
                                </div>
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox small">
                                        <input type="checkbox" class="custom-control-input" id="customCheck">
                                        <label class="custom-control-label" for="customCheck">Remember Me</label>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block">Login</button>
                                <hr>
                            </form>

                            <hr>
                            <div class="text-center">
                                <a class="small" href="register.php">Create an Account!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
