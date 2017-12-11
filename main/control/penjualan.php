<?php
/**
 * Created by PhpStorm.
 * User: Aleq
 * Date: 01/11/2017
 * Time: 0:25
 */

class ControlPenjualan {

    public function koAgenPenjualan() {
        $kecamatan = Penjualan::lihatTokoPadaKec();
        $toko = Penjualan::lihatTokoPerKec();
        require_once ('main/pages/ko_agen-dashboard-penjualan.php');
    }

    public function koAgenPenjualanToko() {
        $toko = Penjualan::lihatProdukPerBulan($_GET['IDToko']);
        $IDToko = $_GET['IDToko'];
        $namaToko = Pemetaan::bacaSatuToko($_GET['IDToko']);
        require_once ('main/pages/ko_agen-dashboard-penjualan_toko.php');
    }

    public function manajerPenjualan() {
        $kecamatan = Penjualan::lihatTokoPadaKec();
        $toko = Penjualan::lihatTokoPerKec();
        require_once ('main/pages/manajer-dashboard-penjualan.php');
    }

    public function manajerPenjualanToko() {
        $toko = Penjualan::lihatProdukPerBulan($_GET['IDToko']);
        require_once ('main/pages/manajer-dashboard-penjualan_toko.php');
    }

    public function tambahProduk()
    {
//        print_r($_GET);
        Penjualan::tambahProduk($_GET['_200ml'], $_GET['_600ml'], $_GET['_1500ml'], $_GET['Tanggal'], $_GET['IDTokoTambah']);
        header("location: index.php?controller=pemetaan&action=koAgenPemetaan");
    }

    public function updateProduk()
    {
        Penjualan::updateProduk($_GET['_200ml'], $_GET['_600ml'], $_GET['_1500ml'], $_GET['Tanggal'], $_GET['IDTokoUpdate']);
        header("location: index.php?controller=pemetaan&action=koAgenPemetaan");
    }
}
?>