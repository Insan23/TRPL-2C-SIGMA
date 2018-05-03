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
    <title>Dashboard - Peta</title>
</head>
<body class="hold-transition skin-blue-light sidebar-mini">
<?php require_once('main/element/header.php') ?>
<?php require_once('main/element/sidebar-ko_agen.php') ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Pemetaan
            <small></small>
        </h1>
        <ol class="breadcrumb">
            <li><i class="fa fa-home"></i><a href="?controller=home&action=koAgenHome">Beranda</a></li>
            <li class="active">Pemetaan</li>
        </ol>
    </section>
    <section class="content container-fluid">
        <!-- awal konten -->
        <div class="box box-primary box-solid bg-gray-light">
            <div class="box-body">
                <div id="peta" style="height: 430px; width: 100%;">
                </div>

            </div>
        </div>
        <?php include_once "main/element/modals.php"; ?>
        <!--akhir kontent-->
    </section>
</div>

<?php require_once('main/element/footer.php'); ?>
</body>
<script type="text/javascript">
    /**
     * lokasi jember
     * lat: -8.169187, lng: 113.702040
     * zoom: 11
     *
     */
    var marker;
    var windowTambah;
    var windowError;
    var kontenTambah = "<button type='button' class='btn btn-default btn-flat' data-toggle='modal' data-target='#modal-input-toko'>Tambah Lokasi Toko</button>";
    var kontenError = "<h3>Wilayah Toko Diluar Jember</h3>";

    function initMap() {
        var map = new google.maps.Map(document.getElementById('peta'), {
            center: {lat: -8.169187, lng: 113.702040},
            zoom: 11,
            fullscreenControl: false,
            streetViewControl: false
        });

        windowTambah = new google.maps.InfoWindow({
            content: kontenTambah
        });
        windowError = new google.maps.InfoWindow({
            content: kontenError
        });

        <?php
        $i = 0;
        if (isset($peta)) {
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

                echo "var $konten = \"<div class='box box-info'>";
                echo "<div class='box-header'>";
                echo "<h3>Toko $NamaToko_</h3>";
                echo "</div>";
                echo "<div class='box-body'>";
                echo "<p>Pemilik: $NamaPemilik_</p>";
                echo "<p>No Telp: $NoTelp_</p>";
                echo "<p>Alamat: $AlamatToko_</p>";
                echo "<p>Kecamatan: $Kecamatan_</p>";
                echo "</div>";
                echo "<div class='box-footer'>";
                echo "<div class='btn-group'>";
                echo "<button type='button' class='btn btn-danger' data-toggle='modal' data-target='#modal-hapus-toko'>Hapus Toko</button>";
                echo "<button type='button' class='btn btn-warning' data-toggle='modal' data-target='#modal-ubah-toko'>Ubah Toko</button>";
                if (date("d") >= 1 && date("d") <= 5) {
                    echo "<button type='button' class='btn btn-primary' data-toggle='modal' data-target='#modal-tambah-produk'>Tambah Produk</button>";
                }
                if (date("d") >= 25 && date("d") <= 31) {
                    echo "<button type='button' class='btn btn-primary' data-toggle='modal' data-target='#modal-update-produk'>Update Penjualan</button>";
                }


                echo "</div>";
                echo "</div>";
                echo "</div>\";";

                echo "var $info = new google.maps.InfoWindow({\n";
                echo "content: $konten\n";
                echo "});\n";

                echo "$marker.addListener('click', function(){\n";
                echo "$info.open(map, $marker);\n";
                echo "windowTambah.close();";
                echo "windowError.close();";

                /**
                 * untuk hapus toko
                 */
                echo "document.getElementById('IDTokoHapus').value = $ID_;\n";

                /**
                 * untuk ubah toko
                 */
                echo "document.getElementById('IDTokoUbah').value = $ID_;\n";
                echo "document.getElementById('LatUbah').value = $Lat_;\n";
                echo "document.getElementById('LongUbah').value = $Long_;\n";
                echo "document.getElementById('NamaTokoUbah').value = \"$NamaToko_\";\n";
                echo "document.getElementById('NamaPemilikUbah').value = \"$NamaPemilik_\";\n";
                echo "document.getElementById('NoTelpUbah').value = \"$NoTelp_\";\n";
                echo "document.getElementById('AlamatUbah').value = \"$AlamatToko_\";\n";
                echo "document.getElementById('IDKecamatanUbah').value = $IDKecamatan_;\n";
                echo "document.getElementById('KeteranganUbah').value = \"$Keterangan_\";\n";

                /**
                 * untuk tambah & update produk
                 */
                echo "document.getElementById('IDTokoUpdate').value= $ID_;\n";
                echo "document.getElementById('IDTokoTambah').value= $ID_;\n";

                echo "});\n";
                $i++;
            }
        } else {

        }
        ?>

        google.maps.event.addListener(map, 'click', function (event) {
            placeMarker(event.latLng);
        });

        function placeMarker(location) {
            var lat = location.lat();
            var long = location.lng();

            if (marker) {
                marker.setPosition(location);
            } else {
                marker = new google.maps.Marker({
                    position: location,
                    map: map
                });
            }
            /**
             * pengecekan lokasi diluar jember
             */
            if ((lat > -8.573912 && lat < -7.960998) && (long > 113.307343 && long < 113.962403)) {
                windowError.close();
                windowTambah.open(map, marker);
                document.getElementById('Lat').value = lat;
                document.getElementById("Long").value = long;
            } else {
                windowTambah.close();
                windowError.open(map, marker);
            }
        }
    }

</script>
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=_USE_YOUR_OWN_API_KEY&callback=initMap">
</script>
</html>
