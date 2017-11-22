<?php 
include("conn.php");
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        $lat = $_GET['lintang'];
        $long = $_GET['bujur'];
        $alamat = $_GET['alamat'];
        $namaPemilik = $_GET['nama-pemilik'];
        $namaToko = $_GET['nama-toko'];
        $deskripsi = $_GET['deskripsi'];

        $sql = "INSERT INTO db_name VALUES('$lat', '$long', '$namaPemilik', '$namaToko', '$deskripsi');"
    }
 ?>
