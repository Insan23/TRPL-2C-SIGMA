<?php
/**
 * Created by PhpStorm.
 * User: Aleq
 * Date: 01/11/2017
 * Time: 0:25
 */
class ControlLaporan {
    public function manajerLaporan() {

        require_once ('main/pages/manajer-dashboard-laporan.php');
    }

    public function manajerLaporanGrafik() {
        require_once ('main/pages/manajer-dashboard-laporan_grafik.php');
    }

    public function manajerLaporanRekomendasi() {
        require_once ('main/pages/manajer-dashboard-laporan_rekomendasi.php');
    }
}
?>