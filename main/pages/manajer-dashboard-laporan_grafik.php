<?php
/**
 * Created by PhpStorm.
 * User: Aleq
 * Date: 31/10/2017
 * Time: 23:54
 */

//session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once('main/element/head.php'); ?>
    <title>Dashboard - Grafik Penjualan</title>
</head>
<body class="hold-transition skin-blue-light sidebar-mini">
<?php require_once('main/element/header.php') ?>
<?php require_once('main/element/sidebar-manajer.php') ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Grafik Penjualan Per Kecamatan
            <small></small>
        </h1>
        <ol class="breadcrumb">
            <li><i class="fa fa-home"></i><a href="?controller=home&action=manajerHome">Beranda</a></li>
            <li><a href="?controller=laporan&action=manajerLaporan">Laporan</a></li>
            <li class="active">Grafik Perkembangan</li>
        </ol>
    </section>
    <section class="content container-fluid">
        <!-- awal konten -->

        <!-- akhir konten -->
        <?php require_once('main/element/modals.php'); ?>
</div>
<?php require_once('main/element/footer.php'); ?>

</body>
</html>
