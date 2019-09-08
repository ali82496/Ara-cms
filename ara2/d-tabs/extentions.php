<?php 
    include('config/db_connect.php');

    //write query for all addons
    $sql_addons = 'SELECT id, addon_name, addon_area FROM ara_addons';
    
    //make query and get resualt -addons
    $result_addons = mysqli_query($conn, $sql_addons);

    //fetch the resualting rows as an array -addons
    $addons = mysqli_fetch_all($result_addons, MYSQLI_ASSOC);

    //mysqli_free_result($result);

    //close connection
    mysqli_close($conn);

?>
<div class="container-fluid">
  <h1 class="float-left">Extentions</h1>
  <br>
</div>
<div class="card p-3" style="width: 100%;">
    <ul class="list-group list-group-flush">
    <?php foreach($addons as $addon) { ?>           
        <li class="list-group-item"><?php echo htmlspecialchars($addon['addon_name']); ?></li>
    <?php } ?>
    </ul>
</div>