<h1>Files</h1>
<br>
<div class="card" style="width: 100%;">
    <h3>Store</h3>
    <br>
    <?php
            $store = fopen ("http://www.code-student.ir/themes", "r");
            $dir_files = ".";
            // Sort in ascending orderead-liner - this is default
            $a = scandir($dir_files);
            $a = array_diff($a, array('.', '..'));
            foreach($a as $a){
              echo "<div class=".'card-reverse-1'.">".'<p class= "text">'.$a."</p>"."</div>";   
            } 
          ?>
</div>