<?php
    session_start();
    unset($_SESSION['loggedin']);
    if (!isset($_SESSION['loggedin'])){
        header('location: login.php');
    }
?>