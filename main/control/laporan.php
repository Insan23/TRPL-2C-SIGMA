<?php
/**
 * Created by PhpStorm.
 * User: Aleq
 * Date: 01/11/2017
 * Time: 0:25
 */
class ControlLaporan {
    public function manajerLaporan() {
        $listKecamatan = Laporan::daftarPerBulan();
        require_once ('main/pages/manajer-dashboard-laporan.php');
    }

    public function manajerLaporanGrafik() {
        $kecamatan = Pemetaan::bacaSatuKecamatan($_GET['IDKecamatan']);
        $distribusiPerTahun = Laporan::terdistribusiPerTahun($_GET['IDKecamatan']);
        $terjualPerTahun = Laporan::terjualPerTahun($_GET['IDKecamatan']);
        require_once ('main/pages/manajer-dashboard-laporan_grafik.php');
    }

    public function manajerLaporanRekomendasi() {
        require_once ('main/pages/manajer-dashboard-laporan_rekomendasi.php');
    }
}
?>