<?php
/**
 * Created by PhpStorm.
 * User: Stefan
 * Date: 01.02.14
 * Time: 15:59
 */

    include('../checkuser.php');
    require_once '../dbconnection.php';


    // Task der ausgewählt ist löschen

    if (isset($_POST['delete']))
    {
        mysql_query("DELETE FROM TA_task WHERE TA_id_task='".$_POST['id_task'] ."'" );
        echo ($_POST['id_task']);
    }


     // Zu Show_all_tasks.php zurückgehen

    header("location:../show_all_tasks.php");
?>