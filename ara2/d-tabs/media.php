<style>
  @media (min-width: 34em) {
    .card-columns {
        -webkit-column-count: 4;
        -moz-column-count: 4;
        column-count: 4;
    }
  }
</style>
<div class="container-fluid">
  <h1 class="float-left">Media</h1>
  <!-- Button trigger modal -->
  <button type="button" class="btn btn-outline-primary float-right" data-toggle="modal" data-target="#exampleModalCenter" style="width: 79px;">
    Upload
  </button>
  <br>
</div>

<br>
<div class="card p-3" style="width: 100%;">
  <!--  upload modal start  -->
  <!-- Modal -->
  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalCenterTitle">Upload media</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="AraMediaUpload.php" method="post" enctype="multipart/form-data">
          <div class="modal-body">
            <input type="file" name="fileToUpload" id="fileToUpload">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <input type="submit" value="Upload Image" name="upload" class="btn btn-outline-primary">
          </div>
        </form>
      </div>
    </div>
  </div>
  <!--  upload modal end  -->
  <div class="card-columns mt-2">
    <?php
      $dir_media = "media";
    
      // Sort in ascending order - this is default
      $c = scandir($dir_media);
      $c = array_diff($c, array('.', '..'));
      foreach($c as $d){        
        echo'<div class="card" style="border-radius: 7px; overflow: hidden;">';
          echo'<img src="media/'.$d.'" class="card-img-top" alt="'.$d.'">';
        echo'</div>';   
      } 
    ?>
  </div>
</div>