<?php

    //aside2 area

    $dir_extention_files = "extention/extention-dir";

    // Sort in ascending order - this is default
    $x = scandir($dir_extention_files);
    $x = array_diff($x, array('.', '..'));
    $five = '5';
    foreach($x as $x){
        require('extention/extention-dir/'.$x.'/'.$x.'-define-area.php');
        if ($_SESSION["$x"."_my_defualt"] == $five){
            include('extention/extention-dir/'.$x.'/'.$x.'.php');
        }
    }
?>