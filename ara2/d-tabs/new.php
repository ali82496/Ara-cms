<h1>New</h1>
<br>
<div class="card p-3" style="width: 100%">
    <!--  /*include('extention/extention-dir/print/print.php') */ -->
    <?php 
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
    <form action="d-tabs/new.php" method="POST">
        <label for="" class="margin">Title : </label>
        <input type="text" name="new-post-title" id="" class="margin" style="width: 98%;">
        <label for="" class="margin">Author : </label>
        <input type="text" name="new-post-author" id="" class="margin" style="width: 98%;">
        <label for="" class="margin">Content : </label>
        <textarea name="new-post-content" rows="10" cols="30" class="textarea" style="width: 98%;"></textarea> 
        <input type = "submit" value="submit" name="submitme">
    </form>
</div>