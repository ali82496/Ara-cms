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
</head>

<body class="bg-lighter">
  <nav class="navbar navbar-dark bg-dark">
    <a class="navbar-brand bg-dark" href="#"><img src="ara.svg" width="30" height="30" class="d-inline-block align-top" alt="ara">Ara</a>
    <form class="form-inline my-2 my-lg-0" action="dashboard_admin.php" method="post">
      <input type="submit" value="Log out" class="btn btn-outline-danger my-2 my-sm-0" name="logout">
      <?php
        if(isset($_POST['logout'])){
          unset($_SESSION['loggedin']);
          if (!isset($_SESSION['loggedin'])){
            header('location: login.php');
          }
        }
      ?>
    </form>
  </nav>
  <div class="container-fluid">
  <div class="row">
    <div class="panel border-right p-0 bg-dark sticky-top">
      <div class="list-group list-group-flush" id="list-tab" role="tablist">
        <a class="list-group-item list-group-item-action active" id="list-dashboard-list" data-toggle="list" href="#list-dashboard" role="tab" aria-controls="dashboard"><i class="fas fa-home"></i></a>
        <a class="list-group-item list-group-item-action" id="list-new-list" data-toggle="list" href="#list-new" role="tab" aria-controls="new"><i class="fas fa-plus"></i></a>
        <a class="list-group-item list-group-item-action" id="list-sheet-list" data-toggle="list" href="#list-sheet" role="tab" aria-controls="sheet"><i class="fas fa-sticky-note"></i></a>
        <a class="list-group-item list-group-item-action" id="list-media-list" data-toggle="list" href="#list-media" role="tab" aria-controls="media"><i class="fas fa-photo-video"></i></a>
        <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings"><i class="fas fa-cog"></i></a>
      </div>
    </div>
    <div class="col-md-11">
      <div class="tab-content container mt-5" id="nav-tabContent">
        <div class="tab-pane fade show active" id="list-dashboard" role="tabpanel" aria-labelledby="list-dashboard-list"><?php include('d-tabs/dashboard.php'); ?></div>
        <div class="tab-pane fade" id="list-new" role="tabpanel" aria-labelledby="list-new-list"><?php include('d-tabs/new.php'); ?></div>
        <div class="tab-pane fade" id="list-sheet" role="tabpanel" aria-labelledby="list-sheet-list"><?php include('d-tabs/sheet.php'); ?></div>
        <div class="tab-pane fade" id="list-media" role="tabpanel" aria-labelledby="list-media-list"><?php include('d-tabs/media.php'); ?></div>
        <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list"><?php include('d-tabs/settings.php'); ?></div>
      </div>
    </div>
  </div>
  </div>
</body>

</html>