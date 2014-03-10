<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/bootstrap-theme.min.css">
    <script src="/js/bootstrap.min.js"></script>

    <title>Project Task Journal</title>
</head>
<body>

    <div>
        <div style="width: 350px; margin: 0 auto; margin-top:300px; border:solid 1px lightgray; padding: 10px; border-radius: 10px">
            <form action="index.php" method="post">
                <div class="form-group">

                     <label>Username</label>

                     <input type="text" class="form-control" name="inputUsername" placeholder="Username">

        </div>

        <div class="form-group">

            <label for="inputPassword">Password</label>

            <input type="password" class="form-control" name="inputPassword" placeholder="Password">

        </div>



        <button type="submit" name="login" class="btn btn-primary" >Login</button>

          </form>
        </div>
    </div>
</body>
</html>


<?php

include('dbconnection.php'); //load config


@session_start();

if($_SERVER["REQUEST_METHOD"] == "POST")
{


    // username and password sent from Form
    $username=($_POST['inputUsername']);
    $password=($_POST['inputPassword']);


    // Überprüfen ob Username vorhanden ist und ob das Passwort stimmt
    $id_user="SELECT US_id_user FROM US_user WHERE US_username='$username' and US_password='$password'";
    $result=mysql_query($id_user);
    $count=0;

    // Falls sie vorhanden sind und das Passwort stimmt, wird der Count auf 1 gesetzt
    if ($result == true)
    {
    $row=mysql_fetch_array($result);
    $count=mysql_num_rows($result);
    }
    else
    {
        $count = 0;
    }

    //if username or password = NULL
    if($username =="" or $password=="")
    {
        //Error Message with a little JavaScript
        {?>

            <script language="JavaScript" type="text/javascript" >
                alert("Please fill in the fields!");
            </script>

        <?php
        }
    }

    // If result matched $username and $password, table row must be 1 row
    elseif($count==1)
    {

    $userstate = mysql_fetch_object(mysql_query("Select * from US_user where US_username='$username'"));

        // testen ob user aktiv ist
        if($userstate->US_active == 1)
        {

            //Session für Checkuser starten
            $_SESSION["login"] = 1;

            //Session für MakeTask starten, damit der Username schon eingetragen ist
            $_SESSION["activeuser"] = $username;

            // Zu show_all_tasks.php wechseln
            header("location: show_all_tasks.php");
        }
        else
        {

            //Error Message with a little JavaScript
            ?>
            <script language="JavaScript" type="text/javascript" >
                alert("User is not active");
            </script>

        <?php
        }

    }
    elseif($count != 1)
    {
        //Error Message with a little JavaScript
        ?>
        <script language="JavaScript" type="text/javascript" >
            alert("Login failed! Please try again!");
        </script>

    <?php
    }
}
?>


