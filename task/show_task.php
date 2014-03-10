<?php

include('../checkuser.php');
require_once('../dbconnection.php');

$task = mysql_query("Select * from TA_task WHERE TA_id_task='".$_POST['id_task'] ."'");
$db = mysql_fetch_object($task);
$runuser = mysql_fetch_object(mysql_query("Select * from US_user where US_id_user=$db->TA_fk_TM_id_team_member"));

?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="de" lang="de">
    <head>
        <title>Aufgabenverwaltung</title>

        <link rel="stylesheet" href="/css/bootstrap.min.css">
        <link rel="stylesheet" href="/css/bootstrap-theme.min.css">
        <script src="/js/bootstrap.min.js"></script>
    </head>
    <body>

    <h1 style='margin-bottom: 0; margin-top: 0; margin-left: auto; margin-right: auto; width: 40%;'><?=$db->title;?></h1>

    <table class='table table-striped' style='width: 30%; margin-bottom: 0px; margin: 0 auto;'>

        <tr>
            <td><b>Creator: </b><?=$runuser->US_username;?></td>
        </tr>
        <tr>
            <td><b>Date: </b><?=$db->TA_date;?></td>
        </tr>
        <tr>
            <td><b> Working Hours: </b><?=$db->TA_worktime;?></td>
        </tr>
        <tr>
            <td><b>Description: <br/></b><?= $db->TA_description;?></td>
        </tr>
        <tr>
            <td><form style='margin-left: 450px; margin-top: 10px;' action='../show_all_tasks.php' method='link' style='width: 300px;'><button type=submit name=show_all_tasks class='btn btn-primary' >Go Back</button></button></form></td>
        </tr>
    </table>


    </body>
</html>