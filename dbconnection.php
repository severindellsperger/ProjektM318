<?php
/**
 * Created by PhpStorm.
 * User: Stefan
 * Date: 05.02.14
 * Time: 11:26
 */

// Verbindung mit Datenbank aufbauen
// Falls Datenbank nicht erreichbar ist gibt er eine Fehlermeldung aus

$mysql_hostname = "88.84.20.245";
$mysql_user = "test";
$mysql_password = "test";
$mysql_database = "2014_12";
$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password)
or die("Connection Error");
mysql_select_db($mysql_database, $bd) or die("Selection Error");
?>