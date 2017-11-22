<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <link rel="stylesheet" href="assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/bower_components/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/bower_components/Ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/AdminLTE.min.css">
    <link rel="stylesheet" href="assets/css/skins/_all-skins.min.css">
    <link rel="stylesheet" href="assets/bower_components/morris.js/morris.css">
    <link rel="stylesheet" href="assets/bower_components/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="assets/bower_components/bootstrap-daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
    <link rel="stylesheet" href="assets/css/skins/skin-blue.min.css">
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

    <script src="assets/bower_components/jquery/dist/jquery.min.js"></script>

    <script src="assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <script src="assets/bower_components/select2/dist/js/select2.full.min.js"></script>

    <script src="plugins/input-mask/jquery.inputmask.js"></script>
    <script src="plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
    <script src="plugins/input-mask/jquery.inputmask.extensions.js"></script>

    <script src="assets/bower_components/moment/min/moment.min.js"></script>
    <script src="assets/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>

    <script src="assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>

    <script src="assets/bower_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>

    <script src="plugins/timepicker/bootstrap-timepicker.min.js"></script>

    <script src="assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>

    <script src="plugins/iCheck/icheck.min.js"></script>

    <script src="assets/bower_components/fastclick/lib/fastclick.js"></script>

    <script src="assets/js/adminlte.min.js"></script>

    <script src="assets/js/demo.js"></script>
    <title>Dashboard - Peta</title>
</head>
<body class="hold-transition skin-blue-light sidebar-mini">

<div class="wrapper">
    <header class="main-header">
        <a href="" class="logo">
            <span class="logo-mini"><b>Σ</b></span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>Σ</b> SIGMA</span>
        </a>

        <nav class="navbar navbar-static-top" role="navigation">
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img id="user-img-small" src="assets/img/user2-160x160.jpg" class="user-image"
                                 alt="User Image">
                            <span id="name-small" class="hidden-xs">
                                Yulis Triani                            </span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="?controller=profil&action=koAgenProfil" class="btn btn-default btn-flat">Profil
                                        Saya</a>
                                </div>
                                <div class="pull-right">
                                    <a href="#" class="btn btn-default btn-flat" data-toggle="modal"
                                       data-target="#modal-sign-out">
                                        Sign out
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">

        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">

            <!-- Sidebar user panel (optional) -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="assets/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                    <p id="user-name">Yulis Triani</p>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <ul class="sidebar-menu" data-widget="tree">
                <li class="header">MENU</li>
                <!-- Optionally, you can add icons to the links -->
                <li><a href="?controller=home&action=koAgenHome"><i class="fa fa-home"></i> <span>Beranda</span></a>
                </li>
                <li><a href="?controller=pemetaan&action=koAgenPemetaan"><i class="fa fa-map"></i> <span>Pemetaan</span></a>
                </li>
                <li><a href="?controller=penjualan&action=koAgenPenjualan"><i class="fa fa-dollar"></i>
                        <span>Penjualan</span></a></li>
            </ul>
            <!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
    </aside>

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Pemetaan
                <small></small>
            </h1>
            <ol class="breadcrumb">
                <li><i class="fa fa-home"></i><a href="?controller=home&action=koAgenHome">Beranda</a></li>
                <li class="active">Pemetaan</li>
            </ol>
        </section>
        <section class="content container-fluid">
            <!-- awal konten -->
            <div class="box box-primary box-solid bg-gray-light">
                <div class="box-body">
                    <div id="peta" style="height: 430px; width: 100%;">
                    </div>

                </div>
            </div>
            <!--akhir kontent-->
            <!-- modal sign out -->
            <div class="modal fade" id="modal-sign-out">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form action="logout.php">
                            <div class="modal-header">
                                <h4 class="modal-title">Sign Out?</h4>
                            </div>
                            <div class="modal-body">
                                <p>Yakin Ingin Sign Out?</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Batal
                                </button>
                                <button type="submit" class="btn btn-primary">Ya</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- akhir modal sign out -->

            <!-- modal input toko -->
            <div class="modal fade" id="modal-input-toko">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form method="get">
                            <input type="hidden" name="controller" value="pemetaan">
                            <input type="hidden" name="action" value="tambahToko">
                            <div class="modal-header">
                                <h4 class="modal-title">Tambah Toko</h4>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="Lat">Lintang</label>
                                            <input type="text" name="Lat" class="form-control" placeholder="Lintang"
                                                   id="Lat">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="Long">Bujur</label>
                                            <input type="text" name="Long" class="form-control" placeholder="Bujur"
                                                   id="Long">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="NamaToko">Nama Toko</label>
                                    <input type="text" name="NamaToko" class="form-control" placeholder="Nama ..."
                                           id="NamaToko">
                                </div>
                                <div class="form-group">
                                    <label for="NamaPemilik">Pemilik Toko</label>
                                    <input type="text" name="NamaPemilik" class="form-control"
                                           placeholder="Nama Pemilik ..."
                                           id="NamaPemilik">
                                </div>
                                <div class="form-group">
                                    <label for="NoTelp">Nomor Telepon</label>
                                    <input type="text" name="NoTelp" class="form-control" placeholder="08xxxx"
                                           id="NoTelp">
                                </div>
                                <div class="form-group">
                                    <label for="Alamat">Alamat</label>
                                    <input type="text" name="Alamat" class="form-control" placeholder="Jl ..."
                                           id="Alamat">
                                </div>
                                <div class="form-group">
                                    <label for="IDKecamatan">Kecamatan</label>
                                    <select name="IDKecamatan" id="IDKecamatan" class="form-control"
                                            data-placeholder="Pilih Kecamatan...">
                                        <option value='1'>Ajung</option>
                                        <option value='2'>Ambulu</option>
                                        <option value='3'>Arjasa</option>
                                        <option value='4'>Balung</option>
                                        <option value='5'>Bangsalsari</option>
                                        <option value='6'>Gumukmas</option>
                                        <option value='7'>Jelbuk</option>
                                        <option value='8'>Jenggawah</option>
                                        <option value='9'>Jombang</option>
                                        <option value='10'>Kalisat</option>
                                        <option value='11'>Kaliwates</option>
                                        <option value='12'>Kencong</option>
                                        <option value='13'>Ledokombo</option>
                                        <option value='14'>Mayang</option>
                                        <option value='15'>Mumbulsari</option>
                                        <option value='16'>Pakusari</option>
                                        <option value='17'>Panti</option>
                                        <option value='18'>Patrang</option>
                                        <option value='19'>Puger</option>
                                        <option value='20'>Rambipuji</option>
                                        <option value='21'>Semboro</option>
                                        <option value='22'>Silo</option>
                                        <option value='23'>Sukorambi</option>
                                        <option value='24'>Sukowono</option>
                                        <option value='25'>Sumberbaru</option>
                                        <option value='26'>Sumberjambe</option>
                                        <option value='27'>Sumbersari</option>
                                        <option value='28'>Tanggul</option>
                                        <option value='29'>Tempurejo</option>
                                        <option value='30'>Umbulsari</option>
                                        <option value='31'>Wuluhan</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="Keterangan">Keterangan</label>
                                    <textarea name="Keterangan" class="form-control" id="Keterangan"
                                              rows="5"></textarea>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- modal update produk -->
            <div class="modal fade" id="modal-update-produk">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form method="get">
                            <input type="hidden" name="controller" value="penjualan">
                            <input type="hidden" name="action" value="updateProduk">
                            <div class="modal-header">
                                <h4 class="modal-title">Update Produk</h4>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label>Tanggal</label>
                                    <div class="input-group date">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        <input type="text" class="form-control pull-right" id="datepicker"
                                               name="Tanggal">
                                    </div>
                                    <div class="form-group">
                                        <label for="_200ml">200ml</label>
                                        <input type="text" name="_200ml" class="form-control" id="_200ml">
                                    </div>
                                    <div class="form-group">
                                        <label for="_600ml">600ml</label>
                                        <input type="text" name="_600ml" class="form-control" id="_600ml">
                                    </div>
                                    <div class="form-group">
                                        <label for="_1500ml">1500ml</label>
                                        <input type="text" name="_1500ml" class="form-control" id="_1500ml">
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- modal tambah produk -->
            <div class="modal fade" id="modal-tambah-produk">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form method="get">
                            <input type="hidden" name="controller" value="penjualan">
                            <input type="hidden" name="action" value="tambahProduk">
                            <input type="hidden" name="IDToko" id="IDToko">
                            <input type="hidden">
                            <div class="modal-header">
                                <h4 class="modal-title">Tambah Produk</h4>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label>Tanggal</label>
                                    <div class="input-group date">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        <input type="text" class="form-control pull-right" id="datepicker"
                                               name="Tanggal">
                                    </div>
                                    <div class="form-group">
                                        <label for="_200ml">200ml</label>
                                        <input type="text" name="_200ml" class="form-control" id="_200ml">
                                    </div>
                                    <div class="form-group">
                                        <label for="_600ml">600ml</label>
                                        <input type="text" name="_600ml" class="form-control" id="_600ml">
                                    </div>
                                    <div class="form-group">
                                        <label for="_1500ml">1500ml</label>
                                        <input type="text" name="_1500ml" class="form-control" id="_1500ml">
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- modal detail toko -->
            <div class="modal fade" id="modal-detail-toko">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form action="">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title">Detail Toko</h4>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="lat">Latitude</label>
                                            <input type="text" name="lat" class="form-control" placeholder="Lat"
                                                   id="lat">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="long">Longitude</label>
                                            <input type="text" name="long" class="form-control" placeholder="Long"
                                                   id="long">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="nama-toko">Nama Toko</label>
                                    <input type="text" name="nama-toko" class="form-control" placeholder="Nama ..."
                                           id="nama-toko">
                                </div>
                                <div class="form-group">
                                    <label for="pemilik">Pemilik Toko</label>
                                    <input type="text" name="pemilik" class="form-control"
                                           placeholder="Nama Pemilik ..."
                                           id="pemilik">
                                </div>
                                <div class="form-group">
                                    <label for="no-telp">Nomor Telepon</label>
                                    <input type="text" name="no-telp" class="form-control" placeholder="08xxxx"
                                           id="no-telp">
                                </div>
                                <div class="form-group">
                                    <label for="alamat">Alamat</label>
                                    <input type="text" name="alamat" class="form-control" placeholder="Jl ..."
                                           id="alamat">
                                </div>
                                <div class="form-group">
                                    <label for="keterangan">Keterangan</label>
                                    <textarea name="keterangan" class="form-control" id="keterangan"
                                              rows="5"></textarea>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default">Hapus</button>
                                    <button type="button" class="btn">Update Produk</button>
                                    <button type="button" class="btn btn-primary">Tambah Produk</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="modal-hapus-toko">
                <form method="get">
                    <input type="hidden" name="controller" value="pemetaan">
                    <input type="hidden" name="action" value="hapusToko">
                    <input type="hidden" name="IDTokoHapus">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <form action="logout.php">
                                <div class="modal-header">
                                    <h4 class="modal-title">Hapus?</h4>
                                </div>
                                <div class="modal-body">
                                    <p>Yakin Hapus Toko?</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Batal
                                    </button>
                                    <button type="submit" class="btn btn-primary" id="kirim-hapus">Ya</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </form>
            </div>

            <!-- modal ubah toko -->
            <div class="modal fade" id="modal-ubah-toko">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form method="get">
                            <input type="hidden" name="controller" value="pemetaan">
                            <input type="hidden" name="action" value="ubahToko">
                            <input type="hidden" name="IDTokoUbah" value="">
                            <div class="modal-header">
                                <h4 class="modal-title">Ubah Data Toko</h4>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="LatUbah">Lintang</label>
                                            <input type="text" name="LatUbah" class="form-control" placeholder="Lintang"
                                                   id="LatUbah" value="">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="LongUbah">Bujur</label>
                                            <input type="text" name="LongUbah" class="form-control" placeholder="Bujur"
                                                   id="LongUbah" value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="NamaTokoUbah">Nama Toko</label>
                                    <input type="text" name="NamaTokoUbah" class="form-control" placeholder="Nama ..."
                                           id="NamaTokoUbah" value="">
                                </div>
                                <div class="form-group">
                                    <label for="NamaPemilikUbah">Pemilik Toko</label>
                                    <input type="text" name="NamaPemilikUbah" class="form-control"
                                           placeholder="Nama Pemilik ..."
                                           id="NamaPemilikUbah" value="">
                                </div>
                                <div class="form-group">
                                    <label for="NoTelpUbah">Nomor Telepon</label>
                                    <input type="text" name="NoTelpUbah" class="form-control" placeholder="08xxxx"
                                           id="NoTelpUbah" value="">
                                </div>
                                <div class="form-group">
                                    <label for="AlamatUbah">Alamat</label>
                                    <input type="text" name="AlamatUbah" class="form-control" placeholder="Jl ..."
                                           id="AlamatUbah" value="">
                                </div>
                                <div class="form-group">
                                    <label for="IDKecamatanUbah">Kecamatan</label>
                                    <select name="IDKecamatanUbah" id="IDKecamatanUbah" class="form-control"
                                            data-placeholder="Pilih Kecamatan...">
                                        <option value='1'>Ajung</option>
                                        <option value='2'>Ambulu</option>
                                        <option value='3'>Arjasa</option>
                                        <option value='4'>Balung</option>
                                        <option value='5'>Bangsalsari</option>
                                        <option value='6'>Gumukmas</option>
                                        <option value='7'>Jelbuk</option>
                                        <option value='8'>Jenggawah</option>
                                        <option value='9'>Jombang</option>
                                        <option value='10'>Kalisat</option>
                                        <option value='11'>Kaliwates</option>
                                        <option value='12'>Kencong</option>
                                        <option value='13'>Ledokombo</option>
                                        <option value='14'>Mayang</option>
                                        <option value='15'>Mumbulsari</option>
                                        <option value='16'>Pakusari</option>
                                        <option value='17'>Panti</option>
                                        <option value='18'>Patrang</option>
                                        <option value='19'>Puger</option>
                                        <option value='20'>Rambipuji</option>
                                        <option value='21'>Semboro</option>
                                        <option value='22'>Silo</option>
                                        <option value='23'>Sukorambi</option>
                                        <option value='24'>Sukowono</option>
                                        <option value='25'>Sumberbaru</option>
                                        <option value='26'>Sumberjambe</option>
                                        <option value='27'>Sumbersari</option>
                                        <option value='28'>Tanggul</option>
                                        <option value='29'>Tempurejo</option>
                                        <option value='30'>Umbulsari</option>
                                        <option value='31'>Wuluhan</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="KeteranganUbah">Keterangan</label>
                                    <textarea name="KeteranganUbah" class="form-control" id="KeteranganUbah" rows="5"
                                              value=""></textarea>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </section>
    </div>
</div>

<footer class="main-footer">
    <div class="pull-right hidden-xs">
        <p id="status"></p>
    </div>
    <strong>Copyright &copy; 2016 <a href="#">Al Qodiri - Seven Dream</a>.</strong> Hak Cipta Dilindungi.
</footer>

<script type="text/javascript">
    /**
     * lokasi jember
     * lat: -8.169187, lng: 113.702040
     * zoom: 11
     *
     */
    var marker;
    var windowTambah;
    var kontenTambah = "<button type='button' class='btn btn-default btn-flat' data-toggle='modal' data-target='#modal-input-toko'>Tambah Lokasi Toko</button>";

    function initMap() {
        var map = new google.maps.Map(document.getElementById('peta'), {
            center: {lat: -8.169187, lng: 113.702040},
            zoom: 11,
            fullscreenControl: false,
            streetViewControl: false
        });
        // Create a map object and specify the DOM element for display.
        windowTambah = new google.maps.InfoWindow({
            content: kontenTambah
        });

        var lokasi0 = new google.maps.Marker({
            position: {lat: -8.134687469479552, lng: 113.62953186035156},
            map: map
        });
        var konten0 = "<div class='box box-info'>" +
            "<div class='box-header'>" +
            "<h3>Toko Toko a</h3>" +
            "</div>" +
            "<div class='box-body'>" +
            "<p>Pemilik: aaa</p>" +
            "<p>No Telp: 0985960</p>" +
            "<p>Alamat: Jl Mastrip</p>" +
            "<p>Kecamatan: Patrang</p>" +
            "</div>" +
            "<div class='box-footer'>" +
            "<div class='btn-group'>" +
            "<button type='button' class='btn btn-danger' data-toggle='modal' data-target='#modal-hapus-toko'>Hapus Toko</button>" +
            "<button type='button' class='btn btn-warning' data-toggle='modal' data-target='#modal-ubah-toko'>Ubah Toko</button>" +
            "<button type='button' class='btn btn-primary' data-toggle='modal' data-target='#modal-tambah-produk'>Tambah Produk</button>" +
            "<button type='button' class='btn btn-primary' data-toggle='modal' data-target='#modal-update-produk'>Update Penjualan</button>" +
            "</div>" +
            "</div>" +
            "</div>";
        var info0 = new google.maps.InfoWindow({
            content: konten0
        });
        lokasi0.addListener('click', function () {
            info0.open(map, lokasi0);
            document.getElementById('IDTokoHapus').value = 7;
            document.getElementById('IDTokoUbah').value = 7;
            document.getElementById('LatUbah').value = -8.134687469479552;
            document.getElementById('LongUbah').value = 113.62953186035156;
            document.getElementById('NamaTokoUbah').value = "Toko a";
            document.getElementById('NamaPemilikUbah').value = "aaa";
            document.getElementById('NoTelpUbah').value = "0985960";
            document.getElementById('AlamatUbah').value = "Jl Mastrip";
            document.getElementById('IDKecamatanUbah').value = 18;
            document.getElementById('KeteranganUbah').value = "kdksn";
        });
        var lokasi1 = new google.maps.Marker({
            position: {lat: -8.00687672241077, lng: 113.84170532226562},
            map: map
        });
        var konten1 = "<div class='box box-info'>" +
            "<div class='box-header'>" +
            "<h3>Toko Toko Abbi dan Umi</h3>" +
            "</div>" +
            "<div class='box-body'>" +
            "<p>Pemilik: Abbi dan Umi</p>" +
            "<p>No Telp: 094545</p>" +
            "<p>Alamat: Jl Abbi gang Umi</p>" +
            "<p>Kecamatan: Patrang</p>" +
            "</div>" +
            "<div class='box-footer'>" +
            "<div class='btn-group'>" +
            "<button type='button' class='btn btn-danger' data-toggle='modal' data-target='#modal-hapus-toko'>Hapus Toko</button>" +
            "<button type='button' class='btn btn-warning' data-toggle='modal' data-target='#modal-ubah-toko'>Ubah Toko</button>" +
            "<button type='button' class='btn btn-primary' data-toggle='modal' data-target='#modal-tambah-produk'>Tambah Produk</button>" +
            "<button type='button' class='btn btn-primary' data-toggle='modal' data-target='#modal-update-produk'>Update Penjualan</button>" +
            "</div>" +
            "</div>" +
            "</div>";
        var info1 = new google.maps.InfoWindow({
            content: konten1
        });
        lokasi1.addListener('click', function () {
            info1.open(map, lokasi1);
            document.getElementById('IDTokoHapus').value = 9;
            document.getElementById('IDTokoUbah').value = 9;
            document.getElementById('LatUbah').value = -8.00687672241077;
            document.getElementById('LongUbah').value = 113.84170532226562;
            document.getElementById('NamaTokoUbah').value = "Toko Abbi dan Umi";
            document.getElementById('NamaPemilikUbah').value = "Abbi dan Umi";
            document.getElementById('NoTelpUbah').value = "094545";
            document.getElementById('AlamatUbah').value = "Jl Abbi gang Umi";
            document.getElementById('IDKecamatanUbah').value = 18;
            document.getElementById('KeteranganUbah').value = "Toko seumur sehidup";
        });
        var lokasi2 = new google.maps.Marker({
            position: {lat: -8.195179450648576, lng: 113.65493774414062},
            map: map
        });
        var konten2 = "<div class='box box-info'>" +
            "<div class='box-header'>" +
            "<h3>Toko wkndelqw</h3>" +
            "</div>" +
            "<div class='box-body'>" +
            "<p>Pemilik: nlnl</p>" +
            "<p>No Telp: nlkn</p>" +
            "<p>Alamat: lknlk</p>" +
            "<p>Kecamatan: Ajung</p>" +
            "</div>" +
            "<div class='box-footer'>" +
            "<div class='btn-group'>" +
            "<button type='button' class='btn btn-danger' data-toggle='modal' data-target='#modal-hapus-toko'>Hapus Toko</button>" +
            "<button type='button' class='btn btn-warning' data-toggle='modal' data-target='#modal-ubah-toko'>Ubah Toko</button>" +
            "<button type='button' class='btn btn-primary' data-toggle='modal' data-target='#modal-tambah-produk'>Tambah Produk</button>" +
            "<button type='button' class='btn btn-primary' data-toggle='modal' data-target='#modal-update-produk'>Update Penjualan</button>" +
            "</div>" +
            "</div>" +
            "</div>";
        var info2 = new google.maps.InfoWindow({
            content: konten2
        });
        lokasi2.addListener('click', function () {
            info2.open(map, lokasi2);
            document.getElementById('IDTokoHapus').value = 10;
            document.getElementById('IDTokoUbah').value = 10;
            document.getElementById('LatUbah').value = -8.195179450648576;
            document.getElementById('LongUbah').value = 113.65493774414062;
            document.getElementById('NamaTokoUbah').value = "wkndelqw";
            document.getElementById('NamaPemilikUbah').value = "nlnl";
            document.getElementById('NoTelpUbah').value = "nlkn";
            document.getElementById('AlamatUbah').value = "lknlk";
            document.getElementById('IDKecamatanUbah').value = 1;
            document.getElementById('KeteranganUbah').value = "nknlkn";
        });
        var lokasi3 = new google.maps.Marker({
            position: {lat: -8.199257231587115, lng: 113.71673583984375},
            map: map
        });
        var konten3 = "<div class='box box-info'>" +
            "<div class='box-header'>" +
            "<h3>Toko lalala</h3>" +
            "</div>" +
            "<div class='box-body'>" +
            "<p>Pemilik: lllll</p>" +
            "<p>No Telp: llll</p>" +
            "<p>Alamat: lll</p>" +
            "<p>Kecamatan: Ajung</p>" +
            "</div>" +
            "<div class='box-footer'>" +
            "<div class='btn-group'>" +
            "<button type='button' class='btn btn-danger' data-toggle='modal' data-target='#modal-hapus-toko'>Hapus Toko</button>" +
            "<button type='button' class='btn btn-warning' data-toggle='modal' data-target='#modal-ubah-toko'>Ubah Toko</button>" +
            "<button type='button' class='btn btn-primary' data-toggle='modal' data-target='#modal-tambah-produk'>Tambah Produk</button>" +
            "<button type='button' class='btn btn-primary' data-toggle='modal' data-target='#modal-update-produk'>Update Penjualan</button>" +
            "</div>" +
            "</div>" +
            "</div>";
        var info3 = new google.maps.InfoWindow({
            content: konten3
        });
        lokasi3.addListener('click', function () {
            info3.open(map, lokasi3);
            document.getElementById('IDTokoHapus').value = 11;
            document.getElementById('IDTokoUbah').value = 11;
            document.getElementById('LatUbah').value = -8.199257231587115;
            document.getElementById('LongUbah').value = 113.71673583984375;
            document.getElementById('NamaTokoUbah').value = "lalala";
            document.getElementById('NamaPemilikUbah').value = "lllll";
            document.getElementById('NoTelpUbah').value = "llll";
            document.getElementById('AlamatUbah').value = "lll";
            document.getElementById('IDKecamatanUbah').value = 1;
            document.getElementById('KeteranganUbah').value = "lllll";
        });

        google.maps.event.addListener(map, 'click', function (event) {
            placeMarker(event.latLng);
        });

        function placeMarker(location) {
            var lat = location.lat();
            var long = location.lng();
            if (marker) {
                marker.setPosition(location);
            } else {
                marker = new google.maps.Marker({
                    position: location,
                    map: map
                });
            }
            windowTambah.open(map, marker);
            document.getElementById("Lat").value = lat;
            document.getElementById("Long").value = long;
        }
    }

</script>
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCb9WDbufMGSEGz5PGq8T4DHPqa08lP-hc&callback=initMap">
</script>
</body>
</html>

