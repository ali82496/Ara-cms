<?php
    require 'config/db.php';
    if(isset($_POST['do-register'])){
        $user = $_POST["user"];
        $email = $_POST["email"];
        $password = md5($_POST["password"]);
        $password_conf = md5($_POST["password-conf"]);
        mysqli_query($db, "INSERT INTO ara_users (user, email, password, role) VALUES ('$user', '$email', '$password', 'admin')");
    }
    if(isset($_SESSION['loggedin'])){
        header('location: index.php');
    }
?>
