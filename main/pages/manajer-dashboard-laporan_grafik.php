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
            <?php
            if (isset($kecamatan)) {
                $namKecamatan = $kecamatan;
                echo "Grafik Penjualan Kecamatan $namKecamatan";
            } else {
                echo "Grafik Penjualan";
            }
            ?>

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
            /**
             * grafik distribusi
             */
            echo "<div class='box box-success'>\n";
            echo "<div class='box-header'>\n";
            echo "<h3>Distribusi</h3>\n";
            echo "</div>\n";
            echo "<div class='box-body'>\n";
            echo "<div class='chart'><canvas id='grafikProduk' style='height:250px'></canvas></div>\n";
            echo "</div>\n";
            echo "<div class='box-footer'><div class='btn-group'>\n
                    <button class='btn btn-flat bg-red'>200ml</button>\n
                    <button class='btn btn-flat bg-green'>600ml</button>\n
                    <button class='btn btn-flat bg-blue'>1500ml</button>\n
                    </div>\n</div>\n";
            echo "</div>\n";
            /**
             * grafik penjualan
             */
            echo "<div class='box box-success'>\n";
            echo "<div class='box-header'>\n";

            echo "<h3>Penjualan</h3>\n";
            echo "</div>\n";
            echo "<div class='box-body'>\n";
            echo "<div class='chart'><canvas id='grafikJual' style='height:250px'></canvas></div>\n";
            echo "<div class='box-footer'><div class='btn-group'>\n
                    <button class='btn btn-flat bg-maroon'>200ml</button>\n
                    <button class='btn btn-flat bg-lime'>600ml</button>\n
                    <button class='btn btn-flat bg-teal'>1500ml</button>\n
                    </div>\n</div>\n";
            echo "</div>\n";
            echo "</div>\n";
            if (isset($daftarToko)) {
                echo "<div class='box box-success'>";
                echo "<div class='box-header'>";
                echo "<h3>Daftar Toko</h3>";
                echo "</div>";
                echo "<div class='box-body'>";
                echo "<div class='list-group'>";
                foreach ($daftarToko as $item) {
                    $warna = "";
                    $pesan = "";
                    $persen = ($item['Terjual'] / $item['Diterima']) * 100;
                    $persen = round($persen);
                    if ($persen > 80 && $persen <= 100) {   /*sangat berpotensi*/
                        $warna = "bg-green";
                        $pesan = "Sangat Berpotensi";
                    } else if ($persen > 70 && $persen <= 80) {    /*potensial*/
                        $warna = "bg-green-active";
                        $pesan = "Potensi";
                    } else if ($persen > 50 && $persen <= 70) {    /*kurang berpotensi*/
                        $warna = "bg-orange";
                        $pesan = "Kurang Berpotensi";
                    } else if ($persen < 50) {    /*tidak potensial*/
                        $warna = "bg-red";
                        $pesan = "Tidak Berpotensi";
                    }
                    $NamaToko = $item['NamaToko'];
                    echo "<li class='list-group-item $warna'>$NamaToko <p class='pull-right'>$pesan (Penjualan $persen%)</p></li>";
                }
                echo "</div>";
                echo "</div>";
                echo "</div>";
            }
        } else {
            echo "<div class='box box-warning'>\n";
            echo "<div class='box-header'><h3>Tidak Ada Data</h3></div>\n";
            echo "<div class='box-body'>Tidak Ada Data Produk Distribusi</div>\n";
            echo "</div>\n";
            echo "</div>\n";
        }
        ?>

        <?php

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
                    $data200['Januari'] = $item['dis200'];
                    $data600['Januari'] = $item['dis600'];
                    $data1500['Januari'] = $item['dis1500'];
                    break;
                case 8:
                    $data200['Agustus'] = $item['dis200'];
                    $data600['Agustus'] = $item['dis600'];
                    $data1500['Agustus'] = $item['dis1500'];
                    break;
                case 9:
                    $data200['September'] = $item['dis200'];
                    $data600['September'] = $item['dis600'];
                    $data1500['September'] = $item['dis1500'];
                    break;
                case 10:
                    $data200['Oktober'] = $item['dis200'];
                    $data600['Oktober'] = $item['dis600'];
                    $data1500['Oktober'] = $item['dis1500'];
                    break;
                case 11:
                    $data200['November'] = $item['dis200'];
                    $data600['November'] = $item['dis600'];
                    $data1500['November'] = $item['dis1500'];
                    break;
                case 12:
                    $data200['Desember'] = $item['dis200'];
                    $data600['Desember'] = $item['dis600'];
                    $data1500['Desember'] = $item['dis1500'];
                    break;
                default:
                    /**
                     * tidak ada
                     */
//                    $data200 = array('Januari' => 0, 'Februari' => 0, 'Maret' => 0, 'April' => 0, 'Mei' => 0, 'Juni' => 0, 'Juli' => 0, 'Agustus' => 0, 'September' => 0, 'Oktober' => 0, 'November' => 0, 'Desember' => 0);
//                    $data600 = array('Januari' => 0, 'Februari' => 0, 'Maret' => 0, 'April' => 0, 'Mei' => 0, 'Juni' => 0, 'Juli' => 0, 'Agustus' => 0, 'September' => 0, 'Oktober' => 0, 'November' => 0, 'Desember' => 0);
//                    $data1500 = array('Januari' => 0, 'Februari' => 0, 'Maret' => 0, 'April' => 0, 'Mei' => 0, 'Juni' => 0, 'Juli' => 0, 'Agustus' => 0, 'September' => 0, 'Oktober' => 0, 'November' => 0, 'Desember' => 0);
                    break;
            }
        }
        echo "$(function () {";
        echo "var chart = $('#grafikProduk').get(0).getContext('2d');\n";
        echo "var chartProdukDiterima = new Chart(chart);\n";

        echo "var chartData = {\n";
        echo "labels: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'],\n";
        echo "datasets: [\n";
        echo "{\n";
        echo "label: 'Terdistribusi200',\n";
        echo "fillColor: 'rgba(221,75,57, 1)',\n";
        echo "strokeColor: 'rgba(221,75,57, 1)',\n";
        echo "pointColor: 'rgba(221,75,57, 1)',\n";
        echo "pointStrokeColor: 'rgba(221,75,57, 1)',\n";
        echo "pointHighlightFill: '#fff',\n";
        echo "pointHighlightStroke: 'rgba(221,75,57, 1)',\n";
        echo "data: [\n";
        foreach ($data200 as $item) {
            echo "$item,";
        }
        echo "]\n";
        echo "},\n";
        echo "{\n";
        echo "label: 'Terdistribusi600',\n";
        echo "fillColor: 'rgba(0,166,90, 1)',\n";
        echo "strokeColor: 'rgba(0,166,90, 1)',\n";
        echo "pointColor: 'rgba(0,166,90, 1)',\n";
        echo "pointStrokeColor: 'rgba(0,166,90, 1)',\n";
        echo "pointHighlightFill: '#fff',\n";
        echo "pointHighlightStroke: 'rgba(0,166,90, 1)',\n";
        echo "data: [\n";
        foreach ($data600 as $item) {
            echo "$item,";
        }
        echo "]\n";
        echo "},\n";
        echo "{\n";
        echo "label: 'Terdistribusi1500',\n";
        echo "fillColor: 'rgba(0,115,183, 1)',\n";
        echo "strokeColor: 'rgba(0,115,183, 1)',\n";
        echo "pointColor: 'rgba(0,115,183, 1)',\n";
        echo "pointStrokeColor: 'rgba(0,115,183, 1)',\n";
        echo "pointHighlightFill: '#fff',\n";
        echo "pointHighlightStroke: 'rgba(0,115,183, 1)',\n";
        echo "data: [\n";
        foreach ($data1500 as $item) {
            echo "$item,";
        }
        echo "]\n";
        echo "}\n";
        echo "]\n";
        echo "};\n";

        echo "var option = {\n";
        echo "showScale: true,
            scaleShowGridLines: false,
            scaleGridLineColor: 'rgba(0,0,0,.05)',
            scaleGridLineWidth: 1,
            scaleShowHorizontalLines: true,
            scaleShowVerticalLines: true,
            bezierCurve: false,
            bezierCurveTension: 0,
            pointDot: true,
            pointDotRadius: 4,
            pointDotStrokeWidth: 1,
            pointHitDetectionRadius: 20,
            datasetStroke: true,
            datasetStrokeWidth: 2,
            datasetFill: false,
            maintainAspectRatio: true,
            responsive: true";
        echo "}\n";
        echo "chartProdukDiterima.Line(chartData, option);\n";
        echo "})\n";
    }
    if (isset($terjualPerTahun)) {
        foreach ($terjualPerTahun as $item) {
            $_200 = $item['jual200'];
            $_600 = $item['jual600'];
            $_1500 = $item['jual1500'];
            echo "console.log('$_200, $_600, $_1500');";
        }
        $dataJual200 = array('Januari' => 0, 'Februari' => 0, 'Maret' => 0, 'April' => 0, 'Mei' => 0, 'Juni' => 0, 'Juli' => 0, 'Agustus' => 0, 'September' => 0, 'Oktober' => 0, 'November' => 0, 'Desember' => 0);
        $dataJual600 = array('Januari' => 0, 'Februari' => 0, 'Maret' => 0, 'April' => 0, 'Mei' => 0, 'Juni' => 0, 'Juli' => 0, 'Agustus' => 0, 'September' => 0, 'Oktober' => 0, 'November' => 0, 'Desember' => 0);
        $dataJual1500 = array('Januari' => 0, 'Februari' => 0, 'Maret' => 0, 'April' => 0, 'Mei' => 0, 'Juni' => 0, 'Juli' => 0, 'Agustus' => 0, 'September' => 0, 'Oktober' => 0, 'November' => 0, 'Desember' => 0);
        foreach ($terjualPerTahun as $item) {
            switch ($item['bulan']) {
                case 1:
                    $dataJual200['Januari'] = $item['jual200'];
                    $dataJual600['Januari'] = $item['jual600'];
                    $dataJual1500['Januari'] = $item['jual1500'];
                    break;
                case 2:
                    $dataJual200['Februari'] = $item['jual200'];
                    $dataJual600['Februari'] = $item['jual600'];
                    $dataJual1500['Februari'] = $item['jual1500'];
                    break;
                case 3:
                    $dataJual200['Maret'] = $item['jual200'];
                    $dataJual600['Maret'] = $item['jual600'];
                    $dataJual1500['Maret'] = $item['jual1500'];
                    break;
                case 4:
                    $dataJual200['April'] = $item['jual200'];
                    $dataJual600['April'] = $item['jual600'];
                    $dataJual1500['April'] = $item['jual1500'];
                    break;
                case 5:
                    $dataJual200['Mei'] = $item['jual200'];
                    $dataJual600['Mei'] = $item['jual600'];
                    $dataJual1500['Mei'] = $item['jual1500'];
                    break;
                case 6:
                    $dataJual200['Juni'] = $item['jual200'];
                    $dataJual600['Juni'] = $item['jual600'];
                    $dataJual1500['Juli'] = $item['jual1500'];
                    break;
                case 7:
                    $dataJual200['Januari'] = $item['jual200'];
                    $dataJual600['Januari'] = $item['jual600'];
                    $dataJual1500['Januari'] = $item['jual1500'];
                    break;
                case 8:
                    $dataJual200['Agustus'] = $item['jual200'];
                    $dataJual600['Agustus'] = $item['jual600'];
                    $dataJual1500['Agustus'] = $item['jual1500'];
                    break;
                case 9:
                    $dataJual200['September'] = $item['jual200'];
                    $dataJual600['September'] = $item['jual600'];
                    $dataJual1500['September'] = $item['jual1500'];
                    break;
                case 10:
                    $dataJual200['Oktober'] = $item['jual200'];
                    $dataJual600['Oktober'] = $item['jual600'];
                    $dataJual1500['Oktober'] = $item['jual1500'];
                    break;
                case 11:
                    $dataJual200['November'] = $item['jual200'];
                    $dataJual600['November'] = $item['jual600'];
                    $dataJual1500['November'] = $item['jual1500'];
                    break;
                case 12:
                    $dataJual200['Desember'] = $item['jual200'];
                    $dataJual600['Desember'] = $item['jual600'];
                    $dataJual1500['Desember'] = $item['jual1500'];
                    break;
                default:
                    /**
                     * tidak ada
                     */
                    break;
            }
        }
        echo "$(function () {";
        echo "var chartJual = $('#grafikJual').get(0).getContext('2d');\n";
        echo "var chartProdukTerjual = new Chart(chartJual);\n";

        echo "var chartJualData = {\n";
        echo "labels: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'],\n";
        echo "datasets: [\n";
        echo "{\n";
        echo "label: 'Terjual200',\n";
        echo "fillColor: 'rgba(216,27,96, 1)',\n";
        echo "strokeColor: 'rgba(216,27,96, 1)',\n";
        echo "pointColor: 'rgba(216,27,96, 1)',\n";
        echo "pointStrokeColor: 'rgba(216,27,96, 1)',\n";
        echo "pointHighlightFill: '#fff',\n";
        echo "pointHighlightStroke: 'rgba(216,27,96, 1)',\n";
        echo "data: [\n";
        foreach ($dataJual200 as $item) {
            echo "$item,";
        }
        echo "]\n";
        echo "},\n";
        echo "{\n";
        echo "label: 'Terdistribusi600',\n";
        echo "fillColor: 'rgba(1,255,112, 1)',\n";
        echo "strokeColor: 'rgba(1,255,112, 1)',\n";
        echo "pointColor: 'rgba(1,255,112, 1)',\n";
        echo "pointStrokeColor: 'rgba(1,255,112, 1)',\n";
        echo "pointHighlightFill: '#fff',\n";
        echo "pointHighlightStroke: 'rgba(1,255,112, 1)',\n";
        echo "data: [\n";
        foreach ($dataJual600 as $item) {
            echo "$item,";
        }
        echo "]\n";
        echo "},\n";
        echo "{\n";
        echo "label: 'Terdistribusi1500',\n";
        echo "fillColor: 'rgba(57,204,204, 1)',\n";
        echo "strokeColor: 'rgba(57,204,204, 1)',\n";
        echo "pointColor: 'rgba(57,204,204, 1)',\n";
        echo "pointStrokeColor: 'rgba(57,204,204, 1)',\n";
        echo "pointHighlightFill: '#fff',\n";
        echo "pointHighlightStroke: 'rgba(57,204,204, 1)',\n";
        echo "data: [\n";
        foreach ($dataJual1500 as $item) {
            echo "$item,";
        }
        echo "]\n";
        echo "}\n";
        echo "]\n";
        echo "};\n";

        echo "var optionJual = {\n";
        echo "showScale: true,
            scaleShowGridLines: false,
            scaleGridLineColor: 'rgba(0,0,0,.05)',
            scaleGridLineWidth: 1,
            scaleShowHorizontalLines: true,
            scaleShowVerticalLines: true,
            bezierCurve: false,
            bezierCurveTension: 0,
            pointDot: true,
            pointDotRadius: 4,
            pointDotStrokeWidth: 1,
            pointHitDetectionRadius: 20,
            datasetStroke: true,
            datasetStrokeWidth: 2,
            datasetFill: false,
            legendTemplate: '<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\"background-color:<%=datasets[i].lineColor%>\"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>',
            maintainAspectRatio: true,
            responsive: true";
        echo "}\n";
        echo "chartProdukTerjual.Line(chartJualData, optionJual);\n";
        echo "})\n";
    }
    ?>
</script>
</body>
</html>
