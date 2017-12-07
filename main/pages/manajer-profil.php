<?php
/**
 * Created by PhpStorm.
 * User: Aleq
 * Date: 01/11/2017
 * Time: 0:01
 */

//session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once('main/element/head.php'); ?>
    <title>Σ SIGMA - <?php echo $_SESSION['halaman'] ?></title>
</head>
<body class="hold-transition skin-blue-light sidebar-mini">
<?php require_once('main/element/header.php') ?>
<?php require_once('main/element/sidebar-manajer.php') ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>

            <small></small>
        </h1>
        <ol class="breadcrumb">
            <li><i class="fa fa-home"></i><a href="?controller=home&action=manajerHome">Beranda</a></li>
            <li class="active">Profil</li>
        </ol>
    </section>
    <section class="content container-fluid">
        <!-- awal konten -->
        <form method="get">
            <input type="hidden" name="controller" value="profil">
            <input type="hidden" name="action" value="ubahManajer">
            <div class="row">
                <div class="col-md-4">
                    <div class="box box-primary">
                        <div class="box-body">
                            <div class="user-image circle">
                                <img src="assets/img/user2-160x160.jpg" alt="User Image"
                                     class="profile-user-img img-responsive img-circle">
                            </div>
                            <h3 class="profile-username text-center">
                                <?php echo $_SESSION['Nama'] ?>
                            </h3>
                            <p class="text-muted text-center">Manajer</p>
                        </div>
                    </div>
                    <div >
                        <div class="box box-success">
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="Username">Email</label>
                                    <input type="email" name="Email" id="Email" placeholder="Email / Username..."
                                           class="form-control" value="<?php echo $dataDiri['Username'] ?>">
                                </div>
                                <div class="form-group">
                                    <label for="Password">Kata Sandi</label>
                                    <input type="text" name="Password" id="Password" placeholder="Kata Sandi..."
                                           class="form-control" value="<?php echo $dataDiri['Password'] ?>">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="box box-primary">
                        <div class="box-header">
                            <h3>Profil Saya</h3>
                        </div>
                        <div class="box-body">
                            <div class="form-group">
                                <label for="NamaAgen">Nama Lengkap</label>
                                <input type="text" class="form-control" id="user-name-edit"
                                       placeholder="Nama Lengkap..." value="<?php echo $dataDiri['Nama']; ?>">
                            </div>
                            <div class="form-group">
                                <label>Jenis Kelamin</label>
                                <div class="radio" id="jk">
                                    <label><input type="radio" name="JenisKelamin" id="laki">Laki-Laki</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="JenisKelamin" id="perem">Perempuan</label>
                                </div>
                            </div>
                            <script type="text/javascript">
                                var jk = <?php $l = $dataDiri['JenisKelamin'];echo "\"$l\";\n";?>
                                if (jk == "Laki-Laki") {
                                    document.getElementById("laki").checked="true";
                                } else {
                                    document.getElementById("perem").checked="true";
                                }
                            </script>
                            <div class="form-group">
                                <label for="datepicker">Tanggal Lahir</label>
                                <div class="input-group date">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="text" class="form-control pull-right" id="datepicker"
                                           name="TanggalLahir"
                                           value="<?php echo $dataDiri['TanggalLahir'] ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="NoTelp">Nomor Telepon</label>
                                <input type="text" class="form-control" id="nomor-telepon"
                                       placeholder="Nomor Telepon..." value="<?php echo $dataDiri['NoTelp'] ?>">
                            </div>
                        </div>
                        <div class="box-footer">
                            <div class="btn-group">
                                <button type="button" class="btn btn-default">Batal</button>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <!-- akhir konten -->
        <?php require_once('main/element/modals.php'); ?>
</div>
<?php require_once('main/element/footer.php'); ?>

</body>
</html>
