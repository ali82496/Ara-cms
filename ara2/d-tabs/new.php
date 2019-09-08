<div class="row">
<div class="container-fluid">
  <h1 class="float-left">New</h1>
  <br>
</div>
  <div class="card p-3 col-md-9" style="width: 100%">
    <?php 
      include('extention/extention-dir/editor/tinyMCE/tinyMCE.php');
      if(isset($_POST['submitme'])){
        include('../config/db_connect.php');
        $title = mysqli_real_escape_string($conn, $_POST['new-post-title']);
        $author = mysqli_real_escape_string($conn, $_POST['new-post-author']);
        $content = mysqli_real_escape_string($conn, $_POST['new-post-content']);
        $sql = "INSERT INTO posts(title,author,content) VALUES ('$title', '$author', '$content')";
        //save to db and check
        if(mysqli_query($conn, $sql)){
          //success
          header('location: ../index.php');//redirect to the index page
        }else{
          //error
          echo 'query error: ' . mysqli_error($conn);
        }
      }
    ?>
  </div>
  <div class="col-md-3">
    <div class="card p-3 col-md-10" style="width: 100%">
      featured image:
      <input type="text"><input type="submit" value="ok">
    </div>
  </div>
</div>