<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Masuk</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <link rel="stylesheet" href="assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/bower_components/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/bower_components/Ionicons/css/ionicons.min.css"
    <link rel="stylesheet" href="assets/bower_components/morris.js/morris.css">
    <link rel="stylesheet" href="assets/bower_components/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="assets/bower_components/bootstrap-daterangepicker/daterangepicker.css">

    <link rel="stylesheet" href="assets/css/AdminLTE.min.css">
    <link rel="stylesheet" href="assets/css/skins/_all-skins.min.css">
    <link rel="stylesheet" href="assets/css/skins/skin-blue.min.css">

    <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="assets/js/html5shiv.min.js"></script>
    <script src="assets/js/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue-light sidebar-mini">
<div class="wrapper">

    <!-- Main Header -->
    <header class="main-header">

        <!-- Logo -->
        <a href="" class="logo"></a>

        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top" role="navigation">
        </nav>
    </header>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" style="margin-left: 0px;">
        <!-- Content Header (Page header) -->

        <!-- Main content -->
        <section class="content container-fluid">

            <!---------------
              | Awal Konten |
              ---------------->

            <div class="col-md-4"></div>
            <div class="col-md-4">
                <form method="get" id="formLogin">
                    <input type="hidden" name="controller" value="login">
                    <input type="hidden" name="action" value="authentication">
                    <div class="box box-info">
                        <div class="box-header">
                            <h3 class="text-center"><a href=""><b>Σ</b> SIGMA</a></h3>
                        </div>
                        <div class="box-body">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label for="username">Username</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="text" name="username" class="form-control"
                                               placeholder="Username..."
                                               id="username">
                                        <label for="username" class="text-red" id="warn-username"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label for="password">Password</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="password" name="password" class="form-control"
                                               placeholder="Password..." id="password">
                                        <label for="username" class="text-red" id="warn-password"></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-footer">
                            <div class="btn-group pull-right">
                                <a type="button" class="btn btn-default" href="?controller=home&action=home">Kembali</a>
                                <button type="button" class="btn btn-primary" onclick="cekLogin()">Masuk</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <!----------------
              | Akhir Konten |
              ---------------->

        </section>
    </div>
    <footer class="main-footer" style="margin-left: 0px;">
        <div class="pull-right hidden-xs">
            <p id="status"></p>
        </div>
        <strong>Copyright &copy; 2016 <a href="#">Al Qodiri - Seven Dream</a>.</strong> Hak Cipta Dilindungi.
    </footer>
    <div class="control-sidebar-bg"></div>
</div>
<script>
    function cekLogin() {
        var username = document.getElementById('username');
        var password = document.getElementById('password');
        var warnUser = document.getElementById('warn-username');
        var warnPass = document.getElementById('warn-password');
        var cekUser = false;
        var cekPassword = false;

        warnUser.innerHTML = "";
        warnPass.innerHTML = "";

        if (username.value === "" || username.value === null) warnUser.innerHTML = 'Username Tidak Boleh Kosong!!!';
        else cekUser = true;

        if (password.value === "" || password.value === null) warnPass.innerHTML = 'Password Tidak Boleh Kosong!!!';
        else cekPassword = true;

        console.log(cekUser + " and" + cekPassword);

        if (cekUser && cekPassword) document.getElementById('formLogin').submit();
    }
</script>
<script src="assets/bower_components/jquery/dist/jquery.min.js"></script>
<script src="assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="assets/js/adminlte.min.js"></script>
</body>
</html>
