<?php 
    include('config/db_connect.php');

    //write query for all posts
    $sql_posts = 'SELECT * FROM posts';
    
    //make query and get resualt -posts
    $result_posts = mysqli_query($conn, $sql_posts);

    //fetch the resualting rows as an array -posts
    $posts = mysqli_fetch_all($result_posts, MYSQLI_ASSOC);

    //mysqli_free_result($result);

    //close connection
    mysqli_close($conn);
?>
<form action="d-tabs/new.php" method="POST">
  <div class="row">
    <div class="container-fluid">
      <h1 class="float-left">New</h1>
      <button class="btn btn-outline-primary float-right" type="button" data-toggle="collapse" data-target="#collapse_new" aria-expanded="false" aria-controls="collapseExample">
        New
      </button>
    </div>
    <div class="card p-3 mb-3" style="width: 100%" id="post-list">
      <div class="accordion" id="accordionExample">
        <table class="table table-striped">
          <thead>
            <tr>
              <th>Title</th>
              <th>Author</th>
              <th>Created_at</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($posts as $post) { ?>
              <tr>
                <td><?php echo htmlspecialchars($post['title']); ?></td>
                <td><?php echo htmlspecialchars($post['author']); ?></td>
                <td><?php echo htmlspecialchars($post['created_at']); ?></td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
    <div class="collapse" id="collapse_new">
      <div class="card card-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
      </div>
    </div>
  </div>
</form>