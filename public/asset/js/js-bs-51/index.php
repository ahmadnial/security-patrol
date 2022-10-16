<?php

// use LDAP\Result;
if (isset($_GET['pesan'])) {
    if ($_GET['pesan'] == "gagal") {
        // header('location:index.php');
        echo "<div class= 'alert alert-danger alert-dismissible fade show' role='alert' >Username karo Password <strong>tidak sejalan</strong> bestie !
        <button type='button' class='btn-close btn-xs' data-bs-dismiss='alert' aria-label='Close'></button>
        </div>";
        // exit;
    }
}

session_start();

if (isset($_SESSION["login"])) {
    header("location: view/home.php");
    exit;
}
include "model/conn.php";

// error_reporting(0);

if (isset($_POST['mangkat'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];

    // $sql = "SELECT * FROM RSNR_user WHERE email = '$email' ";
    $query = sqlsrv_query($conn, "SELECT * FROM login_laporan WHERE email = '$email' and password='$password'");
    // var_dump(sqlsrv_fetch_array($query));
    // die();
    $validasi = sqlsrv_fetch_array($query);
    if ($validasi != 0) {

        // var_dump($validasi);
        // die();

        if ($validasi['level'] == "superuser") {

            $_SESSION["login"] = true;
            // $_SESSION['level'] = "admin";
            // $row = sqlsrv_fetch_array($query);
            // if(password_verify($password, $row['password']) ) {
            header('location: view/home.php');
        } else if ($validasi['level'] == "user") {
            // buat session login dan username
            $_SESSION["login"] = true;
            // $_SESSION['level'] = "pegawai";
            // alihkan ke halaman dashboard pegawai
            header("location: view/pengajuan-order.php");
            // exit;
        } else {
            header("location:index.php?pesan=gagal");
            // echo "<script>
            //         alert('Email atau Password ono seng Salah!')
            //     </script>";
            // echo "<script>    
            // Swal.fire(
            //     'Username atau Password Salah lur !',
            //     'Coba Meneh',
            //     'error'
            // );
            //              </script>";
        }
    } else {
        header("location:index.php?pesan=gagal");
        // echo "<script>
        //         alert('Email atau Password ono seng Salah!')
        //     </script>";
        // echo "<script>    
        // Swal.fire(
        //     'Username atau Password Salah lur !',
        //     'Coba Meneh',
        //     'error'
        // );
        //              </script>";

    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PORTAL-IT | Log in</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="dashboard/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="dashboard/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dashboard/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="css/sweetalert2.css">
    <link rel="stylesheet" href="css/sweetalert2.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">



</head>

<style type="text/css">
    .gas {
        background-image: url("dashboard/dist/img/bg.jpg");
        /* background-color: red; */
        height: 100 %;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        background-color: #eee;
    }

    /* .body {
        background-color: blanchedalmond;
    } */
</style>

<body class="gas login-page">
    <div class="login-box">
        <!-- /.login-logo -->
        <div class="card card-outline card-danger">
            <div class="card-header text-center">
                <b class="h1"><b>Portal </b>IT-RSNR</b>
            </div>
            <div class="card-body">
                <p class="login-box-msg">Sign in to start your session</p>

                <form action="" method="post">
                    <div class="input-group mb-3">
                        <input type="email" name="email" class="form-control" placeholder="Email" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="password" class="form-control" placeholder="Password" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <div class="icheck-primary">
                                <input type="checkbox" id="remember">
                                <label for="remember">
                                    Remember Me
                                </label>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-4">
                            <button type="submit" name="mangkat" class="btn btn-primary float-right">Sign In</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>

                <!-- <div class="social-auth-links text-center mt-2 mb-3">
                    <a href="#" class="btn btn-block btn-primary">
                        <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
                    </a>
                    <a href="#" class="btn btn-block btn-danger">
                        <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
                    </a>
                </div> -->
                <!-- /.social-auth-links -->

                <!-- <p class="mb-1">
                    <a href="forgot-password.html">I forgot my password</a>
                </p> -->
                <div class="">
                    <p class="mt-4">
                        <b class="text-center text-danger text-sm"><i><small>*sistem ini masih dalam tahap development (BETA)</small></i></b>
                        <br>
                        <b class="text-center text-danger text-sm"><i><small>*Apabila menemukan error/kendala silahkan hubungi IT-RSNR</small></i></b>
                    </p>
                </div>
                <p class="text-sm float-right mt-2 mb-0"><small>V1.2.0</small></p>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="dashboard/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="dashboard/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dashboard/dist/js/adminlte.min.js"></script>
    <script src="js/sweetalert2.js"></script>
    <script src="js/sweetalert2.all.js"></script>
    <script src="js/sweetalert2.all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.16/dist/sweetalert2.all.js"></script>

</body>



</html>