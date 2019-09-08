<?php
    include('db_connect.php');
    // sql to create table
    $sql_table = "CREATE TABLE IF NOT EXISTS posts (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        title VARCHAR(30) NOT NULL,
        author VARCHAR(30) NOT NULL,
        content VARCHAR(21000) NOT NULL,
        created_at TIMESTAMP
        )";
        
        if (mysqli_query($conn, $sql_table)) {
            echo "Table posts created successfully";
        } else {
            echo "Error creating table: " . mysqli_error($conn);
        }

    // sql to create table
    $sql_table_users = "CREATE TABLE IF NOT EXISTS ara_users (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        user VARCHAR(30) NOT NULL,
        email VARCHAR(30) NOT NULL,
        password VARCHAR(250) NOT NULL,
        role VARCHAR(5) NOT NULL
        )";
        
        if (mysqli_query($conn, $sql_table_users)) {
            echo "Table users created successfully";
        } else {
            echo "Error creating table: " . mysqli_error($conn);
        }

    // sql to create table
    $sql_table_media = "CREATE TABLE IF NOT EXISTS ara_media (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        media_name VARCHAR(30) NOT NULL,
        uploaded_at datetime NOT NULL
        )";
        
        if (mysqli_query($conn, $sql_table_media)) {
            echo "Table media created successfully";
        } else {
            echo "Error creating table: " . mysqli_error($conn);
        }
?>