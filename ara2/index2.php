<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>index2</title>
    <link rel="stylesheet" href="humming-bird-r.css">
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
    <script>
        $(document).ready(function(){
            $(".tabcontent").hide();

            $(".theme0").click(function(){
              $(".tab").css("background-color", "midnightblue")
            });

            $(".theme1").click(function(){
              $(".tab").css("background-color", "coral")
            });

            $(".theme2").click(function(){
              $(".tab").css("background-color", "#6B5B95")
            });

            $(".theme3").click(function(){
              $(".tab").css("background-color", "#E94B3C")
            });

            $(".theme4").click(function(){
              $(".tab").css("background-color", "#9F9C99")
            });

            $(".theme5").click(function(){
              $(".tab").css("background-color", "#45B8AC")
            });
        });
    </script>
    <style>
        * {box-sizing: border-box}

        html, body {
             height: 100%;
             font-family: Verdana, sans-serif;
        }

        body{
            margin: 0px;
        }

        /* Style the tab */
        .tab {
            float: left;
            border: 1px solid #ccc;
            background-color: #f1f1f1;
            width: 15%;
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
            background-color: #ddd;
        }

        .tab button:hover::-moz-focus-inner {
            border: 0;
        }

        /* Create an active/current "tab button" class */
        .tab button.active {
            background-color: #ccc;
        }

        .tab button.active::-moz-focus-inner {
            border: 0;
        }

        /* Style the tab content */
        .tabcontent {
            float: left;
            padding: 0px 12px;
            border: 1px solid #ccc;
            width: 85%;
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
        <button class="tablinks" onclick="opentab(event, 'dashboard')"><h1>Ara</h1></button>
        <button class="tablinks" onclick="opentab(event, 'dashboard')">Dashboard</button>
        <button class="tablinks" onclick="opentab(event, 'post-manager')">New</button>
        <button class="tablinks" onclick="opentab(event, 'media-manager')">Media</button>
        <button class="tablinks" onclick="opentab(event, 'file-manager')">Files</button>
        <button class="tablinks" onclick="opentab(event, 'settings')">Settings</button>
        <?php 
            $dir_extention_files = "extention/extention-dir";

            // Sort in ascending order - this is default
            $x = scandir($dir_extention_files);
            $x = array_diff($x, array('.', '..'));
            foreach($x as $x){
                echo "<button class='tablinks' onclick='opentab(event, ".'"'.$x.'"'.")'>".$x."</button>";
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
    </div>

    <div id="post-manager" class="tabcontent">
      <h1>New</h1>
      <br>
      <div class="card" style="100%">
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
            <div class="theme theme0" style="background-color: midnightblue;"></div>
            <div class="theme theme1" style="background-color: coral;"></div>
            <div class="theme theme2" style="background-color: #6B5B95;"></div>
            <div class="theme theme3" style="background-color: #E94B3C;"></div>
            <div class="theme theme4" style="background-color: #9F9C99;"></div>
            <div class="theme theme5" style="background-color: #45B8AC;"></div>
        </div>
    </div>
</body>
</html>