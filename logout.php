<?php
    //User wird ausgeloggt
    @session_start();
    if(session_destroy())
    {
        header("Location: /index.php");
    }
?>