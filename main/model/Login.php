<?php

/**
 * Created by PhpStorm.
 * User: Aleq
 * Date: 01/11/2017
 * Time: 0:30
 */
class Login
{

    function __construct()
    {

    }

    public static function login($username, $password)
    {
        $db = DB::getInstance();
        $req = $db->prepare('SELECT * FROM login WHERE Username= :username AND Password= :password'); // :variabel lokal

        $req->execute(array('username' => $username, 'password' => $password)); //variabel lokal diisi dari constructor
        $auth = $req->fetch();
        if (count($auth) > 1) {
            return $auth['Level'];//return dari DB
        } else {
            return "no-user";
        }
        foreach ($req->fetchAll() as $out) {
            $hasil[] = array(
                'username' => $out['username'],
                'password' => $out['password']); //dari database
        }
        return $hasil;
    }

    public static function findUser($username)
    {
        $db = DB::getInstance();
        $req = $db->prepare('SELECT username FROM user WHERE username= :username'); // :variabel lokal

        $req->execute(array('username' => $username)); //variabel lokal diisi dari constructor
        $auth = $req->fetch();
        if (count($auth) > 1) {
            return $auth['idLevel'];//return dari DB
        } else {
            return "no-user";
        }
        foreach ($req->fetchAll() as $out) {
            $hasil[] = array(
                'username' => $out['username'],
                'pasword' => $out['password']); //dari database
        }
        return $hasil;
    }
}

?>