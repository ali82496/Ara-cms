<style>
  @media (min-width: 34em) {
    .card-columns {
        -webkit-column-count: 3;
        -moz-column-count: 3;
        column-count: 3;
    }
  }
</style>
<div class="container-fluid">
  <h1 class="float-left">Dashboard</h1>
  <br>
</div>
<div class="card p-3" style="width: 100%;">
  <?php
    $web_dir = "website";
    if(is_dir($web_dir))
    {
      echo ("<p><strong></strong></p>");
      echo ("<p></p>");
      echo '<blockquote class="blockquote"><p class="mb-0">Welcome to Ara....</p><footer class="blockquote-footer">Lets get ready</footer></blockquote>';    }
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
