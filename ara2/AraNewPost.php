<?php 
include('config/db_connect.php');
$title = $_POST['title'];
$author = $_POST['author'];
$content = $_POST['content'];

if(isset($_POST['submit'])){
    $sql = "INSERT INTO posts (title, author, content) VALUES ('$title', '$author', '$content')";
}else{
    echo 'sorry operation failed';
}
?>