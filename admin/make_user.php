<?php
    include('../checkuser.php');
?>
<html>
    <head>
        <title>Create a Task</title>

        <link rel="stylesheet" href="/css/bootstrap.min.css">
        <link rel="stylesheet" href="/css/bootstrap-theme.min.css">
        <script src="/js/bootstrap.min.js"></script>
    </head>
<body>

    <h1 style=" width: 250px; margin:0px auto 25px auto;">Create a User</h1>
    <div style="width: 250px; margin: 0 auto;">

    <form method="get" name="formular_edit" id="Input" action="input_user.php">
        <div class="bg-info">
            <label>Username</label>
            <input type="text" name="username" class="form-control" placeholder="Username" maxlength="45"><br></p>

            <label>Password</label>
            <input type="password" placeholder="Password" class="form-control" name="password" maxlength="45"><br></p>
            <label>Firstname</label>
            <input  type="text" class="form-control" placeholder="Firstname" name="firstname" maxlength="45"><br></p>

            <label>Surname</label>
            <input type="text" class="form-control"  placeholder="Surname"name="surname" maxlength="45"><br></p>

            <label>Mail</label>
            <input type="text" class="form-control"  placeholder="Mailadress" name="mail" maxlength="45"><br></p>

            <label>Role</label><br>
            <input type="radio" name="role" value="admin"> Admin<br>
            <input type="radio" name="role" value="teacher"> Teacher<br>
            <input type="radio" name="role" value="student"> Student<br>

            <label>State</label><br>
            <input type="radio" name="state" value="active"> Active<br>
            <input type="radio" name="state" value="inactive"> Inactive<br>

            <button type="submit" name="Create_task" class="btn btn-primary" style="margin-left: 145px">Create User</button>
        </div>
    </form>
</body>
</html>