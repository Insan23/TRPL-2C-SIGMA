<?php
/**
 * Created by PhpStorm.
 * User: Aleq
 * Date: 02/11/2017
 * Time: 0:26
 */

class Laporan
{
    public function __construct()
    {

    }

    public static function terdistribusiPerTahun($kecamatan)
    {
        $db = DB::getInstance();
        $req = $db->query("SELECT COUNT(s.200ml_terjual) as p200, COUNT(s.600ml_terjual) as p600, COUNT(s.1500ml_terjual) as p1500, MONTH(s.TanggalTerjual) as bulan FROM stok s JOIN toko t ON t.IDToko = s.IDToko WHERE t.IDKecamatan = $kecamatan AND YEAR(s.TanggalTerjual) = YEAR(NOW()) GROUP BY s.TanggalTerjual;");
        foreach ($req as $item) {
            $hasil [] = array(
                'dis200' => $item['p200'],
                'dis600' => $item['p600'],
                'dis1500' => $item['p1500'],
                'bulan' => $item['bulan']
            );
            return $hasil;
        }
    }

    public static function terjualPerTahun($kecamatan)
    {
        $db = DB::getInstance();
        $req = $db->query("SELECT COUNT(s.200ml_diterima) as p200, COUNT(s.600ml_diterima) as p600, COUNT(s.1500ml_diterima) as p1500, MONTH(s.TanggalDiterima) as bulan FROM stok s JOIN toko t ON t.IDToko = s.IDToko WHERE t.IDKecamatan = $kecamatan AND YEAR(s.TanggalTerjual) = YEAR(NOW()) GROUP BY s.TanggalDiterima;");
        foreach ($req as $item) {
            $hasil [] = array(
                'jual200' => $item['p200'],
                'jual600' => $item['p600'],
                'jual1500' => $item['p1500'],
                'bulan' => $item['bulan']
            );
            return $hasil;
        }
    }

}