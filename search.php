<?php
    include('checkuser.php');
    include('dbconnection.php');
?>
    <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="de" lang="de">
    <head>
        <title>Search Result</title>

        <link rel="stylesheet" href="/css/bootstrap.min.css">
        <link rel="stylesheet" href="/css/bootstrap-theme.min.css">
        <script src="/js/bootstrap.min.js"></script>
    </head>
    <body>
    <h1 style="margin: 0  auto;width: 300px">Search Result</h1>


    <table class="table table-striped" style="width: 60%; margin-bottom: 0px; margin: 0 auto;">
        <tr>
            <td style="vertical-align:middle;text-align:center; width: 230px"><p style="text-align: center"><b>Titel</b></p></td>
            <td style="vertical-align:middle;text-align:center; "><p style="text-align: center"><b>User</b></p></td>
            <td style="vertical-align:middle;text-align:center;"><p style="text-align: center" ><b>Date</b></p></td>
            <td style="vertical-align:middle;text-align:center;"><p style="text-align: center"><b>Working Hours</b></p></td>
            <td style="vertical-align:middle;"><form action="show_all_tasks.php" method="post"><button style='margin-top: 10px' type=submit name=goback class='btn btn-primary' >Go Back</button></form></td>

        <tr>
    </table>
    </body>
    </html>

<?php

/**
 * Created by PhpStorm.
 * User: Stefan
 * Date: 29.01.14
 * Time: 12:22
 */

$usertouserid = mysql_fetch_object(mysql_query("Select * from user where username like '%".$_POST['search'] ."%'"));

$query=mysql_query("SELECT * FROM task WHERE fs_user like '".$usertouserid->id_user."' OR title like '%".$_POST['search'] ."%' OR date like '%".$_POST['search'] ."%' OR description like '%".$_POST['search'] ."%' OR worktime like '%".$_POST['search'] ."%'");


echo "<table class='table table-striped' style='width: 60% ;margin: 0 auto;'>";
while($result = mysql_fetch_object($query))
{
    $runuser = mysql_fetch_object(mysql_query("Select * from user where id_user=$result->fs_user"));
    echo "<tr class=info>";
    echo "<td style=vertical-align:middle;>", $result->title, "</td>";
    echo "<td style=vertical-align:middle;>", $runuser->username, "</td>";
    echo "<td style=vertical-align:middle;>", $result->date, "</td>";
    echo "<td style=vertical-align:middle;>", $result->worktime, "</td>";
    echo "<div style=vertical-align: middle ;><td style=vertical-align:middle;><form style='margin-top: 10px' action='task/show_task.php' method='post'><button type=submit name=show_task class='btn btn-primary' >Show</button><input type='hidden' name='id_task' value='$result->id_task'></form></td>";
    echo "<td><form action='task/edit_task.php' method='post'><button style='margin-top: 10px' type=submit name=edit_task class='btn btn-primary' >Edit</button><input type='hidden' name='id_task' value='$result->id_task'></form></td>";
    echo "<td><form action='task/delete_task.php' method='post'><button style='margin-top: 10px' class='btn btn-danger'>Delete<input type='hidden' name='id_task' value='$result->id_task'> <input type='hidden' name='delete'></button></form></td>";
    echo "<tr></div>";
}
echo "</table>";

?>