<?php
    include('../checkuser.php');
    require_once('../dbconnection.php');

    // $anzeigen holt die Infos über den Task der ausgewält ist aus der Datenbank
    $anzeigen = mysql_fetch_object(mysql_query("Select * from TA_task WHERE TA_id_task='".$_POST['id_task'] ."'" ));

    // $runuser holt den Usernamen aus der Userdatenbank ohne diese Funktion wird nur fs_user angezeigt und nicht der Username
    $runuser = mysql_fetch_object(mysql_query("Select * from US_user where US_id_user=$anzeigen->TA_fk_TM_id_team_member"));
?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="de" lang="de">
    <head>
        <title>Aufgabenverwaltung</title>
        <link rel="stylesheet" href="/css/bootstrap.min.css">
        <link rel="stylesheet" href="/css/bootstrap-theme.min.css">
        <script src="/js/bootstrap.min.js"></script>
    </head>
<body>
<h1 style=" width: 250px; margin:0px auto 25px auto;">Edit Task</h1>

<form style='width: 300px; margin: 0 auto;' method='get' name='modify.php' id='Formular_edit' action='modify.php'>
    <div class='bg-info'>
        <label>Title</label>
        <input class='form-control' type='text' name='title' value='<?=$anzeigen->TA_title;?>'<br>
        <label>Who?</label>
        <input class='form-control'  type='text' name='user' value='<?=$runuser->US_username;?>'><br>
        <label>Date</label><br/>
        <input class='form-control' type='date' name='date' value='<?=$anzeigen->TA_date;?>'><br>
        <label>Working Hours</label><br/>
        <input class='form-control' type='text' name='wt' value='<?=$anzeigen->TA_worktime;?>'><br>
        <label>Description</label><br/>
        <input class='form-control' type='text' name='description' value='<?=$anzeigen->TA_description;?>'><br>
        <form action='modify.php' method='post'><button style='margin-left: 227px; margin-bottom: 7px;' class='btn btn-primary'>Update<input type='hidden' name='id_task' value='<?=$anzeigen->TA_id_task?>'> <input type='hidden' name='OK' value='OK'></button</form>
        </form>
    </div>
</body>
</html>