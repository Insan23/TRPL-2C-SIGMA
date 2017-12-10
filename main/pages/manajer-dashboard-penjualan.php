<?php
/**
 * Created by PhpStorm.
 * User: Aleq
 * Date: 01/11/2017
 * Time: 0:49
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
<?php require_once('main/element/sidebar-manajer.php') ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Data Penjualan
            <small></small>
        </h1>
        <ol class="breadcrumb">
            <li><i class="fa fa-home"></i><a href="?controller=home&action=manajerHome">Beranda</a></li>
            <li class="active">Penjualan</li>
        </ol>
    </section>
    <section class="content container-fluid">
        <!-- awal konten -->
        <?php
        if (isset($kecamatan)) {
            foreach ($kecamatan as $kec) {
                $namaKec = $kec['Kecamatan'];
                echo "<div class='box box-primary'>";
                echo "<div class='box-header'><h3>$namaKec</h3></div>";
                echo "<div class='box-body'>";
                echo "<div class='list-group'>";
                foreach ($toko as $tok) {
                    $namaTok = $tok['NamaToko'];
                    $IDTok = $tok['IDToko'];
                    if ($tok['Kecamatan'] == $namaKec) {
                        echo "<tr><td>";
                        echo "<div class='col-md-12'>";
                        echo "<a class='list-group-item' href='?controller=penjualan&action=manajerPenjualanToko&IDToko=$IDTok'>$namaTok</a>";
                        echo "</div>";
                        echo "</td></tr>";
                    }
                }
                echo "</div>";
                echo "</div></div>";
            }
        } else {
            echo "<div class=\"callout callout-warning\">";
            echo "<h4>Tidak Ada Data Penjualan</h4>";
            echo "<p>Silahkan Hubungi Koordinator Yang Bersangkutan.</p>";
            echo "<div>";
        }
        ?>
        <!-- akhir konten -->
        <?php require_once('main/element/modals.php'); ?>
</div>
<?php require_once('main/element/footer.php'); ?>

</body>
</html>
