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
            Penjualan Toko <?php if (isset($namaToko)) echo "$namaToko"; ?>
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
                echo "<div class='form-group'>\n";
                echo "<div class='col-md-1'>\n";
                echo "<label for='pilihBulan'>Bulan</label>\n";
                echo "</div>\n";
                echo "<div class='col-md-2'>\n";
                echo "<select name='Bulan' id='pilihBulan' class='form-control' onchange='gantiBulan()'>\n";
                echo "<option value='1'>Januari</option>\n";
                echo "<option value='2'>Februari</option>\n";
                echo "<option value='3'>Maret</option>\n";
                echo "<option value='4'>April</option>\n";
                echo "<option value='5'>Mei</option>\n";
                echo "<option value='6'>Juni</option>\n";
                echo "<option value='7'>Juli</option>\n";
                echo "<option value='8'>Agustus</option>\n";
                echo "<option value='9'>September</option>\n";
                echo "<option value='10'>Oktober</option>\n";
                echo "<option value='11'>November</option>\n";
                echo "<option value='12'>Desember</option>\n";
                echo "</select>\n";
                echo "</div>\n";
                echo "</div>\n";
            } else {

            }
            ?>
        </div>
        <br>
        <?php
        echo "<div class='box box-default'>";
        echo "<div class='box-body'>";
        if (isset($toko)) {
            echo "<table class='table table-bordered table-hover'>\n";
            echo "<thead>\n";
            echo "<tr>\n<td>Produk</td>\n<td>Barang Masuk</td>\n<td>Tanggal Tambah</td>\n<td>Barang Terjual</td>\n<td>Tanggal Keluar</td>\n<td>Sisa Produk</td>\n</tr>\n";
            echo "</thead>\n";
            echo "<tbody>\n";
            echo "<tr>\n<td>200ml</td>\n<td id='masuk200'></td>\n<td id='masuk1'></td>\n<td id='keluar200'></td>\n<td id='keluar1'></td>\n<td id='sisa200'></td>\n</tr>\n";
            echo "<tr>\n<td>600ml</td>\n<td id='masuk600'></td>\n<td id='masuk2'></td>\n<td id='keluar600'></td>\n<td id='keluar2'></td>\n<td id='sisa600'></td>\n</tr>\n";
            echo "<tr>\n<td>1500ml</td>\n<td id='masuk1500'></td>\n<td id='masuk3'></td>\n<td id='keluar1500'></td>\n<td id='keluar3'></td>\n<td id='sisa1500'></td>\n</tr>\n";
            echo "</tbody>\n";
            echo "</table>\n";
        } else {
            echo "<div class='box-header'>Tidak Ada Data</div>\n</div>\n";
        }
        echo "</div>\n<div class='box-footer'>\n";
        echo "<div class='btn-group'>";
        echo "<button></button>";
        echo "</div>\n</div>\n";
        ?>
        <!--akhir kontent-->
        <?php require_once('main/element/modals.php'); ?>
</div>
<?php require_once('main/element/footer.php'); ?>
<script>
    <?php
    if (isset($toko)) {
        echo "function gantiBulan(){\n";
        echo "var bulan = document.getElementById('pilihBulan').value;\n";
        echo "console.log(bulan);\n";
        echo "if (bulan == 1) {";
        foreach ($toko as $item) {
            if ($item['Bulan'] == 1) {
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
                echo "document.getElementById('masuk200').innerHTML = $Diterima200;\n";
                echo "document.getElementById('masuk600').innerHTML = $Diterima600;\n";
                echo "document.getElementById('masuk1500').innerHTML = $Diterima1500;\n";
                echo "document.getElementById('masuk1').innerHTML = '$Terima';\n";
                echo "document.getElementById('masuk2').innerHTML = '$Terima';\n";
                echo "document.getElementById('masuk3').innerHTML = '$Terima';\n";
                echo "document.getElementById('keluar200').innerHTML = $Terjual200;\n";
                echo "document.getElementById('keluar600').innerHTML = $Terjual600;\n";
                echo "document.getElementById('keluar1500').innerHTML = $Terjual1500;\n";
                echo "document.getElementById('keluar1').innerHTML = '$Terjual';\n";
                echo "document.getElementById('keluar2').innerHTML = '$Terjual';\n";
                echo "document.getElementById('keluar3').innerHTML = '$Terjual';\n";
                echo "document.getElementById('sisa200').innerHTML = $sisa200;\n";
                echo "document.getElementById('sisa600').innerHTML = $sisa600;\n";
                echo "document.getElementById('sisa1500').innerHTML = $sisa1500;\n";
            } else {
                echo "document.getElementById('masuk200').innerHTML = 0;\n";
                echo "document.getElementById('masuk600').innerHTML = 0;\n";
                echo "document.getElementById('masuk1500').innerHTML = 0;\n";
                echo "document.getElementById('masuk1').innerHTML = 'belum ada transaksi';\n";
                echo "document.getElementById('masuk2').innerHTML = 'belum ada transaksi';\n";
                echo "document.getElementById('masuk3').innerHTML = 'belum ada transaksi';\n";
                echo "document.getElementById('keluar200').innerHTML = 0;\n";
                echo "document.getElementById('keluar600').innerHTML = 0;\n";
                echo "document.getElementById('keluar1500').innerHTML = 0;\n";
                echo "document.getElementById('keluar1').innerHTML = 'belum ada transaksi';\n";
                echo "document.getElementById('keluar2').innerHTML = 'belum ada transaksi';\n";
                echo "document.getElementById('keluar3').innerHTML = 'belum ada transaksi';\n";
                echo "document.getElementById('sisa200').innerHTML = 0;\n";
                echo "document.getElementById('sisa600').innerHTML = 0;\n";
                echo "document.getElementById('sisa1500').innerHTML = 0;\n";
            }
        }
        echo "}";
        echo "else if (bulan == 2) {\n";
        foreach ($toko as $item) {
            if ($item['Bulan'] == 2) {
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
                echo "document.getElementById('masuk200').innerHTML = $Diterima200;\n";
                echo "document.getElementById('masuk600').innerHTML = $Diterima600;\n";
                echo "document.getElementById('masuk1500').innerHTML = $Diterima1500;\n";
                echo "document.getElementById('masuk1').innerHTML = '$Terima';\n";
                echo "document.getElementById('masuk2').innerHTML = '$Terima';\n";
                echo "document.getElementById('masuk3').innerHTML = '$Terima';\n";
                echo "document.getElementById('keluar200').innerHTML = $Terjual200;\n";
                echo "document.getElementById('keluar600').innerHTML = $Terjual600;\n";
                echo "document.getElementById('keluar1500').innerHTML = $Terjual1500;\n";
                echo "document.getElementById('keluar1').innerHTML = '$Terjual';\n";
                echo "document.getElementById('keluar2').innerHTML = '$Terjual';\n";
                echo "document.getElementById('keluar3').innerHTML = '$Terjual';\n";
                echo "document.getElementById('sisa200').innerHTML = $sisa200;\n";
                echo "document.getElementById('sisa600').innerHTML = $sisa600;\n";
                echo "document.getElementById('sisa1500').innerHTML = $sisa1500;\n";
            } else {
                echo "document.getElementById('masuk200').innerHTML = 0;\n";
                echo "document.getElementById('masuk600').innerHTML = 0;\n";
                echo "document.getElementById('masuk1500').innerHTML = 0;\n";
                echo "document.getElementById('masuk1').innerHTML = 'belum ada transaksi';\n";
                echo "document.getElementById('masuk2').innerHTML = 'belum ada transaksi';\n";
                echo "document.getElementById('masuk3').innerHTML = 'belum ada transaksi';\n";
                echo "document.getElementById('keluar200').innerHTML = 0;\n";
                echo "document.getElementById('keluar600').innerHTML = 0;\n";
                echo "document.getElementById('keluar1500').innerHTML = 0;\n";
                echo "document.getElementById('keluar1').innerHTML = 'belum ada transaksi';\n";
                echo "document.getElementById('keluar2').innerHTML = 'belum ada transaksi';\n";
                echo "document.getElementById('keluar3').innerHTML = 'belum ada transaksi';\n";
                echo "document.getElementById('sisa200').innerHTML = 0;\n";
                echo "document.getElementById('sisa600').innerHTML = 0;\n";
                echo "document.getElementById('sisa1500').innerHTML = 0;\n";
            }
        }
        echo "}";
        echo "else if (bulan == 3) {\n";
        foreach ($toko as $item) {
            if ($item['Bulan'] == 3) {
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
                echo "document.getElementById('masuk200').innerHTML = $Diterima200;\n";
                echo "document.getElementById('masuk600').innerHTML = $Diterima600;\n";
                echo "document.getElementById('masuk1500').innerHTML = $Diterima1500;\n";
                echo "document.getElementById('masuk1').innerHTML = '$Terima';\n";
                echo "document.getElementById('masuk2').innerHTML = '$Terima';\n";
                echo "document.getElementById('masuk3').innerHTML = '$Terima';\n";
                echo "document.getElementById('keluar200').innerHTML = $Terjual200;\n";
                echo "document.getElementById('keluar600').innerHTML = $Terjual600;\n";
                echo "document.getElementById('keluar1500').innerHTML = $Terjual1500;\n";
                echo "document.getElementById('keluar1').innerHTML = '$Terjual';\n";
                echo "document.getElementById('keluar2').innerHTML = '$Terjual';\n";
                echo "document.getElementById('keluar3').innerHTML = '$Terjual';\n";
                echo "document.getElementById('sisa200').innerHTML = $sisa200;\n";
                echo "document.getElementById('sisa600').innerHTML = $sisa600;\n";
                echo "document.getElementById('sisa1500').innerHTML = $sisa1500;\n";
            } else {
                echo "document.getElementById('masuk200').innerHTML = 0;\n";
                echo "document.getElementById('masuk600').innerHTML = 0;\n";
                echo "document.getElementById('masuk1500').innerHTML = 0;\n";
                echo "document.getElementById('masuk1').innerHTML = 'belum ada transaksi';\n";
                echo "document.getElementById('masuk2').innerHTML = 'belum ada transaksi';\n";
                echo "document.getElementById('masuk3').innerHTML = 'belum ada transaksi';\n";
                echo "document.getElementById('keluar200').innerHTML = 0;\n";
                echo "document.getElementById('keluar600').innerHTML = 0;\n";
                echo "document.getElementById('keluar1500').innerHTML = 0;\n";
                echo "document.getElementById('keluar1').innerHTML = 'belum ada transaksi';\n";
                echo "document.getElementById('keluar2').innerHTML = 'belum ada transaksi';\n";
                echo "document.getElementById('keluar3').innerHTML = 'belum ada transaksi';\n";
                echo "document.getElementById('sisa200').innerHTML = 0;\n";
                echo "document.getElementById('sisa600').innerHTML = 0;\n";
                echo "document.getElementById('sisa1500').innerHTML = 0;\n";
            }
        }
        echo "}";
        echo "else if (bulan == 4) {\n";
        foreach ($toko as $item) {
            if ($item['Bulan'] == 4) {
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
                echo "document.getElementById('masuk200').innerHTML = $Diterima200;\n";
                echo "document.getElementById('masuk600').innerHTML = $Diterima600;\n";
                echo "document.getElementById('masuk1500').innerHTML = $Diterima1500;\n";
                echo "document.getElementById('masuk1').innerHTML = '$Terima';\n";
                echo "document.getElementById('masuk2').innerHTML = '$Terima';\n";
                echo "document.getElementById('masuk3').innerHTML = '$Terima';\n";
                echo "document.getElementById('keluar200').innerHTML = $Terjual200;\n";
                echo "document.getElementById('keluar600').innerHTML = $Terjual600;\n";
                echo "document.getElementById('keluar1500').innerHTML = $Terjual1500;\n";
                echo "document.getElementById('keluar1').innerHTML = '$Terjual';\n";
                echo "document.getElementById('keluar2').innerHTML = '$Terjual';\n";
                echo "document.getElementById('keluar3').innerHTML = '$Terjual';\n";
                echo "document.getElementById('sisa200').innerHTML = $sisa200;\n";
                echo "document.getElementById('sisa600').innerHTML = $sisa600;\n";
                echo "document.getElementById('sisa1500').innerHTML = $sisa1500;\n";
            } else {
                echo "document.getElementById('masuk200').innerHTML = 0;\n";
                echo "document.getElementById('masuk600').innerHTML = 0;\n";
                echo "document.getElementById('masuk1500').innerHTML = 0;\n";
                echo "document.getElementById('masuk1').innerHTML = 'belum ada transaksi';\n";
                echo "document.getElementById('masuk2').innerHTML = 'belum ada transaksi';\n";
                echo "document.getElementById('masuk3').innerHTML = 'belum ada transaksi';\n";
                echo "document.getElementById('keluar200').innerHTML = 0;\n";
                echo "document.getElementById('keluar600').innerHTML = 0;\n";
                echo "document.getElementById('keluar1500').innerHTML = 0;\n";
                echo "document.getElementById('keluar1').innerHTML = 'belum ada transaksi';\n";
                echo "document.getElementById('keluar2').innerHTML = 'belum ada transaksi';\n";
                echo "document.getElementById('keluar3').innerHTML = 'belum ada transaksi';\n";
                echo "document.getElementById('sisa200').innerHTML = 0;\n";
                echo "document.getElementById('sisa600').innerHTML = 0;\n";
                echo "document.getElementById('sisa1500').innerHTML = 0;\n";
            }
        }
        echo "}";
        echo "else if (bulan == 5) {\n";
        foreach ($toko as $item) {
            if ($item['Bulan'] == 5) {
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
                echo "document.getElementById('masuk200').innerHTML = $Diterima200;\n";
                echo "document.getElementById('masuk600').innerHTML = $Diterima600;\n";
                echo "document.getElementById('masuk1500').innerHTML = $Diterima1500;\n";
                echo "document.getElementById('masuk1').innerHTML = '$Terima';\n";
                echo "document.getElementById('masuk2').innerHTML = '$Terima';\n";
                echo "document.getElementById('masuk3').innerHTML = '$Terima';\n";
                echo "document.getElementById('keluar200').innerHTML = $Terjual200;\n";
                echo "document.getElementById('keluar600').innerHTML = $Terjual600;\n";
                echo "document.getElementById('keluar1500').innerHTML = $Terjual1500;\n";
                echo "document.getElementById('keluar1').innerHTML = '$Terjual';\n";
                echo "document.getElementById('keluar2').innerHTML = '$Terjual';\n";
                echo "document.getElementById('keluar3').innerHTML = '$Terjual';\n";
                echo "document.getElementById('sisa200').innerHTML = $sisa200;\n";
                echo "document.getElementById('sisa600').innerHTML = $sisa600;\n";
                echo "document.getElementById('sisa1500').innerHTML = $sisa1500;\n";
            } else {
                echo "document.getElementById('masuk200').innerHTML = 0;\n";
                echo "document.getElementById('masuk600').innerHTML = 0;\n";
                echo "document.getElementById('masuk1500').innerHTML = 0;\n";
                echo "document.getElementById('masuk1').innerHTML = 'belum ada transaksi';\n";
                echo "document.getElementById('masuk2').innerHTML = 'belum ada transaksi';\n";
                echo "document.getElementById('masuk3').innerHTML = 'belum ada transaksi';\n";
                echo "document.getElementById('keluar200').innerHTML = 0;\n";
                echo "document.getElementById('keluar600').innerHTML = 0;\n";
                echo "document.getElementById('keluar1500').innerHTML = 0;\n";
                echo "document.getElementById('keluar1').innerHTML = 'belum ada transaksi';\n";
                echo "document.getElementById('keluar2').innerHTML = 'belum ada transaksi';\n";
                echo "document.getElementById('keluar3').innerHTML = 'belum ada transaksi';\n";
                echo "document.getElementById('sisa200').innerHTML = 0;\n";
                echo "document.getElementById('sisa600').innerHTML = 0;\n";
                echo "document.getElementById('sisa1500').innerHTML = 0;\n";
            }
        }
        echo "}";
        echo "else if (bulan == 6) {\n";
        foreach ($toko as $item) {
            if ($item['Bulan'] == 6) {
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
                echo "document.getElementById('masuk200').innerHTML = $Diterima200;\n";
                echo "document.getElementById('masuk600').innerHTML = $Diterima600;\n";
                echo "document.getElementById('masuk1500').innerHTML = $Diterima1500;\n";
                echo "document.getElementById('masuk1').innerHTML = '$Terima';\n";
                echo "document.getElementById('masuk2').innerHTML = '$Terima';\n";
                echo "document.getElementById('masuk3').innerHTML = '$Terima';\n";
                echo "document.getElementById('keluar200').innerHTML = $Terjual200;\n";
                echo "document.getElementById('keluar600').innerHTML = $Terjual600;\n";
                echo "document.getElementById('keluar1500').innerHTML = $Terjual1500;\n";
                echo "document.getElementById('keluar1').innerHTML = '$Terjual';\n";
                echo "document.getElementById('keluar2').innerHTML = '$Terjual';\n";
                echo "document.getElementById('keluar3').innerHTML = '$Terjual';\n";
                echo "document.getElementById('sisa200').innerHTML = $sisa200;\n";
                echo "document.getElementById('sisa600').innerHTML = $sisa600;\n";
                echo "document.getElementById('sisa1500').innerHTML = $sisa1500;\n";
            } else {
                echo "document.getElementById('masuk200').innerHTML = 0;\n";
                echo "document.getElementById('masuk600').innerHTML = 0;\n";
                echo "document.getElementById('masuk1500').innerHTML = 0;\n";
                echo "document.getElementById('masuk1').innerHTML = 'belum ada transaksi';\n";
                echo "document.getElementById('masuk2').innerHTML = 'belum ada transaksi';\n";
                echo "document.getElementById('masuk3').innerHTML = 'belum ada transaksi';\n";
                echo "document.getElementById('keluar200').innerHTML = 0;\n";
                echo "document.getElementById('keluar600').innerHTML = 0;\n";
                echo "document.getElementById('keluar1500').innerHTML = 0;\n";
                echo "document.getElementById('keluar1').innerHTML = 'belum ada transaksi';\n";
                echo "document.getElementById('keluar2').innerHTML = 'belum ada transaksi';\n";
                echo "document.getElementById('keluar3').innerHTML = 'belum ada transaksi';\n";
                echo "document.getElementById('sisa200').innerHTML = 0;\n";
                echo "document.getElementById('sisa600').innerHTML = 0;\n";
                echo "document.getElementById('sisa1500').innerHTML = 0;\n";
            }
        }
        echo "}";
        echo "else if (bulan == 7) {\n";
        foreach ($toko as $item) {
            if ($item['Bulan'] == 7) {
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
                echo "document.getElementById('masuk200').innerHTML = $Diterima200;\n";
                echo "document.getElementById('masuk600').innerHTML = $Diterima600;\n";
                echo "document.getElementById('masuk1500').innerHTML = $Diterima1500;\n";
                echo "document.getElementById('masuk1').innerHTML = '$Terima';\n";
                echo "document.getElementById('masuk2').innerHTML = '$Terima';\n";
                echo "document.getElementById('masuk3').innerHTML = '$Terima';\n";
                echo "document.getElementById('keluar200').innerHTML = $Terjual200;\n";
                echo "document.getElementById('keluar600').innerHTML = $Terjual600;\n";
                echo "document.getElementById('keluar1500').innerHTML = $Terjual1500;\n";
                echo "document.getElementById('keluar1').innerHTML = '$Terjual';\n";
                echo "document.getElementById('keluar2').innerHTML = '$Terjual';\n";
                echo "document.getElementById('keluar3').innerHTML = '$Terjual';\n";
                echo "document.getElementById('sisa200').innerHTML = $sisa200;\n";
                echo "document.getElementById('sisa600').innerHTML = $sisa600;\n";
                echo "document.getElementById('sisa1500').innerHTML = $sisa1500;\n";
            } else {
                echo "document.getElementById('masuk200').innerHTML = 0;\n";
                echo "document.getElementById('masuk600').innerHTML = 0;\n";
                echo "document.getElementById('masuk1500').innerHTML = 0;\n";
                echo "document.getElementById('masuk1').innerHTML = 'belum ada transaksi';\n";
                echo "document.getElementById('masuk2').innerHTML = 'belum ada transaksi';\n";
                echo "document.getElementById('masuk3').innerHTML = 'belum ada transaksi';\n";
                echo "document.getElementById('keluar200').innerHTML = 0;\n";
                echo "document.getElementById('keluar600').innerHTML = 0;\n";
                echo "document.getElementById('keluar1500').innerHTML = 0;\n";
                echo "document.getElementById('keluar1').innerHTML = 'belum ada transaksi';\n";
                echo "document.getElementById('keluar2').innerHTML = 'belum ada transaksi';\n";
                echo "document.getElementById('keluar3').innerHTML = 'belum ada transaksi';\n";
                echo "document.getElementById('sisa200').innerHTML = 0;\n";
                echo "document.getElementById('sisa600').innerHTML = 0;\n";
                echo "document.getElementById('sisa1500').innerHTML = 0;\n";
            }
        }
        echo "}";
        echo "else if (bulan == 8) {\n";
        foreach ($toko as $item) {
            if ($item['Bulan'] == 8) {
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
                echo "document.getElementById('masuk200').innerHTML = $Diterima200;\n";
                echo "document.getElementById('masuk600').innerHTML = $Diterima600;\n";
                echo "document.getElementById('masuk1500').innerHTML = $Diterima1500;\n";
                echo "document.getElementById('masuk1').innerHTML = '$Terima';\n";
                echo "document.getElementById('masuk2').innerHTML = '$Terima';\n";
                echo "document.getElementById('masuk3').innerHTML = '$Terima';\n";
                echo "document.getElementById('keluar200').innerHTML = $Terjual200;\n";
                echo "document.getElementById('keluar600').innerHTML = $Terjual600;\n";
                echo "document.getElementById('keluar1500').innerHTML = $Terjual1500;\n";
                echo "document.getElementById('keluar1').innerHTML = '$Terjual';\n";
                echo "document.getElementById('keluar2').innerHTML = '$Terjual';\n";
                echo "document.getElementById('keluar3').innerHTML = '$Terjual';\n";
                echo "document.getElementById('sisa200').innerHTML = $sisa200;\n";
                echo "document.getElementById('sisa600').innerHTML = $sisa600;\n";
                echo "document.getElementById('sisa1500').innerHTML = $sisa1500;\n";
            } else {
                echo "document.getElementById('masuk200').innerHTML = 0;\n";
                echo "document.getElementById('masuk600').innerHTML = 0;\n";
                echo "document.getElementById('masuk1500').innerHTML = 0;\n";
                echo "document.getElementById('masuk1').innerHTML = 'belum ada transaksi';\n";
                echo "document.getElementById('masuk2').innerHTML = 'belum ada transaksi';\n";
                echo "document.getElementById('masuk3').innerHTML = 'belum ada transaksi';\n";
                echo "document.getElementById('keluar200').innerHTML = 0;\n";
                echo "document.getElementById('keluar600').innerHTML = 0;\n";
                echo "document.getElementById('keluar1500').innerHTML = 0;\n";
                echo "document.getElementById('keluar1').innerHTML = 'belum ada transaksi';\n";
                echo "document.getElementById('keluar2').innerHTML = 'belum ada transaksi';\n";
                echo "document.getElementById('keluar3').innerHTML = 'belum ada transaksi';\n";
                echo "document.getElementById('sisa200').innerHTML = 0;\n";
                echo "document.getElementById('sisa600').innerHTML = 0;\n";
                echo "document.getElementById('sisa1500').innerHTML = 0;\n";
            }
        }
        echo "}";
        echo "else if (bulan == 9) {\n";
        foreach ($toko as $item) {
            if ($item['Bulan'] == 9) {
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
                echo "document.getElementById('masuk200').innerHTML = $Diterima200;\n";
                echo "document.getElementById('masuk600').innerHTML = $Diterima600;\n";
                echo "document.getElementById('masuk1500').innerHTML = $Diterima1500;\n";
                echo "document.getElementById('masuk1').innerHTML = '$Terima';\n";
                echo "document.getElementById('masuk2').innerHTML = '$Terima';\n";
                echo "document.getElementById('masuk3').innerHTML = '$Terima';\n";
                echo "document.getElementById('keluar200').innerHTML = $Terjual200;\n";
                echo "document.getElementById('keluar600').innerHTML = $Terjual600;\n";
                echo "document.getElementById('keluar1500').innerHTML = $Terjual1500;\n";
                echo "document.getElementById('keluar1').innerHTML = '$Terjual';\n";
                echo "document.getElementById('keluar2').innerHTML = '$Terjual';\n";
                echo "document.getElementById('keluar3').innerHTML = '$Terjual';\n";
                echo "document.getElementById('sisa200').innerHTML = $sisa200;\n";
                echo "document.getElementById('sisa600').innerHTML = $sisa600;\n";
                echo "document.getElementById('sisa1500').innerHTML = $sisa1500;\n";
            } else {
                echo "document.getElementById('masuk200').innerHTML = 0;\n";
                echo "document.getElementById('masuk600').innerHTML = 0;\n";
                echo "document.getElementById('masuk1500').innerHTML = 0;\n";
                echo "document.getElementById('masuk1').innerHTML = 'belum ada transaksi';\n";
                echo "document.getElementById('masuk2').innerHTML = 'belum ada transaksi';\n";
                echo "document.getElementById('masuk3').innerHTML = 'belum ada transaksi';\n";
                echo "document.getElementById('keluar200').innerHTML = 0;\n";
                echo "document.getElementById('keluar600').innerHTML = 0;\n";
                echo "document.getElementById('keluar1500').innerHTML = 0;\n";
                echo "document.getElementById('keluar1').innerHTML = 'belum ada transaksi';\n";
                echo "document.getElementById('keluar2').innerHTML = 'belum ada transaksi';\n";
                echo "document.getElementById('keluar3').innerHTML = 'belum ada transaksi';\n";
                echo "document.getElementById('sisa200').innerHTML = 0;\n";
                echo "document.getElementById('sisa600').innerHTML = 0;\n";
                echo "document.getElementById('sisa1500').innerHTML = 0;\n";
            }
        }
        echo "}";
        echo "else if (bulan == 10) {\n";
        foreach ($toko as $item) {
            if ($item['Bulan'] == 10) {
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
                echo "document.getElementById('masuk200').innerHTML = $Diterima200;\n";
                echo "document.getElementById('masuk600').innerHTML = $Diterima600;\n";
                echo "document.getElementById('masuk1500').innerHTML = $Diterima1500;\n";
                echo "document.getElementById('masuk1').innerHTML = '$Terima';\n";
                echo "document.getElementById('masuk2').innerHTML = '$Terima';\n";
                echo "document.getElementById('masuk3').innerHTML = '$Terima';\n";
                echo "document.getElementById('keluar200').innerHTML = $Terjual200;\n";
                echo "document.getElementById('keluar600').innerHTML = $Terjual600;\n";
                echo "document.getElementById('keluar1500').innerHTML = $Terjual1500;\n";
                echo "document.getElementById('keluar1').innerHTML = '$Terjual';\n";
                echo "document.getElementById('keluar2').innerHTML = '$Terjual';\n";
                echo "document.getElementById('keluar3').innerHTML = '$Terjual';\n";
                echo "document.getElementById('sisa200').innerHTML = $sisa200;\n";
                echo "document.getElementById('sisa600').innerHTML = $sisa600;\n";
                echo "document.getElementById('sisa1500').innerHTML = $sisa1500;\n";
            } else {
                echo "document.getElementById('masuk200').innerHTML = 0;\n";
                echo "document.getElementById('masuk600').innerHTML = 0;\n";
                echo "document.getElementById('masuk1500').innerHTML = 0;\n";
                echo "document.getElementById('masuk1').innerHTML = 'belum ada transaksi';\n";
                echo "document.getElementById('masuk2').innerHTML = 'belum ada transaksi';\n";
                echo "document.getElementById('masuk3').innerHTML = 'belum ada transaksi';\n";
                echo "document.getElementById('keluar200').innerHTML = 0;\n";
                echo "document.getElementById('keluar600').innerHTML = 0;\n";
                echo "document.getElementById('keluar1500').innerHTML = 0;\n";
                echo "document.getElementById('keluar1').innerHTML = 'belum ada transaksi';\n";
                echo "document.getElementById('keluar2').innerHTML = 'belum ada transaksi';\n";
                echo "document.getElementById('keluar3').innerHTML = 'belum ada transaksi';\n";
                echo "document.getElementById('sisa200').innerHTML = 0;\n";
                echo "document.getElementById('sisa600').innerHTML = 0;\n";
                echo "document.getElementById('sisa1500').innerHTML = 0;\n";
            }
        }
        echo "}";
        echo "else if (bulan == 11) {\n";
        foreach ($toko as $item) {
            if ($item['Bulan'] == 11) {
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
                echo "document.getElementById('masuk200').innerHTML = $Diterima200;\n";
                echo "document.getElementById('masuk600').innerHTML = $Diterima600;\n";
                echo "document.getElementById('masuk1500').innerHTML = $Diterima1500;\n";
                echo "document.getElementById('masuk1').innerHTML = '$Terima';\n";
                echo "document.getElementById('masuk2').innerHTML = '$Terima';\n";
                echo "document.getElementById('masuk3').innerHTML = '$Terima';\n";
                echo "document.getElementById('keluar200').innerHTML = $Terjual200;\n";
                echo "document.getElementById('keluar600').innerHTML = $Terjual600;\n";
                echo "document.getElementById('keluar1500').innerHTML = $Terjual1500;\n";
                echo "document.getElementById('keluar1').innerHTML = '$Terjual';\n";
                echo "document.getElementById('keluar2').innerHTML = '$Terjual';\n";
                echo "document.getElementById('keluar3').innerHTML = '$Terjual';\n";
                echo "document.getElementById('sisa200').innerHTML = $sisa200;\n";
                echo "document.getElementById('sisa600').innerHTML = $sisa600;\n";
                echo "document.getElementById('sisa1500').innerHTML = $sisa1500;\n";
            } else {
                echo "document.getElementById('masuk200').innerHTML = 0;\n";
                echo "document.getElementById('masuk600').innerHTML = 0;\n";
                echo "document.getElementById('masuk1500').innerHTML = 0;\n";
                echo "document.getElementById('masuk1').innerHTML = 'belum ada transaksi';\n";
                echo "document.getElementById('masuk2').innerHTML = 'belum ada transaksi';\n";
                echo "document.getElementById('masuk3').innerHTML = 'belum ada transaksi';\n";
                echo "document.getElementById('keluar200').innerHTML = 0;\n";
                echo "document.getElementById('keluar600').innerHTML = 0;\n";
                echo "document.getElementById('keluar1500').innerHTML = 0;\n";
                echo "document.getElementById('keluar1').innerHTML = 'belum ada transaksi';\n";
                echo "document.getElementById('keluar2').innerHTML = 'belum ada transaksi';\n";
                echo "document.getElementById('keluar3').innerHTML = 'belum ada transaksi';\n";
                echo "document.getElementById('sisa200').innerHTML = 0;\n";
                echo "document.getElementById('sisa600').innerHTML = 0;\n";
                echo "document.getElementById('sisa1500').innerHTML = 0;\n";
            }
        }
        echo "}";
        echo "else if (bulan == 12) {\n";
        foreach ($toko as $item) {
            if ($item['Bulan'] == 12) {
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
                echo "document.getElementById('masuk200').innerHTML = $Diterima200;\n";
                echo "document.getElementById('masuk600').innerHTML = $Diterima600;\n";
                echo "document.getElementById('masuk1500').innerHTML = $Diterima1500;\n";
                echo "document.getElementById('masuk1').innerHTML = '$Terima';\n";
                echo "document.getElementById('masuk2').innerHTML = '$Terima';\n";
                echo "document.getElementById('masuk3').innerHTML = '$Terima';\n";
                echo "document.getElementById('keluar200').innerHTML = $Terjual200;\n";
                echo "document.getElementById('keluar600').innerHTML = $Terjual600;\n";
                echo "document.getElementById('keluar1500').innerHTML = $Terjual1500;\n";
                echo "document.getElementById('keluar1').innerHTML = '$Terjual';\n";
                echo "document.getElementById('keluar2').innerHTML = '$Terjual';\n";
                echo "document.getElementById('keluar3').innerHTML = '$Terjual';\n";
                echo "document.getElementById('sisa200').innerHTML = $sisa200;\n";
                echo "document.getElementById('sisa600').innerHTML = $sisa600;\n";
                echo "document.getElementById('sisa1500').innerHTML = $sisa1500;\n";
            } else {
                echo "document.getElementById('masuk200').innerHTML = 0;\n";
                echo "document.getElementById('masuk600').innerHTML = 0;\n";
                echo "document.getElementById('masuk1500').innerHTML = 0;\n";
                echo "document.getElementById('masuk1').innerHTML = 'belum ada transaksi';\n";
                echo "document.getElementById('masuk2').innerHTML = 'belum ada transaksi';\n";
                echo "document.getElementById('masuk3').innerHTML = 'belum ada transaksi';\n";
                echo "document.getElementById('keluar200').innerHTML = 0;\n";
                echo "document.getElementById('keluar600').innerHTML = 0;\n";
                echo "document.getElementById('keluar1500').innerHTML = 0;\n";
                echo "document.getElementById('keluar1').innerHTML = 'belum ada transaksi';\n";
                echo "document.getElementById('keluar2').innerHTML = 'belum ada transaksi';\n";
                echo "document.getElementById('keluar3').innerHTML = 'belum ada transaksi';\n";
                echo "document.getElementById('sisa200').innerHTML = 0;\n";
                echo "document.getElementById('sisa600').innerHTML = 0;\n";
                echo "document.getElementById('sisa1500').innerHTML = 0;\n";
            }
        }
        echo "}";

        echo "}";
    } else {

    }
    ?>
</script>
</body>
</html>
