<?php
  session_start();
  if(!isset($_SESSION['loggedin'])){
      header('location: index.php');
  }
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
      </div>
    </div>
    <div class="col-md-11">
      <div class="tab-content container mt-5" id="nav-tabContent">
        <div class="tab-pane fade show active" id="list-dashboard" role="tabpanel" aria-labelledby="list-dashboard-list"><?php include('d-tabs/dashboard.php'); ?></div>
        <div class="tab-pane fade" id="list-new" role="tabpanel" aria-labelledby="list-new-list"><?php include('d-tabs/new.php'); ?></div>
        <div class="tab-pane fade" id="list-sheet" role="tabpanel" aria-labelledby="list-sheet-list"><?php include('d-tabs/sheet.php'); ?></div>
        <div class="tab-pane fade" id="list-media" role="tabpanel" aria-labelledby="list-media-list"><?php include('d-tabs/media.php'); ?></div>
        <div class="tab-pane fade" id="list-extentions" role="tabpanel" aria-labelledby="list-extentions-list"><?php include('d-tabs/extentions.php'); ?></div>
        <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list"><?php include('d-tabs/settings.php'); ?></div>
        <div class="tab-pane fade" id="list-mailer" role="tabpanel" aria-labelledby="list-mailer-list"><?php include('d-tabs/mailer.php'); ?></div>
      </div>
    </div>
  </div>
  </div>
</body>

</html>