<h1>Media</h1>
<br>
<div class="card p-3" style="width: 100%;">
    <form action="AraMediaUpload.php" method="post" enctype="multipart/form-data">
        Select image to upload:
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="submit" value="Upload Image" name="upload">
    </form>
    <?php
            $dir_media = "media";
    
            // Sort in ascending order - this is default
            $c = scandir($dir_media);
            $c = array_diff($c, array('.', '..'));
            foreach($c as $d){
              echo "<div class=".'card-reverse'.">".'<img class='.'"'.'media'.'"'.' src="media/'.$d.'" width="150px">'."</div>";   
            } 
          ?>
</div>