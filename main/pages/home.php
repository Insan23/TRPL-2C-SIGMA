<?php
/**
 * Created by PhpStorm.
 * User: Aleq
 * Date: 01/11/2017
 * Time: 0:21
 */
?>

<!DOCTYPE HTML>
<html>
<head>
    <title>SIGMA</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="stylesheet" href="assets/css/main.css" />
    <!-- Scripts -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery.scrolly.min.js"></script>
    <script src="assets/js/skel.min.js"></script>
    <script src="assets/js/util.js"></script>
    <script src="assets/js/main.js"></script>

</head>
<body>

<!-- Header -->
<header id="header">
    <a href="" class="logo"><strong>SIGMA</strong></a>
    <nav>
        <a href="#banner">Beranda</a>
        <a href="#section_one">Fitur</a>
        <a href="#section_four">Tentang</a>
        <a href="?controller=login&action=login">Masuk</a>
    </nav>
</header>

<!-- Banner -->
<section id="banner" style="background-image: url("assets/img/botol.png")">
    <div class="inner">
        <h2>Sistem Informasi Geografis Pemetaan Pemasaran Al-Qodiri <br>
            Perusahaan Air Minum Al-Qodiri</h2>
        <ul class="actions">
            <li><a href="#section_one" class="button alt scrolly big">Continue</a></li>
        </ul>
    </div>
</section>

<!-- Pemetaan -->
<article id="section_one" class="post style1">
    <div class="image">
        <img src="assets/img/jemberadm.jpg" alt="" data-position="75% center" />
    </div>
    <div class="content">
        <div class="inner">
            <header>
                <h2>Pemetaan Penjualan</h2>
                <p class="info">Deskripsi Singkat</p>
            </header>
            <p>
                Visualisasi pendataan mengenai persebaran penjualan produk Al Qodiri di wilayah Kabupaten jember
                dengan peta, untuk melihat wilayah - wilayah yang sudah terdistribusi maupun belum.
            </p>
            <ul class="actions">
                <li></li>
            </ul>
        </div>
        <div class="postnav">
            <a href="#" class="prev disabled"><span class="icon fa-chevron-up"></span></a>
            <a href="#section_two" class="scrolly next"><span class="icon fa-chevron-down"></span></a>
        </div>
    </div>
</article>

<!-- Penjualan -->
<article id="section_two" class="post invert style1 alt">
    <div class="image">
        <img src="assets/img/Money.jpg" alt="" data-position="10% center" />
    </div>
    <div class="content">
        <div class="inner">
            <header>
                <h2>Penjualan</h2>
                <p class="info">Deskripsi Singkat</p>
            </header>
            <p>
                Melakukan pendataan penjualan produk setiap bulan di tiap - tiap toko / distributor seluruh jember
                yang telah didata oleh agen - agen distributor. Menampilkan tabel data bulanan di tiap toko.
            </p>
            <ul class="actions">
                <li></li>
            </ul>
        </div>
        <div class="postnav">
            <a href="#section_one" class="scrolly prev"><span class="icon fa-chevron-up"></span></a>
            <a href="#section_three" class="scrolly next"><span class="icon fa-chevron-down"></span></a>
        </div>
    </div>
</article>

<!-- Laporan -->
<article id="section_three" class="post style2">
    <div class="image">
        <img src="assets/img/graph.jpg" alt="" data-position="80% center" />
    </div>
    <div class="content">
        <div class="inner">
            <header>
                <h2>Laporan Bulanan</h2>
                <p class="info">Deskripsi Singkat</p>
            </header>
            <p>
                Melaporkan penjualan produk dari tiap kecamatan dengan menampilkan grafik penjualan produk.
            </p>
            <ul class="actions">
                <li></li>
            </ul>
        </div>
        <div class="postnav">
            <a href="#section_two" class="scrolly prev"><span class="icon fa-chevron-up"></span></a>
            <a href="#section_four" class="scrolly next"><span class="icon fa-chevron-down"></span></a>
        </div>
    </div>
</article>

<!-- Four -->
<article id="section_four" class="post invert style2 alt">
    <div class="image">
        <img src="images/pic14.jpg" alt="" data-position="60% center" />
    </div>
    <div class="content">
        <div class="inner">
            <header>
                <h2>Tentang Kami</h2>
                <p class="info">
                    TRPL - 2C<br>
                    1.Alvi Maghfiranto A (152410101105) <br>
                    2.Hasina Nur Hanifa (152410101107)<br>
                    3.M.Zufarulhaq Aleq Insan (152410101129)<br>
                    4.Yulis Triani (152410101131)<br>
                    5.Abbi Nizar Muhammad (152410101150)</p>
            </header>
            <p></p>
            <ul class="actions">
                <li><a href="generic.html" class="button alt">Read More</a></li>
            </ul>
        </div>
        <div class="postnav">
            <a href="#section_three" class="scrolly prev"><span class="icon fa-chevron-up"></span></a>
            <a href="#" class="next disabled"><span class="icon fa-chevron-down"></span></a>
        </div>
    </div>
</article>

<!-- Footer -->
<footer id="footer">
    <ul class="icons">
        <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
        <li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
        <li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
    </ul>
    <div class="copyright">
        Copyright &copy; SIGMA - TRPL 2C | PSSI.
    </div>
</footer>
</body>
</html>
