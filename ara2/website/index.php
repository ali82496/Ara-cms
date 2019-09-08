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
</head>
<body>
<div class="container">
  <nav class="navbar navbar-white bg-white text-center">
    <h4 class="navbar-brand bg-white" href="#">
      Ara
    </h4>
    <form class="form-inline my-2 my-lg-0" action="dashboard.php" method="post">
      <input type="submit" value="sign in/up" class="btn btn-outline-primary my-2 my-sm-0" name="Signin">
      <?php
        if(isset($_POST['logout'])){
          unset($_SESSION['loggedin']);
          if (!isset($_SESSION['loggedin'])){
            header('location: index.php');
          }
        }
      ?>
    </form>
  </nav>
  <div class="row">
    <div class="col-md-12 bg-dark text-light rounded card">
      One of three columns
    </div>
  </div>
</div>
</body>
</html>
