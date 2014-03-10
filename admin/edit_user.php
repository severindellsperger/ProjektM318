<?php
    include('../checkuser.php');
    require_once('../dbconnection.php');

    // $anzeigen holt die Infos über den Task der ausgewält ist aus der Datenbank
    $anzeigen = mysql_fetch_object(mysql_query("Select * from user WHERE id_user='".$_POST['id_user'] ."'" ));
?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="de" lang="de">
    <head>
        <title>Aufgabenverwaltung</title>
        <link rel="stylesheet" href="/css/bootstrap.min.css">
        <link rel="stylesheet" href="/css/bootstrap-theme.min.css">
        <script src="/js/bootstrap.min.js"></script>
    </head>
<body>
<h1 style=" width: 250px; margin:0px auto 25px auto;">Edit User</h1>

<form style='width: 300px; margin: 0 auto;' method='get' name='modify.php' id='Formular_edit' action='modify-user.php'>
    <div class='bg-info'>
        <label>Username</label>
        <input class='form-control' type='text' name='username' value='<?=$anzeigen->username;?>'<br>
        <label>Password</label>
        <input class='form-control'  type='text' name='password' value='<?=$anzeigen->password;?>'><br>
        <label>Firstname</label><br/>
        <input class='form-control' type='text' name='firstname' value='<?=$anzeigen->firstname;?>'><br>
        <label>Surname</label><br/>
        <input class='form-control' type='text' name='surname' value='<?=$anzeigen->surname;?>'><br>
        <label>Mail:</label><br/>
        <input class='form-control' type='text' name='mail' value='<?=$anzeigen->mail;?>'><br>
        <label>State(1=active; 0=inactive):</label><br/>
        <input class='form-control' type='text' name='state' value='<?=$anzeigen->state;?>'><br>
        <label>Role(1=admin; 2=teacher; 3=student):</label><br/>
        <input class='form-control' type='text' name='role' value='<?=$anzeigen->role;?>'><br>
        <form action='modify-user.php' method='post'><button style='margin-left: 227px; margin-bottom: 7px;' class='btn btn-primary'>Update<input type='hidden' name='id_user' value='<?=$anzeigen->id_user;?>'> <input type='hidden' name='OK' value='OK'></button</form>
        </form>
    </div>
</body>
</html>