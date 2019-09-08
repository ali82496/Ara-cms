<?php 

    if(isset($_POST['submitExtention'])){

        $read_line_height = $_POST['read_line_height'];
        $read_line_color = $_POST['read_line_color'];
        $read_line_background_color = $_POST['read_line_background-color'];

        $extention_index = fopen("extention/read_line/read_line_var.php", "w+") or die("Unable to open file!");
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
        <input type="text" name="read_line_height" id=""><label for="">px</label><br>
    <label for="">color :</label><br>
        <input type="text" name="read_line_color" id=""><br>
    <label for="">background-color :</label><br>
        <input type="text" name="read_line_background-color" id=""><br>
    <input type="submit" value="Apply" name="submitExtention">
</form>