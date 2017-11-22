<?php
/**
 * Created by PhpStorm.
 * User: Aleq
 * Date: 09/11/2017
 * Time: 12:43
 */

session_start();
if (session_destroy()){
    header("location: index.php");
}
?>