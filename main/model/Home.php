<?php
/**
 * Created by PhpStorm.
 * User: Aleq
 * Date: 02/11/2017
 * Time: 0:25
 */

class Home
{

    public function __construct()
    {

    }

    public static function DataDiriAgen($Username)
    {
        $db = DB::getInstance();
        $req = $db->query("SELECT agen.IDAgen, agen.NamaAgen, login.Level FROM agen JOIN login ON agen.IDLOgin = login.IDLogin WHERE login.username = '$Username'");
        foreach ($req->fetchAll() as $out) {
            $hasil = array(
                'ID' => $out['IDAgen'],
                'Nama' => $out['NamaAgen'],
                'Level' => $out['Level']
            );
        }
        return $hasil;
    }

    public static function DataDiriManajer($Username)
    {
        $db = DB::getInstance();
        $req = $db->query("SELECT manajer.IDManajer, manajer.Nama, login.Level FROM manajer JOIN login ON manajer.IDLOgin = login.IDLogin WHERE login.username = '$Username'");
        foreach ($req->fetchAll() as $out) {
            $hasil = array(
                'ID' => $out['IDManajer'],
                'Nama' => $out['Nama'],
                'Level' => $out['Level']
            );
        }
        return $hasil;
    }

    public static function HitungJumlahToko()
    {
        $db = DB::getInstance();
        $req = $db->query("SELECT COUNT(*) as jumlah FROM toko");
        foreach ($req as $item) {
            $hasil[] = $item['jumlah'];
        }
        return $hasil;
    }

    public static function HitungProdukDiterima()
    {
        $db = DB::getInstance();
        $req = $db->query("SELECT SUM(200ml_Diterima) as d200, SUM(600ml_Diterima) as d600, SUM(1500ml_Diterima) as d1500 FROM stok WHERE MONTH(TanggalDiterima) = MONTH(NOW());");
        foreach ($req as $item) {
            $hasil[] = array(
                'diterima200' => $item['d200'],
                'diterima600' => $item['d600'],
                'diterima1500' => $item['d1500'],

            );
        }
        return $hasil;
    }

    public static function HitungProdukTerjual()
    {
        $db = DB::getInstance();
        $req = $db->query("SELECT SUM(200ml_Terjual) as t200, SUM(600ml_Terjual) as t600, SUM(1500ml_Terjual) as t1500 FROM stok WHERE MONTH(TanggalTerjual) = MONTH(NOW());");
        foreach ($req as $item) {
            $hasil[] = array(
                'terjual200' => $item['t200'],
                'terjual600' => $item['t600'],
                'terjual1500' => $item['t1500'],

            );
        }
        return $hasil;
    }
}

?>