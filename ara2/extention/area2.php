<?php

    //nav area
    $dir_extention_files = "extention-dir";

    // Sort in ascending order - this is default
    $x = scandir($dir_extention_files);
    $x = array_diff($x, array('.', '..'));
    $two = '2';
    foreach($x as $x){
        require('extention-dir/'.$x.'/'.$x.'-define-area.php');
        if ($_SESSION["$x"."_my_defualt"] == $two){
            include('extention-dir/'.$x.'/'.$x.'.php');
        }
    }
?>