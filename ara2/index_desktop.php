<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>index2</title>
    <link rel="stylesheet" href="humming-bird-r.css">
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
    <script src="https://kit.fontawesome.com/3a8222ebcb.js"></script>
    <script>
        $(document).ready(function(){
            $(".tabcontent").hide();

            $(".theme0").click(function(){
              $(".tab").css({"background-color": "#1f1f2e", "border": "#1f1f2e" });
              $(".tab button").css("background-color", "#0066f");
              $(".tab button:hover").css("background-color", "#1f78fd");
              $(".tab button:active").css("background-color", "#0066ff");
            });

            $(".theme1").click(function(){
              $(".tab").css("background-color", "coral");
            });

            $(".theme2").click(function(){
              $(".tab").css("background-color", "#6B5B95");
            });

            $(".theme3").click(function(){
              $(".tab").css("background-color", "#E94B3C");
            });

            $(".theme4").click(function(){
              $(".tab").css("background-color", "#9F9C99");
            });

            $(".theme5").click(function(){
              $(".tab").css("background-color", "#45B8AC");
            });
        });
    </script>
    <style>* {
      box-sizing: border-box
    }

    html,
    body {
      height: 100%;
      font-family: Verdana, sans-serif;
    }


    body {
      margin: 0px;
    }

    /* Style the tab */
    .tab {
      float: left;
      border: 1px solid #fff;
      background-color: #fff;
      width: 4%;
      height: 100%;
    }

    /* Style the buttons that are used to open the tab content */
    .tab button {
      display: block;
      background-color: inherit;
      color: black;
      padding: 18px 16px;
      width: 100%;
      border: none;
      outline: none;
      text-align: left;
      cursor: pointer;
      transition: 0.3s;
      cursor: default;
    }

    /* Change background color of buttons on hover */
    .tab button:hover {
      background-color: #f0f0f0;
      color: #554fd8;
    }

    .tab button:hover::-moz-focus-inner {
      border: 0;
    }

    /* Create an active/current "tab button" class */
    .tab button.active {
      background-color: #e6e6e6;
      color: #554fd8;
      border-left: 5px solid #554fd8;
    }

    .tab button.active::-moz-focus-inner {
      border: 0;
    }

    /* Style the tab content */
    .tabcontent {
      float: left;
      padding: 0px 12px;
      border: 1px solid #ccc;
      width: 96%;
      border-left: none;
      height: 100%;
    }

    </style>
    <script>
        function opentab(evt, tabName) {
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

        // Show the current tab, and add an "active" class to the link that opened the tab
        document.getElementById(tabName).style.display = "block";
        evt.currentTarget.className += " active";
        } 
    </script>
</head>
<body>
    <div class="tab">
        <button class="tablinks" onclick="opentab(event, 'dashboard')"><i class="fas fa-bars"></i></button>
        <button class="tablinks" onclick="opentab(event, 'dashboard')"><i class="fas fa-tachometer-alt"></i></button>
        <button class="tablinks" onclick="opentab(event, 'post-manager')"><i class="fas fa-plus"></i></button>
        <button class="tablinks" onclick="opentab(event, 'media-manager')"><i class="fas fa-photo-video"></i></button>
        <button class="tablinks" onclick="opentab(event, 'file-manager')"><i class="fas fa-folder"></i></button>
        <button class="tablinks" onclick="opentab(event, 'store-manager')"><i class="fas fa-store-alt"></i></button>
        <button class="tablinks" onclick="opentab(event, 'settings')"><i class="fas fa-cog"></i></button>
        <?php 
            $dir_extention_files = "extention/extention-dir";

            // Sort in ascending order - this is default
            $x = scandir($dir_extention_files);
            $x = array_diff($x, array('.', '..'));
            foreach($x as $x){
                echo "<button class='tablinks' onclick='opentab(event, ".'"'.$x.'"'.")'><i class='fas fa-box-open'></i></button>";
            } 
        ?>
    </div>

    <div id="dashboard" class="tabcontent">
        <h1>Dashboard</h1>
        <br>
        <div class="card" style="width: 100%;">
          <?php
            $web_dir = "website";
            if(is_dir($web_dir))
            {
              ech<h1>Settings</h1>
        <br>
        <div class="card" style="width: 100%;">
          <h3>Themes</h3>
            <div class="theme theme0" style="background-color: #1f1f2e;"></div>
            <div class="theme theme1" style="background-color: coral;"></div>
            <div class="theme theme2" style="background-color: #6B5B95;"></div>
            <div class="theme theme3" style="background-color: #E94B3C;"></div>
            <div class="theme theme4" style="background-color: #9F9C99;"></div>
            <div class="theme theme5" style="background-color: #45B8AC;"></div>
        </div>elcome to Ara....</strong></p>");
            }
            else
            {
              ech<h1>Settings</h1>
        <br>
        <div class="card" style="width: 100%;">
          <h3>Themes</h3>
            <div class="theme theme0" style="background-color: #1f1f2e;"></div>
            <div class="theme theme1" style="background-color: coral;"></div>
            <div class="theme theme2" style="background-color: #6B5B95;"></div>
            <div class="theme theme3" style="background-color: #E94B3C;"></div>
            <div class="theme theme4" style="background-color: #9F9C99;"></div>
            <div class="theme theme5" style="background-color: #45B8AC;"></div>
        </div>your first website <br> Loading....");
              inc<h1>Settings</h1>
        <br>
        <div class="card" style="width: 100%;">
          <h3>Themes</h3>
            <div class="theme theme0" style="background-color: #1f1f2e;"></div>
            <div class="theme theme1" style="background-color: coral;"></div>
            <div class="theme theme2" style="background-color: #6B5B95;"></div>
            <div class="theme theme3" style="background-color: #E94B3C;"></div>
            <div class="theme theme4" style="background-color: #9F9C99;"></div>
            <div class="theme theme5" style="background-color: #45B8AC;"></div>
        </div>ctory.php';
              fun<h1>Settings</h1>
        <br>
        <div class="card" style="width: 100%;">
          <h3>Themes</h3>
            <div class="theme theme0" style="background-color: #1f1f2e;"></div>
            <div class="theme theme1" style="background-color: coral;"></div>
            <div class="theme theme2" style="background-color: #6B5B95;"></div>
            <div class="theme theme3" style="background-color: #E94B3C;"></div>
            <div class="theme theme4" style="background-color: #9F9C99;"></div>
            <div class="theme theme5" style="background-color: #45B8AC;"></div>
        </div>){
                m<h1>Settings</h1>
        <br>
        <div class="card" style="width: 100%;">
          <h3>Themes</h3>
            <div class="theme theme0" style="background-color: #1f1f2e;"></div>
            <div class="theme theme1" style="background-color: coral;"></div>
            <div class="theme theme2" style="background-color: #6B5B95;"></div>
            <div class="theme theme3" style="background-color: #E94B3C;"></div>
            <div class="theme theme4" style="background-color: #9F9C99;"></div>
            <div class="theme theme5" style="background-color: #45B8AC;"></div>
        </div> 
                e<h1>Settings</h1>
        <br>
        <div class="card" style="width: 100%;">
          <h3>Themes</h3>
            <div class="theme theme0" style="background-color: #1f1f2e;"></div>
            <div class="theme theme1" style="background-color: coral;"></div>
            <div class="theme theme2" style="background-color: #6B5B95;"></div>
            <div class="theme theme3" style="background-color: #E94B3C;"></div>
            <div class="theme theme4" style="background-color: #9F9C99;"></div>
            <div class="theme theme5" style="background-color: #45B8AC;"></div>
        </div>
              }
              new<h1>Settings</h1>
        <br>
        <div class="card" style="width: 100%;">
          <h3>Themes</h3>
            <div class="theme theme0" style="background-color: #1f1f2e;"></div>
            <div class="theme theme1" style="background-color: coral;"></div>
            <div class="theme theme2" style="background-color: #6B5B95;"></div>
            <div class="theme theme3" style="background-color: #E94B3C;"></div>
            <div class="theme theme4" style="background-color: #9F9C99;"></div>
            <div class="theme theme5" style="background-color: #45B8AC;"></div>
        </div>
              mkd<h1>Settings</h1>
        <br>
        <div class="card" style="width: 100%;">
          <h3>Themes</h3>
            <div class="theme theme0" style="background-color: #1f1f2e;"></div>
            <div class="theme theme1" style="background-color: coral;"></div>
            <div class="theme theme2" style="background-color: #6B5B95;"></div>
            <div class="theme theme3" style="background-color: #E94B3C;"></div>
            <div class="theme theme4" style="background-color: #9F9C99;"></div>
            <div class="theme theme5" style="background-color: #45B8AC;"></div>
        </div>
            }
          ?> 
          <p></p><h1>Settings</h1>
        <br>
        <div class="card" style="width: 100%;">
          <h3>Themes</h3>
            <div class="theme theme0" style="background-color: #1f1f2e;"></div>
            <div class="theme theme1" style="background-color: coral;"></div>
            <div class="theme theme2" style="background-color: #6B5B95;"></div>
            <div class="theme theme3" style="background-color: #E94B3C;"></div>
            <div class="theme theme4" style="background-color: #9F9C99;"></div>
            <div class="theme theme5" style="background-color: #45B8AC;"></div>
        </div>
          </div>
    </div>

    <div id="post-manager" class="tabcontent">
      <h1>New</h1>
      <br>
      <div class="card" style="width: 100%">
        <?php include('extention/extention-dir/print/print.php') ?>
      </div>
    </div>

    <div id="media-manager" class="tabcontent">
        <h1>Media</h1>
        <br>
        <div class="card" style="width: 100%;">
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
    <div id="file-manager" class="tabcontent">
        <h1>Files</h1>
        <br>
        <div class="card" style="width: 100%;">
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

    <div id="store-manager" class="tabcontent">
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
    </div>

    <?php 
        $dir_extention_files = "extention/extention-dir";

        // Sort in ascending order - this is default
        $x = scandir($dir_extention_files);
        $x = array_diff($x, array('.', '..'));
        foreach($x as $x){
            echo '<div id="'.$x.'" class="tabcontent">';
            echo '<h1>'.$x.'</h1><br>';
            echo '<div class="card" style="width: 100%;">';
            include ("extention/extention-dir/".$x."/".$x."_settings.php");
            echo '</div>';
            echo '</div>';
        } 
    ?>

    <div id="settings" class="tabcontent">
        <h1>Settings</h1>
        <br>
        <div class="card" style="width: 100%;">
          <h3>Themes</h3>
            <div class="theme theme0" style="background-color: #1f1f2e;"></div>
            <div class="theme theme1" style="background-color: coral;"></div>
            <div class="theme theme2" style="background-color: #6B5B95;"></div>
            <div class="theme theme3" style="background-color: #E94B3C;"></div>
            <div class="theme theme4" style="background-color: #9F9C99;"></div>
            <div class="theme theme5" style="background-color: #45B8AC;"></div>
        </div>
    </div>
</body>
</html>