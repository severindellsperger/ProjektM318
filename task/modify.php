<?php
include('../checkuser.php');
require_once '../dbconnection.php';

function modify_task()
{
    // Infos sent from Form
    $id_task = $_GET["id_task"];
    $title = $_GET["title"];
    $user = $_GET["user"];
    $date = $_GET["date"];
    $wt = $_GET["wt"];
    $text = $_GET["description"];

    //Username to id_user
    $runuser = mysql_fetch_object(mysql_query("SELECT US_id_user FROM US_user where US_username='$user'"));

    //Update Database
    $sql = "UPDATE TA_task SET TA_title='$title', TA_fk_TM_id_team_member='$runuser->US_id_user', TA_date='$date', TA_worktime='$wt', TA_description='$text' WHERE TA_id_task='$id_task'";
    $result=mysql_query($sql) or die (mysql_error());
}
modify_task();
?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="de" lang="de">
    <head>
        <title>Aufgabenverwaltung</title>

        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/bootstrap-theme.min.css">
        <script src="../js/bootstrap.min.js"></script>
    </head>
<body>
    <div style="margin: 0  auto;width: 300px">
        <h1 >Modify Task successfully</h1>

        <p><b>Titel:</b><?php echo $_GET["title"]; ?></p>
        <p><b>Date:</b><?php echo $_GET["date"]; ?></p>
        <p><b>Who?:</b><?php echo $_GET["user"]; ?></p>
        <p><b>Working Hours:</b><?php echo $_GET["wt"]; ?></p>
        <p><b>Description:</b><br/><?php echo $_GET["description"]; ?></p>

        <p></p>

        <form action='../show_all_tasks.php' method='link'><button type='submit' name='show_tasks' class='btn btn-primary' >Show all Tasks</form>
    </div>
</body>
</html>