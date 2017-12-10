<?php
/**
 * Created by PhpStorm.
 * User: Aleq
 * Date: 29/10/2017
 * Time: 13:45
 */
    function call($controller, $action) {
        require_once ('main/control/'.$controller.'.php');

        switch ($controller) {
            case 'login':
                require_once ('main/model/Login.php');
                $controller = new ControlLogin();
                break;
            case 'home':
                require_once ('main/model/Home.php');
                $controller = new ControlHome();
                break;
            case 'penjualan':
                require_once ('main/model/Penjualan.php');
                require_once ('main/model/Pemetaan.php');
                $controller = new ControlPenjualan();
                break;
            case 'pemetaan':
                require_once ('main/model/Pemetaan.php');
                require_once ('main/model/Penjualan.php');
                $controller = new ControlPemetaan();
                break;
            case 'profil':
                require_once ('main/model/Pemetaan.php');
                require_once ('main/model/Profil.php');
                $controller = new ControlProfil();
                break;
            case 'laporan':
                require_once ('main/model/Pemetaan.php');
                require_once ('main/model/Laporan.php');
                $controller = new ControlLaporan();
                break;

        }
        $controller->{$action}();
    }

    $controllers = array(
        'login' => ['login', 'error', 'authentication'],
        'home' => ['home', 'koAgenHome', 'manajerHome'],
        'penjualan' => ['koAgenPenjualan', 'koAgenPenjualanToko', 'manajerPenjualan', 'manajerPenjualanToko', 'tambahProduk', 'updateProduk'],
        'pemetaan' => ['koAgenPemetaan', 'manajerPemetaan', 'tambahToko', 'ubahToko', 'detailToko', 'hapusToko'],
        'profil' => ['koAgenProfil', 'manajerProfil', 'ubahAgen', 'ubahManajer'],
        'laporan' => ['manajerLaporan', 'manajerLaporanGrafik', 'manajerLaporanRekomendasi']
    );
    if (array_key_exists($controller, $controllers)) {
        if (in_array($action, $controllers[$controller])) {
            call($controller,$action);
        } else {
            call($controller,'error');
        }

    } else {
        call($controller,'error');
    }

?>