<?php
    require_once ('config/db.php');

    $email = $_POST["email"];
    $password = md5($_POST["password"]);

    $check_admin = mysqli_query($db, "SELECT * FROM ara_users WHERE email='$email' AND password='$password' AND role='admin'");
    $check_user = mysqli_query($db, "SELECT * FROM ara_users WHERE email='$email' AND password='$password' AND role='user'");

    if(mysqli_num_rows($check_admin) > 0){
        $_SESSION['loggedin'] = $email;
        header('location: dashboard_admin.php');
    }else{
        echo 'please register before loging in....';
    }
    
?>
