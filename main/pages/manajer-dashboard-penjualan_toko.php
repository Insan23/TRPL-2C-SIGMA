<?php
/**
 * Created by PhpStorm.
 * User: Aleq
 * Date: 01/11/2017
 * Time: 0:51
 */

//session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once('main/element/head.php'); ?>
    <title>Dashboard - Rincian Penjualan</title>
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
            <li><a href="?controller=penjualan&action=manajerPenjualan">Penjualan</a></li>
            <li class="active">Penjualan Per Toko</li>
        </ol>
    </section>
    <section class="content container-fluid">
        <!-- awal konten -->
        <?php
        echo "<div class='box box-default'>";
        echo "<div class='box-body'>";
        if (isset($toko)) {
            foreach ($toko as $item) {
                $Diterima200 = $item['Diterima200'];
                $Diterima600 = $item['Diterima600'];
                $Diterima1500 = $item['Diterima1500'];
                $Terjual200 = $item['Terjual200'];
                $Terjual600 = $item['Terjual600'];
                $Terjual1500 = $item['Terjual1500'];
                $Terima = $item['TanggalDiterima'];
                $Terjual = $item['TanggalTerjual'];
                $sisa200 = $Diterima200 - $Terjual200;
                $sisa600 = $Diterima600 - $Terjual600;
                $sisa1500 = $Diterima1500 - $Terjual1500;
                echo "<table class='table table-bordered table-hover'>";
                echo "<thead>";
                echo "<tr><td>Produk</td><td>Barang Masuk</td><td>Tanggal Tambah</td><td>Barang Terjual</td><td>Tanggal Keluar</td><td>Sisa Produk</td></tr>";
                echo "</thead>";
                echo "<tbody>";
                echo "<tr><td>200ml</td><td>$Diterima200</td><td>$Terima</td><td>$Terjual200</td><td>$Terjual</td><td>$sisa200</td></tr>";
                echo "<tr><td>600ml</td><td>$Diterima600</td><td>$Terima</td><td>$Terjual600</td><td>$Terjual</td><td>$sisa600</td></tr>";
                echo "<tr><td>1500ml</td><td>$Diterima1500</td><td>$Terima</td><td>$Terjual1500</td><td>$Terjual</td><td>$sisa1500</td></tr>";
                echo "</tbody>";
                echo "</table>";
            }
        } else {
            echo "<div class='box-header'>Tidak Ada Data</div></div<";
        }
        echo "</div><div class='box-footer'>";
        echo "";
        echo "</div></div>";
        ?>
        <!-- akhir konten -->
        <?php require_once('main/element/modals.php'); ?>
</div>
<?php require_once('main/element/footer.php'); ?>

</body>
</html>
