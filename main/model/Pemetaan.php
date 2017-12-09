<?php
/**
 * Created by PhpStorm.
 * User: Aleq
 * Date: 02/11/2017
 * Time: 0:26
 */

class Pemetaan
{
    public function __construct()
    {
    }

    public static function bacaPinToko()
    {
        $db = DB::getInstance();
        $req = $db->query("SELECT toko.IDToko, toko.NamaToko, toko.NamaPemilik, toko.AlamatToko, toko.IDKecamatan, kecamatan.Kecamatan, toko.NoTelp, toko.Keterangan, maptoko.Latitude, maptoko.Longitude FROM toko JOIN maptoko ON toko.IDToko = maptoko.IDToko JOIN kecamatan ON toko.IDKecamatan = kecamatan.IDKecamatan WHERE toko.StatusToko = 'Ada'");
        foreach ($req as $item) {
            $list[] = array(
                'ID' => $item['IDToko'],
                'NamaToko' => $item['NamaToko'],
                'NamaPemilik' => $item['NamaPemilik'],
                'AlamatToko' => $item['AlamatToko'],
                'IDKecamatan' => $item['IDKecamatan'],
                'Kecamatan' => $item['Kecamatan'],
                'NoTelp' => $item['NoTelp'],
                'Keterangan' => $item['Keterangan'],
                'Lat' => $item['Latitude'],
                'Long' => $item['Longitude'],
            );
        }
        if (isset($list)) {
            return $list;
        } else {
            return null;
        }
    }

    public static function bacaDetailToko($IDToko)
    {
        $db = DB::getInstance();
        $req = $db->query("SELECT maptoko.IDMap, maptoko.Latitude, maptoko.Longitude, toko.IDToko, toko.NamaToko, toko.NamaPemilik, toko.AlamatToko, toko.NoTelp, toko.Keterangan FROM toko JOIN maptoko ON maptoko.IDToko = toko.IDToko WHERE toko.IDToko = $IDToko;");
        foreach ($req as $item) {
            $hasil[] = array(
                'IDMap' => $item['IDMap'],
                'Lat' => $item['Latitude'],
                'Long' => $item['Longitude'],
                'IDToko' => $item['IDToko'],
                'NamaToko' => $item['NamaToko'],
                'NamaPemilik' => $item['NamaPemilik'],
                'Alamat' => $item['AlamatToko'],
                'NoTelp' => $item['NoTelp'],
                'Keterangan' => $item['Keterangan']
            );
        }
    }

    public static function tambahToko($NamaToko, $NamaPemilik, $Alamat, $IDKecamatan, $NoTelp, $Keterangan, $IDAgen, $Lat, $Long)
    {
        $db = DB::getInstance();
        $ins = $db->query("INSERT INTO toko(NamaToko, NamaPemilik, AlamatToko, IDKecamatan, NoTelp, Keterangan, StatusToko, IDAgen) VALUES ('$NamaToko', '$NamaPemilik', '$Alamat', $IDKecamatan, '$NoTelp', '$Keterangan', 'Ada', $IDAgen);");
        $IDToko = $db->query("SELECT IDToko FROM toko WHERE NamaToko='$NamaToko' AND NamaPemilik='$NamaPemilik';");
        $ID;
        foreach ($IDToko as $item) {
            $ID = $item['IDToko'];
        }
        $loc = $db->query("INSERT INTO maptoko(Latitude, Longitude, IDToko) VALUES ('$Lat', '$Long', '$ID');");
    }

    public static function ubahToko($IDToko, $NamaToko, $NamaPemilik, $Alamat, $NoTelp, $IDKecamatan, $Keterangan, $IDAgen, $Lat, $Long)
    {
        $db = DB::getInstance();
        $updateToko = $db->query("UPDATE toko SET NamaToko='$NamaToko', NamaPemilik='$NamaPemilik', AlamatToko='$Alamat', NoTelp='$NoTelp', Keterangan='$Keterangan', IDKecamatan=$IDKecamatan WHERE IDToko='$IDToko';");
        $updateLokasi = $db->query("UPDATE maptoko SET Latitude='$Lat', Longitude='$Long' WHERE IDToko='$IDToko'");
    }

    public static function dataKecamatan()
    {
        $db = DB::getInstance();
        $req = $db->query("SELECT IDKecamatan, Kecamatan FROM kecamatan;");
        foreach ($req as $item) {
            $list[] = array(
                'ID' => $item['IDKecamatan'],
                'Kecamatan' => $item['Kecamatan']
            );
        }
        return $list;
    }

    public static function hapusToko($ID)
    {
        $db = DB::getInstance();
        $db->query("UPDATE toko SET StatusToko = 'Berhenti' WHERE IDToko = $ID");
    }
}

?>