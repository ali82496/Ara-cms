
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Ara</title>
    <link rel="stylesheet" href="humming-bird-r.css">
    <script src="https://kit.fontawesome.com/3a8222ebcb.js"></script>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
    <script>
      // Ara extention tabs
        function openExtention(evt, ExtentionName) {
        // Declare all variables
        var i, tabcontent, tablinks;

        // Get all elements with class="tabcontent" and hide them
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
          tabcontent[i].style.display = "none";
        }

        // Get all elements with class="tablinks" and remove the class "active"
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
          tablinks[i].className = tablinks[i].className.replace(" active", "");
        }

        // Show the current tab, and add an "active" class to the button that opened the tab
        document.getElementById(ExtentionName).style.display = "block";
        evt.currentTarget.className += " active";
      }
    </script>
    <script>
      $(document).ready(function(){

        $(".grid-dashboard-items").fadeIn();
        $(".theme-manager-items").fadeOut();
        $(".store-manager-items").fadeOut();
        $(".file-manager-items").fadeOut();
        $(".media-manager-items").fadeOut();
        $(".extention-manager-items").fadeOut();
        $(".compile-manager-items").fadeOut();
        $(".post-manager-items").fadeOut();

        $(".file-manager").click(function(){
          $(".grid-dashboard-items").fadeOut();
          $(".theme-manager-items").fadeOut();
          $(".store-manager-items").fadeOut();
          $(".media-manager-items").fadeOut();
          $(".post-manager-items").fadeOut();
          $(".extention-manager-items").fadeOut();
          $(".compile-manager-items").fadeOut();
          $(".file-manager-items").fadeIn();
        });
        
        $(".dashboard").click(function(){
          $(".file-manager-items").fadeOut();
          $(".theme-manager-items").fadeOut();
          $(".store-manager-items").fadeOut();
          $(".media-manager-items").fadeOut();
          $(".post-manager-items").fadeOut();
          $(".extention-manager-items").fadeOut();
          $(".compile-manager-items").fadeOut();
          $(".grid-dashboard-items").fadeIn();
        });

        $(".theme-manager").click(function(){
          $(".grid-dashboard-items").fadeOut();
          $(".file-manager-items").fadeOut();
          $(".store-manager-items").fadeOut();
          $(".media-manager-items").fadeOut();
          $(".post-manager-items").fadeOut();
          $(".extention-manager-items").fadeOut();
          $(".compile-manager-items").fadeOut();
          $(".theme-manager-items").fadeIn();
        });

        $(".store-manager").click(function(){
          $(".grid-dashboard-items").fadeOut();
          $(".file-manager-items").fadeOut();
          $(".theme-manager-items").fadeOut();
          $(".media-manager-items").fadeOut();
          $(".post-manager-items").fadeOut();
          $(".extention-manager-items").fadeOut();
          $(".compile-manager-items").fadeOut();
          $(".store-manager-items").fadeIn();
        });

        $(".media-manager").click(function(){
          $(".grid-dashboard-items").fadeOut();
          $(".file-manager-items").fadeOut();
          $(".theme-manager-items").fadeOut();
          $(".store-manager-items").fadeOut();
          $(".post-manager-items").fadeOut();
          $(".extention-manager-items").fadeOut();
          $(".compile-manager-items").fadeOut();
          $(".media-manager-items").fadeIn();
        });

        $(".post-manager").click(function(){
          $(".grid-dashboard-items").fadeOut();
          $(".file-manager-items").fadeOut();
          $(".theme-manager-items").fadeOut();
          $(".store-manager-items").fadeOut();
          $(".media-manager-items").fadeOut();
          $(".extention-manager-items").fadeOut();
          $(".compile-manager-items").fadeOut();
          $(".post-manager-items").fadeIn();
        });

        $(".extention-manager").click(function(){
          $(".grid-dashboard-items").fadeOut();
          $(".file-manager-items").fadeOut();
          $(".theme-manager-items").fadeOut();
          $(".store-manager-items").fadeOut();
          $(".media-manager-items").fadeOut();
          $(".post-manager-items").fadeOut();
          $(".compile-manager-items").fadeOut();
          $(".extention-manager-items").fadeIn();
        });

        $(".compile-manager").click(function(){
          $(".grid-dashboard-items").fadeOut();
          $(".file-manager-items").fadeOut();
          $(".theme-manager-items").fadeOut();
          $(".store-manager-items").fadeOut();
          $(".media-manager-items").fadeOut();
          $(".post-manager-items").fadeOut();
          $(".extention-manager-items").fadeOut();
          $(".compile-manager-items").fadeIn();
        });


        $(".new-folder").click(function(){
          $(".file-process").load("AraNewDirectory.php");
        });

        $(".new-theme").click(function(){
          $(".theme-process").load("Downloader.php");
        });
      });
    </script>
  </head>
  <body>
    <div class="grid-panel">
      <div class="panel-aside" style="background-color: #1f1f2e; color: white;">
        <ul class="aside-items element-ul">
          <li class="dashboard"><i class="fa fa-dashboard"></i>Dashboard</li>
          <li class="post-manager"><i class="fa fa-plus"></i>New</li>
          <li class="media-manager"><i class="fa fa-photo-video"></i>Media</li>
          <li class="file-manager"><i class="fa fa-folder"></i>Files</li>
          <li class="theme-manager"><i class="fa fa-brush"></i>Theme</li>
          <li class="store-manager"><i class="fa fa-store-alt"></i>Store</li>
          <li class="extention-manager"><i class="fa fa-box-open"></i>Extentions</li>
          <li class="compile-manager"><i class="fa fa-file-export"></i>Compile</li>
        </ul>
      </div>
      <div class="panel">
        <div class="grid-dashboard-items">
          <div class="card" style="width: 95%;">
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
          <p></p>
          </div>
          <div class="card" style="width: 29%;">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          </div>
          <div class="card" style="width: 29%;">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          </div>
          <div class="card" style="width: 29%;">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          </div>
          <div class="card" style="width: 45.5%;">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          </div>
          <div class="card" style="width: 45.5%;">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          </div>
        </div>
        <div class="file-manager-items element">
          <div class="card" style="width: 95%;">
          <p class="files-process">Files</p>
          <form action="AraNewDirectory.php" method="post">
            <input type="text" name="newfoldername"><br>
            <input type="submit" class="new-folder" value= "New Folder" name= "newfolder">
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
        </div>
        <div class="theme-manager-items element">
          <div class="card" style="width: 95%;">
          <p class="theme-process">Files</p>
          <input type="button" class="new-theme" value= "New theme">
          </div>
        </div>
        <div class="store-manager-items element">
          <div class="card" style="width: 95%;">
          <?php
            $dir_themes = "themes";
    
            // Sort in ascending order - this is default
            $b = scandir($dir_themes);
            $b = array_diff($b, array('.', '..'));
            foreach($b as $b){
              echo "<div class=".'card-reverse-1'.">".'<img src="themes/'.$b.'/bitmap.png'.'" width="100%">'.'<p class="text">'.$b.'</p>'."</div>";   
            } 
          ?>
          </div>
        </div>
        <div class="media-manager-items element">
          <div class="card" style="width: 98%;">
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
        </div>
        <div class="post-manager-items element">
          <?php 
          if(isset($_POST['submitme'])){
            include('config/db_connect.php');
            $title = mysqli_real_escape_string($conn, $_POST['new-post-title']);
            $author = mysqli_real_escape_string($conn, $_POST['new-post-author']);
            $content = mysqli_real_escape_string($conn, $_POST['new-post-content']);
            $sql = "INSERT INTO posts(title,author,content) VALUES ('$title', '$author', '$content')";
            //save to db and check
            if(mysqli_query($conn, $sql)){
              //success
              header('location: index.php');//redirect to the index page
            }else{
              //error
              echo 'query error: ' . mysqli_error($conn);
            }
          }
          ?>
          <form action="index.php" method="POST">
            <label for="" class="margin">Title : </label>
            <input type="text" name="new-post-title" id="" class="margin" style="width: 98%;">
            <label for="" class="margin">Author : </label>
            <input type="text" name="new-post-author" id="" class="margin" style="width: 98%;">
            <label for="" class="margin">Content : </label>
            <textarea name="new-post-content" rows="10" cols="30" class="textarea" style="width: 98%;"></textarea> 
            <input type = "submit" value="submit" name="submitme">
          </form>
        </div>
        <div class="extention-manager-items element">
        
            <!-- Tab links -->
            <div class="tab">
              <?php 
                $dir_extention_files = "extention/extention-dir";

                // Sort in ascending order - this is default
                $x = scandir($dir_extention_files);
                $x = array_diff($x, array('.', '..'));
                foreach($x as $x){
                  echo "<button class='tablinks' onclick='openExtention(event, ".'"'.$x.'"'.")'>".$x."</button>";
                } 
              ?>
            </div>

            <!-- Tab content -->
            <?php 
                $dir_extention_files = "extention/extention-dir";

                // Sort in ascending order - this is default
                $x = scandir($dir_extention_files);
                $x = array_diff($x, array('.', '..'));
                foreach($x as $x){
                  echo '<div id="'.$x.'" class="tabcontent">';
                  echo '<h3>'.$x.'</h3>';
                  include ("extention/extention-dir/".$x."/".$x."_settings.php");
                  echo '</div>';
                } 
              ?>            
        </div>
        <div class="compile-manager-items element card padding">
        
        <?php 
          if(isset($_POST['submitCompile'])){
            require('AraTemplate.php');
            echo 'done....';
          }
          ?>

          <form action="index.php" method="POSt">
            <label for="">compile it....</label>
            <input type="submit" value="compile me" name="submitCompile">
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
