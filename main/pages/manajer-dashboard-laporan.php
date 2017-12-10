<?php
/**
 * Created by PhpStorm.
 * User: Aleq
 * Date: 31/10/2017
 * Time: 23:50
 */

//session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once('main/element/head.php'); ?>
    <title>Dashboard - Laporan</title>
</head>
<body class="hold-transition skin-blue-light sidebar-mini">
<?php require_once('main/element/header.php') ?>
<?php require_once('main/element/sidebar-manajer.php') ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Ringkasan Penjualan</h1>
        <ol class="breadcrumb">
            <li><i class="fa fa-home"></i><a href="?controller=home&action=manajerHome">Beranda</a></li>
            <li class="active">Laporan</li>
        </ol>
    </section>
    <section class="content container-fluid">
        <!-- awal konten -->
        <?php
        if (isset($listKecamatan)) {

            /**
             * sorting
             * terjual / diterima * 100(%)
             */
            $jum = count($listKecamatan);
            for ($i = 0; $i < ($jum - 1); $i++) {
                for ($j = 0; $j < $jum - $i - 1; $j++) {
                    $terjual = $listKecamatan[$j]['Terjual'];
                    $diterima = $listKecamatan[$j]['Diterima'];
                    $terjual1 = $listKecamatan[$j + 1]['Terjual'];
                    $diterima1 = $listKecamatan[$j + 1]['Diterima'];

                    $persen = ($terjual / $diterima) * 100;
                    $persen1 = ($terjual1 / $diterima1) * 100;
                    if ($persen > $persen1) {
                        $s = $listKecamatan[$j];
                        $listKecamatan[$j] = $listKecamatan[$j + 1];
                        $listKecamatan[$j + 1] = $s;
                    }
                }
            }

            echo "<div class='list-group'>";
            foreach ($listKecamatan as $item) {
                $warna = "";
                $persen = ($item['Terjual'] / $item['Diterima']) * 100;
                if ($persen > 80 && $persen <= 100) {   /*sangat berpotensi*/
                    $warna = "bg-green";
                } else if ($persen > 70 && $persen <= 80) {    /*potensial*/
                    $warna = "bg-green-active";
                } else if ($persen > 50 && $persen <= 70) {    /*kurang berpotensi*/
                    $warna = "bg-orange";
                } else if ($persen < 50) {    /*tidak potensial*/
                    $warna = "bg-red";
                }
                $kec = $item['Kecamatan'];
                $IDKec = $item['IDKecamatan'];
                echo "<a class='list-group-item $warna' href='?controller=laporan&action=manajerLaporanGrafik&IDKecamatan=$IDKec'>$kec</a>";
            }
            echo "</div>";

        } else {
            echo "<div class=\"callout callout-warning\">";
            echo "<h4>Tidak Ada Data Laporan</h4>";
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
