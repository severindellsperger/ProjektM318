<?php
    include('checkadmin.php');
?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="de" lang="de">
<head>
    <title>Task Management</title>

    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/bootstrap-theme.min.css">
    <script src="/js/bootstrap.min.js"></script>
</head>
<body>
<h1 style=" text-align: center; margin: 0  auto;width: 750px">Task Management Administration</h1>
<form style="text-align: center; margin: 10 auto;  50px"action='../logout.php' method='link' style="vertical-align:middle; margin-top: 5px;">
    <button  type="submit" name="logout" class="btn btn-success" >Logout</button>
</form>
<form style="text-align: center; margin: 10 auto;  50px"action='../show_all_tasks.php' method='link' style="vertical-align:middle; margin-top: 5px;">
<button  type="submit" name="showalltask" class="btn btn-success" >Back to Task Management</button>
</form>
<form style="text-align: center; margin: 10 auto;  50px"action='make_user.php' method='link' style="vertical-align:middle; margin-top: 5px;">
    <button  type="submit" name="makeuser" class="btn btn-success" >Make User</button>
</form>

</body>
</html>
<?php
include('../dbconnection.php');

/**
 * Created by PhpStorm.
 * User: sgas
 * Date: 19.02.14
 * Time: 08:09
 */

echo "<h2 style='text-align: center; margin: 0  auto;width: 300px'>Admins</h2>";
echo "<table class='table table-striped' style=' width: 90%; margin-bottom: 0px; margin: 0 auto;'>";

echo "<tr>";
echo "<td style='width: 10%;'><p><b>Username</b></p></td>";
echo "<td style='width: 10%;'><p><b>Password</b></p></td>";
echo "<td style='width: 20%;'><p><b>Firstname</b></p></td>";
echo "<td style='width: 20%;'><p><b>Surname</b></p></td>";
echo "<td style='width: 30%;'><p><b>Mail</b></p></td>";
echo "<tr>";
echo "</table>";


$admins = mysql_query("Select * from user where role=1");

echo "<table class='table table-striped' style=' width: 90%;margin: 0 auto;'>";
while($row1 = mysql_fetch_object($admins))
{
    echo "<tr class=info>";
    echo "<td style=width: 10%;>", $row1->username, "</td>";
    echo "<td style=width: 10%;>", $row1->password, "</td>";
    echo "<td style=width: 20%;>", $row1->firstname, "</td>";
    echo "<td style=width: 20%;>", $row1->surname, "</td>";
    echo "<td style=width: 30%;>", $row1->mail, "</td>";
    echo "<td><form action='edit_user.php' method='post'><button style='margin-top: 10px' type=submit name=edit_task class='btn btn-primary' >Edit</button><input type='hidden' name='id_user' value='$row1->id_user'></form></td>";
    echo "<td><form action='delete_user.php' method='post'><button style='margin-top: 10px' class='btn btn-danger'>Delete<input type='hidden' name='id_user' value='$row1->id_user'> <input type='hidden' name='delete'></button></form></td>";
    echo "<tr></div>";
}


echo "<table class='table table-striped' style=' width: 90%; margin-bottom: 0px; margin: 0 auto;'>";
echo "<hr>";
echo "<h2 style='text-align: center; margin: 0  auto;width: 300px'>Teachers</h2>";
    echo "<tr>";
        echo "<td style='width: 10%;'><p><b>Username</b></p></td>";
        echo "<td style='width: 10%;'><p><b>Password</b></p></td>";
        echo "<td style='width: 20%;'><p><b>Firstname</b></p></td>";
        echo "<td style='width: 20%;'><p><b>Surname</b></p></td>";
        echo "<td style='width: 30%;'><p><b>Mail</b></p></td>";
    echo "<tr>";
echo "</table>";


$teachers = mysql_query("Select * from user where role=2");

echo "<table class='table table-striped' style=' width: 90%;margin: 0 auto;'>";
while($row2 = mysql_fetch_object($teachers))
{
    echo "<tr class=info>";
    echo "<td style=width: 10%;>", $row2->username, "</td>";
    echo "<td style=width: 10%;>", $row2->password, "</td>";
    echo "<td style=width: 20%;>", $row2->firstname, "</td>";
    echo "<td style=width: 20%;>", $row2->surname, "</td>";
    echo "<td style=width: 30%;>", $row2->mail, "</td>";
    echo "<td><form action='edit_user.php' method='post'><button style='margin-top: 10px' type=submit name=edit_task class='btn btn-primary' >Edit</button><input type='hidden' name='id_user' value='$row2->id_user'></form></td>";
    echo "<td><form action='delete_user.php' method='post'><button style='margin-top: 10px' class='btn btn-danger'>Delete<input type='hidden' name='id_user' value='$row2->id_user'> <input type='hidden' name='delete'></button></form></td>";
    echo "<tr></div>";
}
echo "</table>";

echo "<hr />";

echo "<h2 style='text-align: center; margin: 0  auto;width: 300px'>Students</h2>";
echo "<table class='table table-striped' style=' width: 90%; margin-bottom: 0px; margin: 0 auto;'>";

echo "<tr>";
echo "<td style='width: 10%;'><p><b>Username</b></p></td>";
echo "<td style='width: 10%;'><p><b>Password</b></p></td>";
echo "<td style='width: 20%;'><p><b>Firstname</b></p></td>";
echo "<td style='width: 20%;'><p><b>Surname</b></p></td>";
echo "<td style='width: 30%;'><p><b>Mail</b></p></td>";

echo "<tr>";
echo "</table>";

$students = mysql_query("Select * from user where role=3");

echo "<table class='table table-striped' style=' width: 90%;margin: 0 auto;'>";
while($row3 = mysql_fetch_object($students))
{
    echo "<tr class=info>";
    echo "<td style=width: 10%;>", $row3->username, "</td>";
    echo "<td style=width: 10%;>", $row3->password, "</td>";
    echo "<td style=width: 20%;>", $row3->firstname, "</td>";
    echo "<td style=width: 20%;>", $row3->surname, "</td>";
    echo "<td style=width: 30%;>", $row3->mail, "</td>";
    echo "<td><form action='edit_user.php' method='post'><button style='margin-top: 10px' type=submit name=edit_task class='btn btn-primary' >Edit</button><input type='hidden' name='id_user' value='$row3->id_user'></form></td>";
    echo "<td><form action='delete_user.php' method='post'><button style='margin-top: 10px' class='btn btn-danger'>Delete<input type='hidden' name='id_user' value='$row3->id_user'> <input type='hidden' name='delete'></button></form></td>";
    echo "<tr></div>";
}
echo "</table>";

?>