<?php
/**
 * Created by PhpStorm.
 * User: sgas
 * Date: 19.02.14
 * Time: 08:49
 */

include('../dbconnection.php'); //load config

/**Session starten*/
@session_start ();

/** Errormeldungen ausschalten*/
//error_reporting(0);

$userrole = mysql_fetch_object(mysql_query("Select * from US_user where US_username='".$_SESSION["activeuser"]."'"));


//Überprüfen ob User eingeloggt ist
if ($_SESSION["login"] != 1)
{
    include("../index.php");
    exit;
}
if ($userrole->US_role != 1)
{
    include("../show_all_tasks.php");
    exit;
}

?>