<?php
    require_once 'db.php';
    if(!isset($_SESSION['loggedin'])){
        header('location: login.php');
    }

    $user_email = $_SESSION['loggedin'];
    $user_name = mysqli_query($db, "SELECT * FROM users WHERE email='$user_email'");
    $fetch_user = mysqli_fetch_array($user_name);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>profile</title>
</head>
<body>
    <h2>welcome <?php echo $fetch_user['display_name'] ?></h2>
    <a href="logout.php">logout</a>
</body>
</html>