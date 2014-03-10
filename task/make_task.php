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

    <h1 style=" width: 250px; margin:0px auto 25px auto;">Create a Task</h1>
    <div style="width: 250px; margin: 0 auto;">

    <form method="get" name="formular_edit" id="Input" action="input.php">
        <div class="bg-info">
            <label>Date</label>
            <input type="date" name="date" class="form-control"><br></p>

            <label>Working Hours</label>
            <input type="text" placeholder="Please fill in your Working Hours" class="form-control" name="worktime" maxlength="45"><br></p>
            <label>Who?</label>
            <input  type="text" class="form-control" readonly="readonly" value="<?=$_SESSION["activeuser"]; ?>" name="username" maxlength="45"><br></p>

            <label>Title</label>
            <input type="text" class="form-control"  placeholder="Please fill in the Project Title"name="title" maxlength="45"><br></p>

            <label>Description</label>
            <p><textarea style="height: 100px" class="form-control" name="text" cols="50" rows="10" placeholder="Please fill in a detailed description"></textarea><br/></p>
            <button type="submit" name="Create_task" class="btn btn-primary" style="margin-left: 145px">Create Task</button>
        </div>
    </form>
</body>
</html>