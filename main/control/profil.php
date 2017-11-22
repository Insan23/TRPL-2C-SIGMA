<?php

/**
 * Created by PhpStorm.
 * User: Aleq
 * Date: 01/11/2017
 * Time: 0:26
 */
class ControlProfil
{
    public function koAgenProfil()
    {
        $dataDiri = Profil::profilAgen();
        $kecamatan = Pemetaan::dataKecamatan();
        require_once('main/pages/ko_agen-profil.php');
    }

    public function manajerProfil()
    {
        $dataDiri = Profil::profilManager();
        require_once('main/pages/manajer-profil.php');
    }

    public function ubahAgen()
    {
        Profil::ubahDataAgen(
            $_GET['Nama'],
            $_GET['JenisKelamin'],
            $_GET['TanggalLahir'],
            $_GET['Alamat'],
            $_GET['NoTelp'],
            $_SESSION['ID'],
            $_GET['Username'],
            $_GET['Password']
        );
        require_once ('main/pages/ko_agen-profil');
    }

    public function ubahManajer()
    {
        Profil::ubahDataManajer();
        require_once ('main/pages/manajer-profil');
    }
}

?>