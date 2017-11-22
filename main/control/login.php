<?php

/**
 * Created by PhpStorm.
 * User: Aleq
 * Date: 01/11/2017
 * Time: 0:26
 */
class ControlLogin
{
    public function login()
    {
        $error = '';
        require_once('main/pages/login.php');
    }

    public function error()
    {
        /**
         * halaman error
         */
        //require_once ('');
    }

    public function authentication()
    {
        $error = '';
        if (!isset($_GET['username'])) {
            $error = 'username atau password harus diisi';
            require_once('main/pages/login.php');
        }
        if (Login::login($_GET['username'], $_GET['password']) == 'no-user') {
            $error = 'username atau password tidak valid';
            require_once('main/pages/login.php');
        } else if (Login::login($_GET['username'], $_GET['password']) == 'KoorAgen') {
            $_SESSION['username'] = $_GET['username'];
            $_SESSION['password'] = $_GET['password'];
            header("location: index.php?controller=home&action=koAgenHome");
        } else if (Login::login($_GET['username'], $_GET['password']) == 'Manajer') {
            $_SESSION['username'] = $_GET['username'];
            $_SESSION['password'] = $_GET['password'];
            header("location: index.php?controller=home&action=manajerHome");
        }
    }
}