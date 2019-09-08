<?php 

    include('../config/db_connect.php');

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
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ara</title>
    <link rel="stylesheet" href="blog.css">
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
    <style>
        .ara-bg-color{
            background-color: #7b78ff;
        }

        .ara-color{
            color: #fff;
        }

        .callout{
            border-left: 5px solid #7b78ff;
            width: 95%;
            margin: auto;
            padding: 5px;
            border-radius: 2px;
            background-color: #f0f0f0;
        }

        h1{
            padding: 5px;
        }
    </style>
</head>

<body>
    <!-- Image and text -->
    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="#">
            <img src="../ara.svg" width="30" height="30" class="d-inline-block align-top" alt="">
            ara
        </a>
    </nav>
    <div class="jumbotron jumbotron-fluid ara-bg-color ara-color">
        <div class="container">
            <h1 class="display-4">Ara</h1>
            <p class="lead">Powerful but yet simple</p>
        </div>
    </div>
    <div class="callout bd-callout-info"> 
        <h3 id="conveying-meaning-to-assistive-technologies">Notice</h3>
        <p>Ara is under development but you can youse it....</p>
    </div> 
    <br><br>
    <div class="container">
        <div class="row">
            <div class=" col col-sm-3"><h1 class="fas fa-bolt" style="color: #7b78ff;"> Fast and Easy</h1></div><br>
            <div class="col col-sm-3"><h1 class="fas fa-box-open" style="color: #f47267;"> Extendable</h1></div><br>
            <div class="col col-sm-3"><h1 class="fas fa-fill-drip" style="color: orange;"> Costomizable</h1></div><br>
        </div>
        <hr>
        <h1 class="fas fa-cog fa-spin" style="color: <?php printf( "#%06X\n", mt_rand( 0, 0xFFFFFF )); ?>;"></h1><h1>But yet powerful</h1>
    </div>
</body>

</html>