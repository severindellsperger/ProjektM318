<?php

include('../checkuser.php');
require_once('../dbconnection.php');

function input_task()
{
    $username = $_GET["username"];
    $password = $_GET["password"];
    $firstname = $_GET["firstname"];
    $surname = $_GET["surname"];
    $mail = $_GET["mail"];
    $state = $_GET["state"];
    $role = $_GET["role"];

    //Write task
    $sql = "INSERT INTO user (username, password, firstname, surname, mail, state, role) VALUES ('$username','$password', '$firstname', '$surname', '$mail', '$state', '$role')";
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

        <h1>Created user successfully!</h1>

        <p><b>Username:</b><?php echo $_GET["username"]; ?></p>
        <p><b>Password:</b>********</p>
        <p><b>Firstname:</b><?php echo $_GET["firstname"]; ?></p>
        <p><b>Surname:</b><?php echo $_GET["surname"]; ?></p>
        <p><b>Mail:</b><br/><?php echo $_GET["mail"]; ?></p>
        <p><b>State:</b><br/><?php echo $_GET["state"]; ?></p>
        <p><b>Role:</b><br/><?php echo $_GET["role"]; ?></p>

        <p></p>

        <form action='administration_admin.php' method='link'><button type='submit' name='administration' class='btn btn-primary' >Administration</form>

    </body>
</html>