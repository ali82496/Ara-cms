<?php 

    include('../config/db_connect.php');

    //write query for all posts
    $sql = 'SELECT id, title, content, author, featured_image, created_at FROM posts ORDER BY created_at';
    
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
    <link href="https://fonts.googleapis.com/css?family=Rubik+Mono+One&display=swap" rel="stylesheet"> 
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
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
    <style>

        @font-face {
            font-family: Vazir;
            src: url('fonts/Vazir-Black.eot');
            src: url('fonts/Vazir-Black.eot?#iefix') format('embedded-opentype'),
                 url('fonts/Vazir-Black.woff2') format('woff2'),
                 url('fonts/Vazir-Black.woff') format('woff'),
                 url('fonts/Vazir-Black.ttf') format('truetype');
            font-weight: 900;
            font-style: normal;
        }

        .bg-lighter {
            background-color: #e6ecf0 !important;
        }

        .navbar-brand {
            color: #fff !important;
        }

        .card {
            border-radius: 10px !important;
            font-family: Vazir;
        }

        ul {
            list-style: none;
        }
        
    </style>
</head>

<body class="bg-lighter">   
     <!-- Image and text -->
    <nav class="navbar navbar-primary bg-primary">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="ara-alt.svg" width="30" height="30" class="d-inline-block align-top" alt="">
                Ara
            </a>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-md-9 mt-4 mb-4">
                <?php foreach($posts as $post){ ?>
                    <div class="card mt-2">
                        <div class="card-title h4 text-right p-4"><?php echo htmlspecialchars($post['title']); ?></div>
                        <div class="card-info text-right p-2"><?php echo htmlspecialchars($post['created_at']); ?></div>
                        <div class="card-img"><img src="../media/<?php echo htmlspecialchars($post['featured_image']); ?>" alt="" width="100%"></div>
                        <div class="card-description text-right p-2"><?php echo htmlspecialchars($post['content']); ?></div>
                        <hr class="my-1 mb-1">
                        <div class="card-tools p-2">ادامه مطلب</div>
                    </div>
                <?php } ?>
            </div>
            <div class="col-md-3 mt-4 sticky-top">
                <div class="card mt-2 pt-2 pb-2">
                    <div class="card-title text-right pr-2">نوشته های اخیر</div>
                    <hr class="my-1 mb-1" width="90%">
                    <ul>
                        <?php foreach($posts as $post){ ?>
                            <li class="text-right pr-2"><?php echo htmlspecialchars($post['title']); ?></li>
                        <?php } ?>
                    </ul>
                </div>
                <div class="card mt-2 pt-2 pb-2">
                    <div class="card-title text-right pr-2">تگ ها</div>
                    <hr class="my-1 mb-1" width="90%">
                    <ul>
                        <li class="text-right pr-2"> آزادی</li>
                        <li class="text-right pr-2"> زندگی من</li>
                        <li class="text-right pr-2"> من امیدوارم</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>    
</body>
</html>