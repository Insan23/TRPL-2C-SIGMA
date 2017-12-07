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
    <title>Dashboard - Peta</title>
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
            <li class="active">Pemetaan</li>
        </ol>
    </section>
    <section class="content container-fluid">
        <!-- awal konten -->
        <script type="text/javascript">
            function initMap() {
                var map = new google.maps.Map(document.getElementById('peta'), {
                    center: {lat: -8.169187, lng: 113.702040},
                    zoom: 11,
                    fullscreenControl: false,
                    streetViewControl: false
                });
                // Create a map object and specify the DOM element for display.
                windowTambah = new google.maps.InfoWindow({
                    content: kontenTambah
                });

                <?php
                $i = 0;
                foreach ($peta as $item) {
                    $ID_ = $item['ID'];
                    $NamaToko_ = $item['NamaToko'];
                    $NamaPemilik_ = $item['NamaPemilik'];
                    $AlamatToko_ = $item['AlamatToko'];
                    $IDKecamatan_ = $item['IDKecamatan'];
                    $Kecamatan_ = $item['Kecamatan'];
                    $NoTelp_ = $item['NoTelp'];
                    $Keterangan_ = $item['Keterangan'];
                    $Lat_ = $item['Lat'];
                    $Long_ = $item['Long'];

                    $marker = "lokasi" . $i;
                    $info = "info" . $i;
                    $konten = "konten" . $i;

                    /**
                     * menambahkan lokasi satu per satu ke peta
                     */
                    echo "var $marker = new google.maps.Marker({\n";
                    echo "position: {lat: $Lat_, lng:$Long_},\n";
                    echo "map: map\n";
                    echo "});\n";

                    echo "var $konten = \"<div class='box box-info'>\" +
                                                \"<div class='box-header'>\" +
                                                \"<h3>Toko $NamaToko_</h3>\" +
                                                \"</div>\" +
                                                \"<div class='box-body'>\" +
                                                \"<p>Pemilik: $NamaPemilik_</p>\" +
                                                \"<p>No Telp: $NoTelp_</p>\" +
                                                \"<p>Alamat: $AlamatToko_</p>\" +
                                                \"<p>Kecamatan: $Kecamatan_</p>\" +
                                                \"</div>\" +
                                                \"</div>\";";
                    echo "var $info = new google.maps.InfoWindow({\n";
                    echo "content: $konten\n";
                    echo "});\n";

                    echo "$marker.addListener('click', function(){\n";
                    echo "$info.open(map, $marker);\n";
                    echo "});\n";
                    $i++;
                }

                ?>

//                google.maps.event.addListener(map, 'click', function (event) {
//                    placeMarker(event.latLng);
//                });

//                function placeMarker(location) {
//                    var lat = location.lat();
//                    var long = location.lng();
//                    if (marker) {
//                        marker.setPosition(location);
//                    } else {
//                        marker = new google.maps.Marker({
//                            position: location,
//                            map: map
//                        });
//                    }
//                    windowTambah.open(map, marker);
//                    document.getElementById("Lat").value = lat;
//                    document.getElementById("Long").value = long;
//                }
            }

        </script>
        <!-- akhir konten -->
        <?php require_once('main/element/modals.php'); ?>
</div>
<?php require_once('main/element/footer.php'); ?>

</body>
</html>
