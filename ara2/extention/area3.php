<?php

    //aside area

    $dir_extention_files = "extention/extention-dir";

    // Sort in ascending order - this is default
    $x = scandir($dir_extention_files);
    $x = array_diff($x, array('.', '..'));
    $three = '3';
    foreach($x as $x){
        require('extention/extention-dir/'.$x.'/'.$x.'-define-area.php');
        if ($_SESSION["$x"."_my_defualt"] == $three){
            include('extention/extention-dir/'.$x.'/'.$x.'.php');
        }
    }
?>