<?php
/**
 * Created by PhpStorm.
 * User: Aleq
 * Date: 31/10/2017
 * Time: 23:48
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once('main/element/head.php'); ?>
    <title>Dashboard - Beranda</title>
</head>
<body class="hold-transition skin-blue-light sidebar-mini">
<?php require_once('main/element/header.php') ?>
<?php require_once('main/element/sidebar-ko_agen.php') ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Beranda
            <small></small>
        </h1>
        <ol class="breadcrumb">
            <li class="active"><i class="fa fa-home"></i> Beranda</li>
        </ol>
    </section>
    <section class="content container-fluid">
        <!-- awal konten -->
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-red"><i class="glyphicon glyphicon-home"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Toko Terdaftar Untuk Distribusi</span>
                    <span class="info-box-number">
                        <?php echo $jumlah[0] ?> Toko
                    </span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- akhir konten -->
        <?php require_once('main/element/modals.php'); ?>
</div>
<?php require_once('main/element/footer.php'); ?>

</body>
</html>
