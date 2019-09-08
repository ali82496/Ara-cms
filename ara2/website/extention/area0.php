<?php
    session_start();
    //upper area
    $dir_extention_files = "extention-dir";

    // Sort in ascending order - this is default
    $x = scandir($dir_extention_files);
    $x = array_diff($x, array('.', '..'));
    $zero = '1';
    foreach($x as $x){
        require('extention-dir/'.$x.'/'.$x.'_define_area.php');
        if ($_SESSION["$x"."_my_defualt"] == $zero){
            include('extention-dir/'.$x.'/'.$x.'.php');
        }
    }

?>