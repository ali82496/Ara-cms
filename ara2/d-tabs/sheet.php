<div class="container-fluid">
  <h1 class="float-left">Sheets</h1>
  <br>
</div>
<div class="card p-3" style="width: 100%">
<?php 
  include('extention/extention-dir/editor/tinyMCE/tinyMCE.php');
  if(isset($_POST['submitme'])){
    $myfile = fopen("sheet.txt", "w") or die("Unable to open file!");
    $txt = $_POST['submitme'];
    fwrite($myfile, $txt);
    fclose($myfile);
  }
?>   
</div>