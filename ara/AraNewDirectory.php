<?php 
    $newdir = $_POST["newfoldername"];
    mkdir($newdir); 
    echo "done";
?>