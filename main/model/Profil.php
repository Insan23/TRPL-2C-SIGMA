<?php
/**
 * Created by PhpStorm.
 * User: Aleq
 * Date: 02/11/2017
 * Time: 0:29
 */

class Profil
{
    public function __construct()
    {
    }

//    public static function dataDiri()
//    {
//        $db = DB::getInstance();
//        $username = $_SESSION['username'];
//        $req = $db->query("SELECT k.IDAgen, k.NamaAgen, k.JenisKelamin, k.TanggalLahir, k.Alamat, kk.Kecamatan, k.NoTelp, l.IDLogin, l.Username, l.Password FROM agen k JOIN login l ON l.IDLogin = k.IDLogin JOIN kecamatan kk ON k.Kecamatan = kk.IDKecamatan WHERE l.Username = '$username';");
//        foreach ($req as $item) {
//            $hasil[] = array(
//                $item['IDAgen'],
//                $item['NamaAgen'],
//                $item['JenisKelamin'],
//                $item['TanggalLahir'],
//                $item['Alamat'],
//                $item['Kecamatan'],
//                $item['NoTelp'],
//                $item['IDLogin'],
//                $item['Username'],
//                $item['Password']);
//        }
//        return $hasil;
//    }

    public static function bacaKecamatan()
    {
        $db = DB::getInstance();
        $req = $db->query("SELECT IDKecamatan, Kecamatan FROM kecamatan;");
        foreach ($req as $item) {
            $hasil[] = array(
                $item['IDKecamatan'],
                $item['Kecamatan']
            );
        }
        return $hasil;
    }

    public static function profilAgen($IDAgen)
    {
        $db = DB::getInstance();
        $req = $db->query("SELECT k.IDAgen, k.NamaAgen, k.JenisKelamin, k.TanggalLahir, k.Alamat, k.IDKecamatan, k.NoTelp, l.IDLogin, l.Username, l.Password FROM agen k JOIN login l ON l.IDLogin = k.IDLogin JOIN kecamatan kk ON k.IDKecamatan = kk.IDKecamatan WHERE k.IDAgen='$IDAgen'");
        foreach ($req as $item) {
            $hasil = array(
                'IDAgen' => $item['IDAgen'],
                'NamaAgen' => $item['NamaAgen'],
                'JenisKelamin' => $item['JenisKelamin'],
                'TanggalLahir' => $item['TanggalLahir'],
                'Alamat' => $item['Alamat'],
                'IDKecamatan' => $item['IDKecamatan'],
                'NoTelp' => $item['NoTelp'],
                'IDLogin' => $item['IDLogin'],
                'Username' => $item['Username'],
                'Password' => $item['Password']
            );
        }
        return $hasil;
    }

    public static function profilManager($ID)
    {
        $db = DB::getInstance();
        $req = $db->query("SELECT m.IDManajer, m.Nama, m.JenisKelamin, m.TanggalLahir, m.NoTelp, l.IDLogin, l.Username, l.Password FROM manajer m JOIN login l ON l.IDLogin = m.IDLogin WHERE m.IDManajer = $ID;");
        foreach ($req as $item) {
            $hasil = array(
                'IDManajer' => $item['IDManajer'],
                'Nama' => $item['Nama'],
                'JenisKelamin' => $item['JenisKelamin'],
                'TanggalLahir' => $item['TanggalLahir'],
                'NoTelp' => $item['NoTelp'],
                'IDLogin' => $item['IDLogin'],
                'Username' => $item['Username'],
                'Password' => $item['Password']
            );
        }
        return $hasil;
    }

    public static function ubahDataManajer($nama, $jk, $tgl, $notelp, $idmanajer, $user, $pass)
    {
        $db = DB::getInstance();
        $req1 = $db->query("UPDATE manajer SET Nama = '$nama', JenisKelamin = '$jk', TanggalLahir = '$tgl', NoTelp = '$notelp' WHERE IDManajer = $idmanajer;");
        $req2 = $db->query("UPDATE login SET Username = '$user', Password = '$pass' WHERE IDLogin = (SELECT IDLogin FROM login l JOIN manajer m ON l.IDLogin = m.IDLogin WHERE m.IDManajer = $idmanajer);");
    }

    public static function ubahDataAgen($NamaAgen, $JenisKelamin, $TanggalLahir, $Alamat, $NoTelp, $ID, $Username, $Password)
    {
        $db = DB::getInstance();
        $db->query("UPDATE agen SET NamaAgen = '$NamaAgen', JenisKelamin = '$JenisKelamin', TanggalLahir = '$TanggalLahir', Alamat = '$Alamat', NoTelp = '$NoTelp'; WHERE IDAgen = $ID");
        $IDLogin = $db->query("SELECT l.IDLogin FROM login l JOIN agen m ON l.IDLogin = m.IDLogin WHERE m.IDAgen = $ID");
        $IDAgen;
        foreach ($IDLogin as $item) {
            $IDAgen = $item['IDLogin'];
        }
        $db->query("UPDATE login SET Username = '$Username', Password = '$Password' WHERE IDLogin = $IDAgen");
    }
}

?>