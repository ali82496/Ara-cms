<?php

    //upper area
 
    $dir_extention_files = "extention";
    $zero = '0';

    // Sort in ascending order - this is default
    $x = scandir($dir_extention_files);
    $x = array_diff($x, array('.', '..'));
    foreach($x as $x){
        include('extention/'.$x.'/'.$x.'_define_area.php');
        if ($my_default_area_is == $zero){
            include('extention/'.$x.'/'.$x.'.php');
        }else{
            echo 'The'.$x.'is not for this area';
        }
    } 

?>