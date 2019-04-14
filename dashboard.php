<?php

    session_start();
    
    //$name = $_GET['name'];
    //$name = $_COOKIE['name'];
    $name = $_SESSION['name'];
    echo $name;
?>
