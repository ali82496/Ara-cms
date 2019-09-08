<?php
    require_once 'db.php';
    if(isset($_SESSION['loggedin'])){
        header('location: profile.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>register</title>
    <style>
    
    </style>
</head>
<body>

   <div id="users">
        <form action="do-register.php" method="POST">
            <input type="text" name="display-name" id="" placeholder="Your Name : "><br>
            <input type="text" name="email" id="" placeholder="Your email : "><br>
            <input type="password" name="password" id="" placeholder="Your password : "><br>
            <input type="password" name="password-conf" id="" placeholder="Your password again : "><br>
            <input type="submit" value="register" name="do-register">
        </form>
   </div>

</body>
</html>