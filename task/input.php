<?php

include('../checkuser.php');
require_once('../dbconnection.php');

function input_task()
{
    $date = $_GET["date"];
    $worktime = $_GET["worktime"];
    $user = $_GET["username"];
    $title = $_GET["title"];
    $text = $_GET["text"];

    //Username to id_user
    $runuser = mysql_fetch_object(mysql_query("SELECT US_id_user FROM US_user where US_username='$user'"));

    //Write task
    $sql = "INSERT INTO TA_task (TA_title, TA_date, TA_worktime, TA_fk_TM_id_team_member, TA_description) VALUES ('$title','$date', '$worktime', '$runuser->US_id_user', '$text')";
    $result=mysql_query($sql) or die (mysql_error());

}
input_task()

?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="de" lang="de">
    <head>
        <title>Aufgabenverwaltung</title>

        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/bootstrap-theme.min.css">
        <script src="../js/bootstrap.min.js"></script>
    </head>
    <body>

        <h1>Created task successfully!</h1>

        <p><b>Titel:</b><?php echo $_GET["title"]; ?></p>
        <p><b>Date:</b><?php echo $_GET["date"]; ?></p>
        <p><b>Who?:</b><?php echo $_GET["username"]; ?></p>
        <p><b>Working Hours:</b><?php echo $_GET["worktime"]; ?></p>
        <p><b>Description:</b><br/><?php echo $_GET["text"]; ?></p>

        <p></p>

        <form action='make_task.php' method='link'><button type='submit' name='create_task_again' class='btn btn-primary' >Create a new Task</button></form>
        <form action='../show_all_tasks.php' method='link'><button type='submit' name='show_tasks' class='btn btn-primary' >Show all Tasks</form>

    </body>
</html>