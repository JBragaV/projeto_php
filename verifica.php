<?php
    session_start();

    if(!isset($_SESSION['nome']) || !isset($_SESSION['id'])){
        header("location: login.html");
        exit;
    }
?>