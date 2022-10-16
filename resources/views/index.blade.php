<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Log in | Security Patrol </title>

    <link rel="shortcut icon" href="{{ asset ('asset/dashboard/dist/img/logoNR.png') }}">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset ('asset/dashboard/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{ asset ('asset/dashboard/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset ('asset/dashboard/dist/css/adminlte.min.css') }}">
    <link rel="stylesheet" href="{{ asset ('asset/css/sweetalert2.css') }}">
    <link rel="stylesheet" href="{{ asset ('asset/css/sweetalert2.min.css') }}">
    <link rel="stylesheet" href="{{ asset ('asset/css/bootstrap.min.css') }}">



</head>

<style type="text/css">
    /* .gas {
        background-image: url("dashboard/dist/img/bg.jpg");
        height: 100 %;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        background-color: #eee;
    } */

    .gas {
        background-image: url("{{ asset ('asset/dashboard/dist/img/index-bg.jpg') }}");
        /* filter: blur(3px);
        -webkit-filter: blur(3px); */
        box-shadow: 0 15px 25px;
        border-radius: 4px;
        backdrop-filter: blur(4px);
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        position: center;
        /* background-color: #ffff; */
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        /* background: linear-gradient(80deg, white, #AAA1FB); */

    }

    .card-body {

        background-color: transparent;
        /* display: grid;
grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); */
        box-shadow: 0 35px 55px rgba(129, 124, 124, 0.8);
        border-radius: 0px;
        backdrop-filter: blur(9px);
        /* padding: 10px; */

    }

    /* .body {
        background-color: blanchedalmond;
    } */
</style>

<body class="gas login-page">
    <div class="login-box shadow-lg">
        <!-- /.login-logo -->
        <div class="card card-outline card-info">
            <div class="card-header text-center">
                <b class="h1"><b>Security </b>PATROL</b>
            </div>
            <div class="card-body">
                <p class="login-box-msg">Sign in to start your session</p>

                <form action="{{Route('postLogin')}}" method="post">
                    @csrf
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
                                {{-- <label for="remember">
                                    Remember Me
                                </label> --}}
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-4">
                            <button type="submit" name="" class="btn btn-primary float-right">Sign In</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
                <div class="">
                    {{-- <p class="mt-4">
                        <b class="text-center text-danger text-sm"><i><small>*sistem ini masih dalam tahap development
                                    (BETA)</small></i></b>
                        <br>
                        <b class="text-center text-danger text-sm"><i><small>*Apabila menemukan error/kendala silahkan
                                    hubungi IT-RSNR</small></i></b>
                    </p> --}}
                </div>
                <p class="text-sm float-left mt-2 mb-0"><small>V1.2.0</small></p>
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