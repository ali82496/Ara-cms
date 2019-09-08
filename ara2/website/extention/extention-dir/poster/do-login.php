<?php
    require_once ('db.php');

    $email = $_POST["email"];
    $password = md5($_POST["password"]);
    
    $check_user = mysqli_query($db, "SELECT * FROM ara_users WHERE email='$email' AND password='$password' AND role='user'");
    
    if(mysqli_num_rows($check_user) > 0){
        $_SESSION['loggedin_user'] = $email;
        header('location: dashboard_user.php');
    }else{
        header('location: register.php');
    }
?>