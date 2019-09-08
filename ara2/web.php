<?php 
    include('config/db_connect.php');

    //write query for all posts
    $sql = 'SELECT title, content, id FROM posts ORDER BY created_at';
    
    //make query and get resualt
    $result = mysqli_query($conn, $sql);

    //fetch the resualting rows as an array
    $posts = mysqli_fetch_all($result, MYSQLI_ASSOC);

    mysqli_free_result($result);

    //close connection
    mysqli_close($conn);

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>revision</title>
    <link rel="stylesheet" type="text/css" href="humming-bird-r.css">
  </head>
  <body>
    <div class="grid-nav-aside-section-footer">
      <nav class="sticky-up" style="background-color:#fff;">
          <h3 class="text">Humming bird</h3>
      </nav>
      <aside>
        <div class="card" style="width: 98%;">
          <p class="text">
          <ul class="aside-items">
            <?php foreach($posts as $post){ ?>
              <a href="webdetail.php?id=<?php echo $post['id']?>" class="brand-text"><li><?php echo htmlspecialchars($post['title']) ?></li><br></a>
            <?php } ?>
          </ul>
          </p>
        </div>
      </aside>
      <section>
        <?php foreach($posts as $post){ ?>

          <div class="card rounded-img" style="width: 98%;">
          <img src="<?php echo 'media/'.$post['title'].'.jpg'; ?>" width="100%">
          <h5><?php echo htmlspecialchars($post['title']) ?></h5>
          <p class="text"><?php echo htmlspecialchars($post['content']) ?></p><br>
          <a href="webdetail.php?id=<?php echo $post['id']?>" class="brand-text">more info...</a>
          </div>
        <?php } ?>
      </section>
      <footer style="background-color: #fff; height: 250px;">
        <p class="text">
          footer
        </p>
      </footer>
    </div>
  </body>
</html>