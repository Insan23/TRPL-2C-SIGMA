<?php

/**
 * Created by PhpStorm.
 * User: Aleq
 * Date: 01/11/2017
 * Time: 0:25
 */
class ControlPemetaan
{

    public function koAgenPemetaan()
    {
        $peta = Pemetaan::bacaPinToko();
        $kecamatan = Pemetaan::dataKecamatan();
        require_once('main/pages/ko_agen-dashboard-pemetaan.php');
    }

    public function manajerPemetaan()
    {
        $peta = Pemetaan::bacaPinToko();
        require_once('main/pages/manajer-dashboard-pemetaan.php');
    }

    public function tambahToko()
    {
        Pemetaan::tambahToko(
            $_GET['NamaToko'],
            $_GET['NamaPemilik'],
            $_GET['Alamat'],
            $_GET['IDKecamatan'],
            $_GET['NoTelp'],
            $_GET['Keterangan'],
            $_SESSION['ID'],
            $_GET['Lat'],
            $_GET['Long']
        );
        $_GET['NamaToko'] = "";
        $_GET['NamaPemilik'] = "";
        $_GET['Alamat'] = "";
        $_GET['IDKecamatan'] = "";
        $_GET['NoTelp'] = "";
        $_GET['Keterangan'] = "";
        $_SESSION['ID'] = "";
        $_GET['Lat'] = "";
        $_GET['Long'] = "";
//        require_once('main/pages/ko_agen-dashboard-pemetaan.php');
        header("location: index.php?controller=pemetaan&action=koAgenPemetaan");
    }

    public function ubahToko()
    {
        Pemetaan::ubahToko(
            $_GET['IDTokoUbah'],
            $_GET['NamaTokoUbah'],
            $_GET['NamaPemilikUbah'],
            $_GET['AlamatUbah'],
            $_GET['NoTelpUbah'],
            $_GET['IDKecamatanUbah'],
            $_GET['KeteranganUbah'],
            $_SESSION['ID'],
            $_GET['LatUbah'],
            $_GET['LongUbah']
        );
//        require_once('main/pages/ko_agen-dashboard-pemetaan.php');
        header("location: index.php?controller=pemetaan&action=koAgenPemetaan");
    }

    public function detailToko()
    {
        $toko = Pemetaan::bacaDetailToko($_GET['IDToko']);
    }

    public function hapusToko()
    {
        Pemetaan::hapusToko($_GET['IDTokoHapus']);
        header("location: index.php?controller=pemetaan&action=koAgenPemetaan");
    }

}

?>