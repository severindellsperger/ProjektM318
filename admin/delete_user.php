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
        mysql_query("DELETE FROM user WHERE id_user='".$_POST['id_user'] ."'" );
        echo ($_POST['id_user']);
    }


     // Zu Show_all_tasks.php zurückgehen

    header("location:administration_admin.php");
?>