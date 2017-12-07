<?php
/**
 * Created by PhpStorm.
 * User: Aleq
 * Date: 31/10/2017
 * Time: 23:49
 */

//session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once('main/element/head.php'); ?>
    <title>Dashboard - Penjualan</title>
</head>
<body class="hold-transition skin-blue-light sidebar-mini">
<?php require_once('main/element/header.php') ?>
<?php require_once('main/element/sidebar-ko_agen.php') ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>

            <small></small>
        </h1>
        <ol class="breadcrumb">
            <li><i class="fa fa-home"></i><a href="?controller=home&action=koAgenHome">Beranda</a></li>
            <li class="active">Penjualan Wilayah Kecamatan</li>
        </ol>
    </section>
    <section class="content container-fluid">
        <!-- awal konten -->
        <?php
        foreach ($kecamatan as $kec) {
            $namaKec = $kec['Kecamatan'];
            echo "<div class='box box-primary'>";
            echo "<div class='box-header'><h3>$namaKec</h3></div>";
            echo "<div class='box-body'>";
            echo "<table class='table table-bordered table-hover'>";
            foreach ($toko as $tok) {
                $namaTok = $tok['NamaToko'];
                $IDTok = $tok['IDToko'];
                if ($tok['Kecamatan'] == $namaKec) {
                    echo "<tr><td>";
                    echo "<div class='col-md-12'>";
                    echo "<a class='btn btn-default btn-flat' type='button' href='?controller=penjualan&action=koAgenPenjualanToko&IDToko=$IDTok'>$namaTok</a>";
                    echo "</div>";
                    echo "</td></tr>";
                }
            }
            echo "</table>";
            echo "</div></div>";
        }
        ?>
        <!--akhir kontent-->
        <?php require_once('main/element/modals.php'); ?>
</div>
<?php require_once('main/element/footer.php'); ?>

</body>
</html>
