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
        <?php
        if (isset($kecamatan)) {
            echo "<div class='box box-success'>";
            echo "<div class='box-header'>";
            $namKecamatan = $kecamatan['Kecamatan'];
            echo "<h3>$namKecamatan</h3>";
            echo "</div>";
            echo "<div class='box-body'>";
            echo "<div class='chart'><canvas id='grafikProduk' style='height:250px'></canvas></div>";
            echo "</div>";
        } else {
            echo "<div class='box box-warning'>";
            echo "<div class='box-header'><h3>Tidak Ada Data</h3></div>";
            echo "<div class='box-body'>Tidak Ada Data Produk Distribusi</div>";
            echo "</div>";
        }
        ?>


        <!-- akhir konten -->
        <?php require_once('main/element/modals.php'); ?>
</div>
<?php require_once('main/element/footer.php'); ?>
<script>

    <?php
    if (isset($distribusiPerTahun)) {
        $data200 = array('Januari' => 0, 'Februari' => 0, 'Maret' => 0, 'April' => 0, 'Mei' => 0, 'Juni' => 0, 'Juli' => 0, 'Agustus' => 0, 'September' => 0, 'Oktober' => 0, 'November' => 0, 'Desember' => 0);
        $data600 = array('Januari' => 0, 'Februari' => 0, 'Maret' => 0, 'April' => 0, 'Mei' => 0, 'Juni' => 0, 'Juli' => 0, 'Agustus' => 0, 'September' => 0, 'Oktober' => 0, 'November' => 0, 'Desember' => 0);
        $data1500 = array('Januari' => 0, 'Februari' => 0, 'Maret' => 0, 'April' => 0, 'Mei' => 0, 'Juni' => 0, 'Juli' => 0, 'Agustus' => 0, 'September' => 0, 'Oktober' => 0, 'November' => 0, 'Desember' => 0);
        foreach ($distribusiPerTahun as $item) {
            switch ($item['bulan']) {
                case 1:
                    $data200['Januari'] = $item['dis200'];
                    $data600['Januari'] = $item['dis600'];
                    $data1500['Januari'] = $item['dis1500'];
                    break;
                case 2:
                    $data200['Februari'] = $item['dis200'];
                    $data600['Februari'] = $item['dis600'];
                    $data1500['Februari'] = $item['dis1500'];
                    break;
                case 3:
                    $data200['Maret'] = $item['dis200'];
                    $data600['Maret'] = $item['dis600'];
                    $data1500['Maret'] = $item['dis1500'];
                    break;
                case 4:
                    $data200['April'] = $item['dis200'];
                    $data600['April'] = $item['dis600'];
                    $data1500['April'] = $item['dis1500'];
                    break;
                case 5:
                    $data200['Mei'] = $item['dis200'];
                    $data600['Mei'] = $item['dis600'];
                    $data1500['Mei'] = $item['dis1500'];
                    break;
                case 6:
                    $data200['Juni'] = $item['dis200'];
                    $data600['Juni'] = $item['dis600'];
                    $data1500['Juli'] = $item['dis1500'];
                    break;
                case 7:
                    $data200['Agustus'] = $item['dis200'];
                    $data600['Agustus'] = $item['dis600'];
                    $data1500['Agustus'] = $item['dis1500'];
                    break;
                case 8:
                    $data200['September'] = $item['dis200'];
                    $data600['September'] = $item['dis600'];
                    $data1500['September'] = $item['dis1500'];
                    break;
                case 9:
                    $data200['Oktober'] = $item['dis200'];
                    $data600['Oktober'] = $item['dis600'];
                    $data1500['Oktober'] = $item['dis1500'];
                    break;
                case 10:
                    $data200['November'] = $item['dis200'];
                    $data600['November'] = $item['dis600'];
                    $data1500['November'] = $item['dis1500'];
                    break;
                case 11:
                    $data200['Desember'] = $item['dis200'];
                    $data600['Desember'] = $item['dis600'];
                    $data1500['Desember'] = $item['dis1500'];
                    break;
                case 12:
                    $data200['Januari'] = $item['dis200'];
                    $data600['Januari'] = $item['dis600'];
                    $data1500['Januari'] = $item['dis1500'];
                    break;
                default:
                    $data200 = array('Januari' => 0, 'Februari' => 0, 'Maret' => 0, 'April' => 0, 'Mei' => 0, 'Juni' => 0, 'Juli' => 0, 'Agustus' => 0, 'September' => 0, 'Oktober' => 0, 'November' => 0, 'Desember' => 0);
                    $data600 = array('Januari' => 0, 'Februari' => 0, 'Maret' => 0, 'April' => 0, 'Mei' => 0, 'Juni' => 0, 'Juli' => 0, 'Agustus' => 0, 'September' => 0, 'Oktober' => 0, 'November' => 0, 'Desember' => 0);
                    $data1500 = array('Januari' => 0, 'Februari' => 0, 'Maret' => 0, 'April' => 0, 'Mei' => 0, 'Juni' => 0, 'Juli' => 0, 'Agustus' => 0, 'September' => 0, 'Oktober' => 0, 'November' => 0, 'Desember' => 0);
                    break;
            }
        }

        echo "var chart = $('#grafikProduk').get(0).getContent('2d');";
        echo "var chartProdukDiterima = new Chart(chart);";

        echo "var chartData = {";
        echo "labels: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'],";
        echo "datasets: [";
        echo "{";
        echo "label: Terdistribusi200,";
        echo "fillColor: 'rgba(33, 150, 243, 1),'";
        echo "strokeColor: 'rgba(33, 150, 243, 1)',";
        echo "pointColor: 'rgba(33, 150, 243, 1)',";
        echo "pointStrokeColor: 'rgba(33, 150, 243, 1)',";
        echo "pointHighlightFill: '#fff',";
        echo "pointHighlightStroke: 'rgba(33, 150, 243, 1)',";
        echo "data: [";
        $i = count($data200);
        $j = 0;
        foreach ($data200 as $item) {
            if ($j == $i) {
                echo "$item";
            } else {
                echo "$item,";
            }
            $j++;
        }
        echo "]";
        echo "},";
        echo "{";
        echo "label: Terdistribusi600,";
        echo "fillColor: 'rgba(25, 118, 210, 1),'";
        echo "strokeColor: 'rgba(25, 118, 210, 1)',";
        echo "pointColor: 'rgba(25, 118, 210, 1)',";
        echo "pointStrokeColor: 'rgba(25, 118, 210, 1)',";
        echo "pointHighlightFill: '#fff',";
        echo "pointHighlightStroke: 'rgba(25, 118, 210, 1)',";
        echo "data: [";
        $i = count($data600);
        $j = 0;
        foreach ($data600 as $item) {
            if ($j == $i) {
                echo "$item";
            } else {
                echo "$item,";
            }
            $j++;
        }
        echo "]";
        echo "},";


        echo "};";
    }
    ?>
</script>
</body>
</html>
