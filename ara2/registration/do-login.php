<?php
    require_once 'db.php';

    $email = $_POST["email"];
    $password = md5($_POST["password"]);

    $check = mysqli_query($db, "SELECT * FROM users WHERE email='$email' AND password='$password'");

    if(mysqli_num_rows($check) > 0){
        $_SESSION['loggedin'] = $email;
        header('location: profile.php');
    }else{
        echo 'please register before loging in....';
    }
    
?>