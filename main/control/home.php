<?php
/**
 * Created by PhpStorm.
 * User: Aleq
 * Date: 31/10/2017
 * Time: 21:42
 */

class ControlHome {

    public function home() {
        $error = '';
        require_once('main/pages/home.php');
    }

    public function koAgenHome() {
        $list = HOME::DataDiriAgen($_SESSION['username']);
        $jumlah = HOME::HitungJumlahToko();
        $_SESSION['ID'] = $list['ID'];
        $_SESSION['Nama'] = $list['Nama'];
        $_SESSION['Level'] = $list['Level'];
        require_once('main/pages/ko_agen-dashboard-home.php');
    }

    public function manajerHome() {
        $list = HOME::DataDiriManajer($_SESSION['username']);
        $_SESSION['ID'] = $list['ID'];
        $_SESSION['Nama'] = $list['Nama'];
        $_SESSION['Level'] = $list['Level'];
        require_once ('main/pages/manajer-dashboard-home.php');
    }
}

?>