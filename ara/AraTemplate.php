<?php
    /*  this file compiles the wbsite html that is linked to the style sheet from a simple txt file*/
    $site_index = fopen("website.php", "w") or die("Unable to open file!");/*  Do not change this really....  */
    $web_cont = file_get_contents('web.php');
    fwrite($site_index, $web_cont);/*  Do not change this too....  */
    fclose($site_index);/*  Do not change this / thanks....  */
?>