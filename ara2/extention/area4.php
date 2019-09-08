<?php

    //section area

    $dir_extention_files = "extention/extention-dir";

    // Sort in ascending order - this is default
    $x = scandir($dir_extention_files);
    $x = array_diff($x, array('.', '..'));
    $four = '4';
    foreach($x as $x){
        require('extention/extention-dir/'.$x.'/'.$x.'-define-area.php');
        if ($_SESSION["$x"."_my_defualt"] == $four){
            include('extention/extention-dir/'.$x.'/'.$x.'.php');
        }
    }
?>