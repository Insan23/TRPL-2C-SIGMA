<?php
/**
 * Created by PhpStorm.
 * User: Aleq
 * Date: 31/10/2017
 * Time: 23:52
 */

//session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once('main/element/head.php'); ?>
    <title>Dashboard - Detail Penjualan</title>
</head>
<body class="hold-transition skin-blue-light sidebar-mini">
<?php require_once('main/element/header.php') ?>
<?php require_once('main/element/sidebar-ko_agen.php') ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Penjualan Toko <?php if (isset($namaToko)) echo "$namaToko";?>
            <small></small>
        </h1>
        <ol class="breadcrumb">
            <li><i class="fa fa-home"></i><a href="?controller=home&action=koAgenHome">Beranda</a></li>
            <li><a href="?controller=penjualan&action=koAgenPenjualan">Penjualan</a></li>
            <li class="active">Penjualan Per Toko</li>
        </ol>
    </section>
    <section class="content container-fluid">
        <!-- awal konten -->
        <!-- drop down bulan-->
        <div class="row">
                <?php
                if (isset($toko)) {
                    echo "<div class='form-group'>";
                    echo "<div class='col-md-1'>";
                    echo "<label for='pilihBulan'>Bulan</label>";
                    echo "</div>";
                    echo "<div class='col-md-4'>";
                    echo "<select name='Bulan' id='pilihBulan' class='form-control'>";
                    echo "<option value='0'>Januari</option>";
                    echo "<option value='1'>Februari</option>";
                    echo "<option value='2'>Maret</option>";
                    echo "<option value='3'>April</option>";
                    echo "<option value='4'>Mei</option>";
                    echo "<option value='5'>Juni</option>";
                    echo "<option value='6'>Juli</option>";
                    echo "<option value='7'>Agustus</option>";
                    echo "<option value='8'>September</option>";
                    echo "<option value='9'>Oktober</option>";
                    echo "<option value='10'>November</option>";
                    echo "<option value='11'>Desember</option>";
                    echo "</select>";
                    echo "</div>";
                    echo "</div>";
                } else {

                }
                ?>
        </div>
        <br>
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
                echo "<tr><td>200ml</td><td></td><td></td><td></td><td></td><td></td></tr>";
                echo "<tr><td>600ml</td><td></td><td></td><td></td><td></td><td></td></tr>";
                echo "<tr><td>1500ml</td><td></td><td></td><td></td><td></td><td></td></tr>";
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
        <!--akhir kontent-->
        <?php require_once('main/element/modals.php'); ?>
</div>
<?php require_once('main/element/footer.php'); ?>
<script>
    <?php

    ?>
</script>
</body>
</html>
