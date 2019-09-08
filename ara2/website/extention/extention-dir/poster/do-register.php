<?php
    require 'db.php';
    if(isset($_POST['do-register'])){
        $user = $_POST["user"];
        $email = $_POST["email"];
        $password = md5($_POST["password"]);
        $password_conf = md5($_POST["password-conf"]);
        mysqli_query($db, "INSERT INTO ara_users (user, email, password, role) VALUES ('$user', '$email', '$password', 'user')");
    }
    header('location: dashboard_user.php');
    if(isset($_SESSION['loggedin_user'])){
        header('location: dashboard_user.php');
    }
?>
