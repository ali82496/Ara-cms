<h1>Files</h1>
<br>
<div class="card p-3" style="width: 100%;">
    <p class="files-process">Files</p>
    <form action="AraNewDirectory.php" method="post">
        <input type="text" name="newfoldername"><br>
        <input type="submit" class="new-folder" value="New Folder" name="newfolder">
    </form>
    <hr>
    <?php
            $dir_files = ".";
            // Sort in ascending orderead-liner - this is default
            $a = scandir($dir_files);
            $a = array_diff($a, array('.', '..'));
            foreach($a as $a){
              echo "<div class=".'card-reverse-1'.">".'<p class= "text">'.$a."</p>"."</div>";   
            } 
          ?>
</div>