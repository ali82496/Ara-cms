<?php 

    include('../config/db_connect.php');

    //write query for all posts
    $sql = 'SELECT title, content, id, created_at FROM posts ORDER BY created_at DESC';
    
    //make query and get resualt
    $result = mysqli_query($conn, $sql);

    //fetch the resualting rows as an array
    $posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
    
    //----------------------------------------------------------------------------------------

    //write query for all posts
    $sql_recent = 'SELECT title FROM posts ORDER BY id DESC LIMIT 4';
    
    //make query and get resualt
    $result_recent = mysqli_query($conn, $sql_recent);

    //fetch the resualting rows as an array
    $posts_recent = mysqli_fetch_all($result_recent, MYSQLI_ASSOC);

    mysqli_free_result($result);
    mysqli_free_result($result_recent);

    //close connection
    mysqli_close($conn);

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900.css">
  <link rel="stylesheet" href="blog.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
  </script>
  <style>
    .card-inner {
      border: 1px rgba(0, 0, 0, .1) solid;
      height: 250px;
      overflow: hidden;
      padding: 5px;
    }

    .color {
      color: #7b78ff;
    }

    .btn-outline-primary:hover {
      background-color: #7b78ff;
      color: #fff;
      border: 1px solid #7b78ff;
    }


    .align-items-center {
      display: flex;
      flex-wrap: wrap;
      align-content: flex-end;
    }
  </style>
</head>

<body>
  <div class="container">
    <nav class="navbar navbar-white bg-white">
      <h4 class="bg-white blog-header-logo text-center color" href="#">
        poster
      </h4>
      <form class="form-inline my-2 my-lg-0" method="post" action="../extention/extention-dir/poster/poster.php">
        <button type="submit" value="sign in/up" class="btn btn-outline-primary my-2 my-sm-0 color" name="Signin">Sign
          in/up</button>
      </form>
    </nav>
    <hr>
    <div>
      <?php 
      foreach($posts as $post){
        echo htmlspecialchars($post['title'].'  \  ');
      }
    ?>
    </div>
    <br>
    <div class="card-columns">
      <?php foreach($posts as $post){ ?>
      <div class="card rounded">
        <img src="../media/<?php echo htmlspecialchars($post['title']) ?>.jpg" class="card-img-top" alt="...">
      </div>
      <?php } ?>
    </div>
  </div>
</body>

</html>