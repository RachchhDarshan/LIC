<?php

    session_start();

    if(isset($_SESSION["USER"]))
    {
        unset($_SESSION["USER"]);
        header("Location: ./index.php");

    }
    else
    {
        header("Location: ./index.php");
    }
?>