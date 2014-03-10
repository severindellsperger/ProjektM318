<?php
    include('checkuser.php');
    include('dbconnection.php');

    $aufgaben = mysql_query("Select * from TA_task");

?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="de" lang="de">
    <head>
        <title>Task Management</title>

        <link rel="stylesheet" href="/css/bootstrap.min.css">
        <link rel="stylesheet" href="/css/bootstrap-theme.min.css">
        <script src="/js/bootstrap.min.js"></script>
    </head>
    <body>
        <h1 style="margin: 0  auto;width: 300px">Task Management </h1>
        <form style="text-align: center;" action="/search.php" method="post">
            <input name="search" /><button type="submit" name="searchbutton" class="btn btn-success">Search</button>
        </form>
        <form style="margin: 10 auto;width: 50px"action='/logout.php' method='link' style="vertical-align:middle; margin-top: 5px;">
            <button  type="submit" name="logout" class="btn btn-success" >Logout</button>
        </form>
        <form style="margin: 10 auto;width: 50px"action='/admin/administration_admin.php' method='link' style="vertical-align:middle; margin-top: 5px;">
            <button  type="submit" name="administration" class="btn btn-success" >User Verwaltung</button>
        </form>

         <table class="table table-striped" style="width: 60%; margin-bottom: 0px; margin: 0 auto;">

             <tr>
                 <td style="vertical-align:middle;text-align:center; width: 230px"><p style="text-align: center"><b>Titel</b></p></td>
                 <td style="vertical-align:middle;text-align:center; "><p style="text-align: center"><b>User</b></p></td>
                 <td style="vertical-align:middle;text-align:center;"><p style="text-align: center" ><b>Date</b></p></td>
                 <td style="vertical-align:middle;text-align:center;"><p style="text-align: center"><b>Working Hours</b></p></td>
                 <td style="vertical-align:middle;">
                     <div>
                         <form action='/task/make_task.php' method='link' style="vertical-align:middle; margin-top: 5px;">
                         <button  type="submit" name="make_task" class="btn btn-success" >New Task</button>
                         </form>
                     </div>

                 </td>

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

    // Alle Tasks ausgeben

    echo "<table class='table table-striped' style='width: 60% ;margin: 0 auto;'>";
    while($row = mysql_fetch_object($aufgaben))
    {
        $date = new DateTime($row->TA_date);
        $runuser = mysql_fetch_object(mysql_query("Select * from US_user where US_id_user=$row->TA_fk_TM_id_team_member"));
        echo "<tr class=info>";
            echo "<td style=vertical-align:middle;>", $row->TA_title, "</td>";
            echo "<td style=vertical-align:middle;>", $runuser->US_username, "</td>";
            echo "<td style=vertical-align:middle;>", $date->format('d.m.Y'), "</td>";
            echo "<td style=vertical-align:middle;>", $row->TA_worktime, "</td>";
            echo "<div style=vertical-align: middle ;><td style=vertical-align:middle;><form style='margin-top: 10px' action='task/show_task.php' method='post'><button type=submit name=show_task class='btn btn-primary' >Show</button><input type='hidden' name='id_task' value='$row->TA_id_task'></form></td>";
        echo "<td><form action='task/edit_task.php' method='post'><button style='margin-top: 10px' type=submit name=edit_task class='btn btn-primary' >Edit</button><input type='hidden' name='id_task' value='$row->TA_id_task'></form></td>";
        echo "<td><form action='task/delete_task.php' method='post'><button style='margin-top: 10px' class='btn btn-danger'>Delete<input type='hidden' name='id_task' value='$row->TA_id_task'> <input type='hidden' name='delete'></button></form></td>";
        echo "<tr></div>";
    }
    echo "</table>";
?>