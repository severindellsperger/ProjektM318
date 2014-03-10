<?php
include('../checkuser.php');
require_once '../dbconnection.php';

function modify_task()
{
    // Infos sent from Form
    $id_user = $_GET["id_user"];
    $username = $_GET["username"];
    $password = $_GET["password"];
    $firstname = $_GET["firstname"];
    $surname = $_GET["surname"];
    $mail = $_GET["mail"];
    $state = $_GET["state"];
    $role = $_GET["role"];

    //Update Database
    $sql = "UPDATE user SET username='$username', password='$password', firstname='$firstname', surname='$surname', mail='$mail', state='$state', role='$role' WHERE id_user='$id_user'";
    $result=mysql_query($sql) or die (mysql_error());
}
modify_task();
?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="de" lang="de">
    <head>
        <title>Userverwaltung</title>

        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/bootstrap-theme.min.css">
        <script src="../js/bootstrap.min.js"></script>
    </head>
<body>
    <div style="margin: 0  auto;width: 300px">
        <h1 >Modify User successfully</h1>

        <p><b>Username:</b><?php echo $_GET["username"]; ?></p>
        <p><b>Passwort:</b><?php echo $_GET["password"]; ?></p>
        <p><b>Firstname:</b><?php echo $_GET["firstname"]; ?></p>
        <p><b>Surname:</b><?php echo $_GET["surname"]; ?></p>
        <p><b>Mail:</b><br/><?php echo $_GET["mail"]; ?></p>
        <p><b>State:</b><?php echo $_GET["state"]; ?></p>
        <p><b>Role:</b><?php echo $_GET["role"]; ?></p>

        <p></p>

        <form action='administration_admin.php' method='link'><button type='submit' name='show_tasks' class='btn btn-primary' >Administration</form>
    </div>
</body>
</html>