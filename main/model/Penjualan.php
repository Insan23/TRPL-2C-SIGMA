<?php
/**
 * Created by PhpStorm.
 * User: Aleq
 * Date: 02/11/2017
 * Time: 0:27
 */

class Penjualan
{
    public function __construct()
    {

    }

    public static function tambahProduk($_200ml, $_600ml, $_1500ml, $tanggal, $idtoko)
    {
        $db = DB::getInstance();
        $req = $db->query("INSERT INTO stok(200ml_Diterima, 600ml_Diterima, 1500ml_Diterima, TanggalDiterima, IDToko) VALUES ($_200ml, $_600ml, $_1500ml, '$tanggal', $idtoko)");
        return $req;
    }

    public static function updateProduk($_200ml, $_600ml, $_1500ml, $tanggal, $idtoko, $idstok)
    {
        $db = DB::getInstance();
        $req = $db->query("UPDATE stok SET 200ml_Terjual=$_200ml, 600ml_Terjual=$_600ml, 1500ml_Terjual=$_1500ml, TanggalTerjual='$tanggal' WHERE MONTH(TanggalDiterima) = MONTH(NOW()) AND IDToko = $idtoko");
        return $req;
    }

    public static function lihatProdukPerBulan()
    {
        $db = DB::getInstance();
        $req = $db->query("SELECT IDStok, 200ml_Diterima, 600ml_Diterima, 1500ml_Diterima, 200ml_Terjual, 600ml_Terjual, 1500ml_Terjual, TanggalDiterima, TanggalTerjual, IDToko FROM stok WHERE YEAR(TanggalDiterima) = YEAR(NOW());");
        foreach ($req as $item) {
            $list[] = array(
                'IDStok' => $item['IDStok'],
                'Diterima200' => $item['200ml_Diterima'],
                'Diterima600' => $item['600ml_Diterima'],
                'Diterima1500' => $item['1500ml_Diterima'],
                'Terjual200' => $item['200ml_Terjual'],
                'Terjual600' => $item['600ml_Terjual'],
                'Terjual1500' => $item['1500ml_Terjual'],
                'TanggalDiterima' => $item['TanggalDiterima'],
                'TanggalTerjual' => $item['TanggalTerjual'],
                'IDToko' => $item['IDToko']
            );
            return $list;
        }
    }

    public static function lihatTokoPadaKec()
    {
        $db = DB::getInstance();
        $req = $db->query("SELECT DISTINCT Kecamatan FROM kecamatan k JOIN toko t ON t.IDKecamatan = k.IDKecamatan WHERE t.StatusToko = 'Ada' ORDER BY Kecamatan");
        foreach ($req as $item) {
            $list[] = array(
                'Kecamatan' => $item['Kecamatan']
            );
        }
        return $list;
    }

    public static function lihatTokoPerKec()
    {
        $db = DB::getInstance();
        $req = $db->query("SELECT t.IDToko, t.NamaToko, t.NamaPemilik, t.AlamatToko, t.IDKecamatan, k.Kecamatan, t.NoTelp, t.Keterangan FROM toko t JOIN kecamatan k ON k.IDKecamatan = t.IDKecamatan ORDER BY t.IDKecamatan");
        foreach ($req as $item) {
            $list[] = array(
                'IDToko' => $item['IDToko'],
                'NamaToko' => $item['NamaToko'],
                'AlamatToko' => $item['AlamatToko'],
                'Kecamatan' => $item['Kecamatan'],
                'Keterangan' => $item['Keterangan']
            );
        }
        return $list;
    }
}

