<?php 

    if(isset($_POST['submitExtention'])){

        $read_line_height = $_POST['read-line-height'];
        $read_line_color = $_POST['read-line-color'];
        $read_line_background_color = $_POST['read-line-background-color'];

        $extention_index = fopen("extention/read-line/read-line-var.php", "w+") or die("Unable to open file!");
        fwrite($extention_index, '<?php  ');
        fwrite($extention_index, '$read_line_height = "'.$read_line_height.'"; ');
        fwrite($extention_index, '$read_line_color = "'.$read_line_color.'"; ');
        fwrite($extention_index, '$read_line_background_color = "'.$read_line_background_color.'"; ');
        fwrite($extention_index, ' ?>');
        fclose($extention_index);

    }

?>
<form action="index.php" method="POST">
    <label for="">height :</label><br>
        <input type="text" name="read-line-height" id=""><label for="">px</label><br>
    <label for="">color :</label><br>
        <input type="text" name="read-line-color" id=""><br>
    <label for="">background-color :</label><br>
        <input type="text" name="read-line-background-color" id=""><br>
    <input type="submit" value="Apply" name="submitExtention">
</form>