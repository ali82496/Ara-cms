<h1>Dashboard</h1>
<br>
<div class="card p-3" style="width: 100%;">
    <?php
            $web_dir = "website";
            if(is_dir($web_dir))
            {
              echo ("<p><strong>Welcome to Ara....</strong></p>");
            }
            else
            {
              echo ("lets create your first website <br> Loading....");
              include 'AraNewDirectory.php';
              function newFolder(){
                mkdir("website"); 
                echo "done";
              }
              newFolder();
              mkdir("media"); 
            }
          ?>
</div>