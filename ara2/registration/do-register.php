<?php
    require_once 'db.php';

    $display_name = $_POST["display-name"];
    $email = $_POST["email"];
    $password = md5($_POST["password"]);
    $password_conf = md5($_POST["password-conf"]);

    $register = mysqli_query($db, "INSERT INTO users (display_name, email, password) VALUES ('$display_name', '$email', '$password')");

    if($register){
        header('location: login.php');
    }else{
        echo 'error';
    }
?>