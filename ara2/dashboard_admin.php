<?php
  session_start();
  if(!isset($_SESSION['loggedin'])){
      header('location: index.php');
  }

  //  These codes get the extentions name with the d_tab_setting compability then it adds their setting to the dashboard tabs --start

    include('config/db_connect.php');
    //write query for all addons
    $sql_addons_tab = 'SELECT * FROM ara_addons WHERE d_tab_settings = yes';
    
    //make query and get resualt -addons
    $result_addons_tab = mysqli_query($conn, $sql_addons_tab);

    //fetch the resualting rows as an array -addons
    $addons_tab = mysqli_fetch_all($result_addons_tab, MYSQLI_ASSOC);

    //mysqli_free_result($result);

    //close connection
    mysqli_close($conn);

  //  These codes get the extentions name with the d_tab_setting compability then it adds their setting to the dashboard tabs --end
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="dashboard.css">
  <script src="https://kit.fontawesome.com/3a8222ebcb.js"></script>
  <?php include("bootstrap/bootstrap.php") ?>
</head>

<body class="bg-lighter">
  <div class="container-fluid">
  <div class="row">
    <div class="panel border-right p-0 bg-dark sticky-top">
      <div class="list-group list-group-flush" id="list-tab" role="tablist">
        <a class="list-group-item list-group-item-action active" id="list-dashboard-list" data-toggle="list" href="#list-dashboard" role="tab" aria-controls="dashboard"><i class="fas fa-home"></i></a>
        <a class="list-group-item list-group-item-action" id="list-new-list" data-toggle="list" href="#list-new" role="tab" aria-controls="new"><i class="fas fa-plus"></i></a>
        <a class="list-group-item list-group-item-action" id="list-sheet-list" data-toggle="list" href="#list-sheet" role="tab" aria-controls="sheet"><i class="fas fa-sticky-note"></i></a>
        <a class="list-group-item list-group-item-action" id="list-media-list" data-toggle="list" href="#list-media" role="tab" aria-controls="media"><i class="fas fa-photo-video"></i></a>
        <a class="list-group-item list-group-item-action" id="list-extentions-list" data-toggle="list" href="#list-extentions" role="tab" aria-controls="extentions"><i class="fas fa-box-open"></i></a>
        <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings"><i class="fas fa-cog"></i></a>
        <a class="list-group-item list-group-item-action" id="list-mailer-list" data-toggle="list" href="#list-mailer" role="tab" aria-controls="mailer"><i class="fas fa-mail-bulk"></i></a>
        <?php foreach($addons_tab as $addons_tab){ ?> <!-- This code adds the extentions settings tab to the dashboard 1/2 -->
          <a class="list-group-item list-group-item-action" id="list-<?php echo htmlspecialchars($addons_tab['addon_name']); ?>-list" data-toggle="list" href="#list-<?php echo htmlspecialchars($addons_tab['addon_name']); ?>" role="tab" aria-controls="<?php echo htmlspecialchars($addons_tab['addon_name']); ?>"><i class="fas fa-mail-bulk"></i></a>
        <?php } ?>
      </div>
    </div>
    <div class="col-md-11">
      <div class="tab-content container mt-5" id="nav-tabContent"> <!-- This code adds the extentions settings tab to the dashboard 2/2 -->
        <div class="tab-pane fade show active" id="list-dashboard" role="tabpanel" aria-labelledby="list-dashboard-list"><?php include('d-tabs/dashboard.php'); ?></div>
        <div class="tab-pane fade" id="list-new" role="tabpanel" aria-labelledby="list-new-list"><?php include('d-tabs/new.php'); ?></div>
        <div class="tab-pane fade" id="list-sheet" role="tabpanel" aria-labelledby="list-sheet-list"><?php include('d-tabs/sheet.php'); ?></div>
        <div class="tab-pane fade" id="list-media" role="tabpanel" aria-labelledby="list-media-list"><?php include('d-tabs/media.php'); ?></div>
        <div class="tab-pane fade" id="list-extentions" role="tabpanel" aria-labelledby="list-extentions-list"><?php include('d-tabs/extentions.php'); ?></div>
        <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list"><?php include('d-tabs/settings.php'); ?></div>
        <div class="tab-pane fade" id="list-mailer" role="tabpanel" aria-labelledby="list-mailer-list"><?php include('d-tabs/mailer.php'); ?></div>
        <?php foreach($addons_tab as $addons_tab){ ?>
          <div class="tab-pane fade" id="list-<?php echo htmlspecialchars($addons_tab['addon_name']); ?>" role="tabpanel" aria-labelledby="list-<?php echo htmlspecialchars($addons_tab['addon_name']); ?>-list"><?php include('extention/extention-dir/read_line/read_line_settings.php'); ?></div>
        <?php } ?>
      </div>
    </div>
  </div>
  </div>
</body>

</html>