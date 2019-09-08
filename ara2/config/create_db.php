<?php
    //conect to database
    $conn = mysqli_connect('localhost', 'ali82496', '1381 20034aA@');

    //check connection
    if (!$conn){
        echo 'connoction error' . mysqli_connect_error();
    }
    // Create database
    $sql = "CREATE DATABASE IF NOT EXISTS ara";
    if (mysqli_query($conn, $sql)) {
        echo "Database created successfully";
    } else {
        echo "Error creating database: " . mysqli_error($conn);
    }
?>