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

    public static function daftarPerBulan()
    {
        $db = DB::getInstance();
        $req = $db->query("SELECT (SUM(s.200ml_diterima) + SUM(s.600ml_diterima) + SUM(s.1500ml_diterima)) as Diterima, (SUM(s.200ml_terjual) + SUM(s.600ml_terjual) + SUM(s.1500ml_terjual)) as Terjual, k.Kecamatan, k.IDKecamatan, MONTH(TanggalDiterima) FROM toko t JOIN stok s ON t.IDToko = s.IDToko JOIN kecamatan k ON t.IDKecamatan = k.IDKecamatan GROUP BY k.Kecamatan;");
        foreach ($req as $item) {
            $hasil[] = array(
                'Diterima' => $item['Diterima'],
                'Terjual' => $item['Terjual'],
                'Kecamatan' => $item['Kecamatan'],
                'IDKecamatan' => $item['IDKecamatan']
            );
        }
        if (isset($hasil))
            return $hasil;
        else return null;
    }

    public static function terdistribusiPerTahun($kecamatan)
    {
        $db = DB::getInstance();
        $req = $db->query("SELECT SUM(s.200ml_diterima) as p200, SUM(s.600ml_diterima) as p600, SUM(s.1500ml_diterima) as p1500, MONTH(s.TanggalDiterima) as bulan FROM stok s JOIN toko t ON s.IDToko = t.IDToko WHERE t.IDKecamatan = $kecamatan GROUP BY MONTH(s.TanggalDiterima);");
        foreach ($req as $item) {
            $hasil [] = array(
                'dis200' => $item['p200'],
                'dis600' => $item['p600'],
                'dis1500' => $item['p1500'],
                'bulan' => $item['bulan']
            );
        }
        return $hasil;
    }

    public static function terjualPerTahun($kecamatan)
    {
        $db = DB::getInstance();
        $req = $db->query("SELECT SUM(s.200ml_terjual) as p200, SUM(s.600ml_terjual) as p600, SUM(s.1500ml_terjual) as p1500, MONTH(s.TanggalDiterima) as bulan FROM stok s JOIN toko t ON s.IDToko = t.IDToko WHERE t.IDKecamatan = $kecamatan GROUP BY MONTH(s.TanggalDiterima);");
        foreach ($req as $item) {
            $hasil [] = array(
                'jual200' => $item['p200'],
                'jual600' => $item['p600'],
                'jual1500' => $item['p1500'],
                'bulan' => $item['bulan']
            );
        }
        return $hasil;
    }

    public static function listToko($IDKecamatan)
    {
        $db = DB::getInstance();
        $req = $db->query("SELECT t.IDToko, t.NamaToko, (SUM(s.200ml_Diterima) + SUM(s.600ml_Diterima) + SUM(s.1500ml_Diterima)) as Diterima, (SUM(s.200ml_Terjual) + SUM(s.600ml_Terjual) + SUM(s.1500ml_Terjual)) as Terjual FROM toko t JOIN stok s ON t.IDToko = s.IDToko WHERE t.IDKecamatan = $IDKecamatan GROUP BY t.NamaToko;");
        foreach ($req as $item) {
            $hasil[] = array(
                'IDToko' => $item['IDToko'],
                'NamaToko' => $item['NamaToko'],
                'Diterima' => $item['Diterima'],
                'Terjual' => $item['Terjual']
            );
        }
        return $hasil;
    }

}