
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
<script>
$(document).ready(function(){
  $(".new_field_locator").click(function(){
    $(".print").append('<textarea type="text" name="a" style="width: 90%;"></textarea>');
  });
});
</script>
<div class="print_area">
  <form action="dashboard_admin.php" method="post">
  <input type="submit" value="publish" name="publish">
    <div class="input-group input-group-lg">
      <div class="input-group-prepend">
      <button type="button" class="btn btn-primary btn-lg new_field_locator" name="new_field_locator">+</button>
      </div>
      <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg" placeholder="Title">
    </div> 
    <div class="print"></div> 
  </form>
</div>
