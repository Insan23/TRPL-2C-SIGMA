<?php
/**
 * Created by PhpStorm.
 * User: Aleq
 * Date: 22/10/2017
 * Time: 15:29
 *
 */
/*
 * Google Maps API Key (SIGMA)
AIzaSyBDaYCYZp8hRE-mMn1LO-FMwKykR4UCjLQ

Google Maps Geocoding API Key
AIzaSyCb9WDbufMGSEGz5PGq8T4DHPqa08lP-hc
 */


function info($key = "") {
    $webinfo = [
        "nama" => "SIGMA",
        "nama_lengkap" => "Sistem Informasi Geografis Pemetaan Pemasaran Al Qodiri",
        "maps" => [
            "maps" => "AIzaSyBDaYCYZp8hRE-mMn1LO-FMwKykR4UCjLQ",
            "maps_geocoding" => "AIzaSyCb9WDbufMGSEGz5PGq8T4DHPqa08lP-hc"
        ],
        "" => ""
    ];
    return isset($webinfo[$key]) ? $webinfo[$key] : null;
}
?>