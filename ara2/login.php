<?php
    require_once 'config/db.php';
    if(isset($_SESSION['loggedin'])){
        header('location: dashboard_admin.php');
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login</title>
    <link rel="stylesheet" href="signin.css">
    <?php include("bootstrap/bootstrap.php") ?>
</head>

<body>
    <form class="form-signin" action="do-login.php" method="post">
        <img class="mb-4" src="ara.svg" alt="" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="do-login">Sign in</button>
    </form>
</body>

</html>