<?php 
    include('../config/db_connect.php');

    //write query for all posts
    $sql = 'SELECT id, title, content, author, featured_image, created_at FROM posts ORDER BY created_at';
    //write query for all addons
    $sql_addons_a1 = 'SELECT id, addon_name, addon_area FROM ara_addons';
    
    //make query and get resualt -posts
    $result = mysqli_query($conn, $sql);
    //make query and get resualt -addons
    $result_addons_a1 = mysqli_query($conn, $sql_addons_a1);

    //fetch the resualting rows as an array -posts
    $posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
    //fetch the resualting rows as an array -addons
    $addons_a1 = mysqli_fetch_all($result_addons_a1, MYSQLI_ASSOC);

    //mysqli_free_result($result);

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
    <?php include("bootstrap/bootstrap.php") ?>
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
    <?php 
        foreach($addons_a1 as $addon_a1){ 
            include ("../extention/extention-dir/".$addon_a1['addon_name']."/".$addon_a1['addon_name'].".php"); 
        }
    ?>
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="site-media/ara-alt.svg" width="30" height="30" class="d-inline-block align-top" alt="">
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
                        <li class="text-right pr-2"> aaمن امیدوارم</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>    
</body>
</html>