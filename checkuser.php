<?php
/**
 * Created by PhpStorm.
 * User: Stefan
 * Date: 05.02.14
 * Time: 14:23
 */

/**Session starten*/
@session_start ();

/** Errormeldungen ausschalten*/
error_reporting(0);


/**Überprüfen ob User eingeloggt ist*/
    if ($_SESSION["login"] != 1)
    {
       include("index.php");
       exit;
    }
?>