<?php
    //conect to database
    $conn = mysqli_connect('localhost', 'ali82496', '1381 20034aA@', 'ara');

    //check connection
    if (!$conn){
        echo 'connoction error' . mysqli_connect_error();
    }

    //conect to database
    $media_conn = mysqli_connect('localhost', 'ali82496', '1381 20034aA@', 'ara');

    //check connection
    if (!$media_conn){
        echo 'connoction error' . mysqli_connect_error();
    }
?>