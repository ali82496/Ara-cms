<?php

    //nav area
    session_start();
    $dir_extention_files = "extention/extention-dir";

    // Sort in ascending order - this is default
    $x = scandir($dir_extention_files);
    $x = array_diff($x, array('.', '..'));
    $two = '2';
    foreach($x as $x){
        require('extention/extention-dir/'.$x.'/'.$x.'-define-area.php');
        if ($_SESSION["$x"."_my_defualt"] == $two){
            include('extention/extention-dir/'.$x.'/'.$x.'.php');
        }
    }
?>