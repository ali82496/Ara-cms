

<?php

//upper area

$dir_extention_files = "extention";
$zero = '0';

// Sort in ascending order - this is default
$x = scandir($dir_extention_files);
$x = array_diff($x, array('.', '..'));
foreach($x as $x){
    include('extention/'.$x.'/'.$x.'_define_area.php');
    if ($my_default_area_is == $zero){
        include('extention/'.$x.'/'.$x.'.php');
    }else{
        echo 'The'.$x.'is not for this area';
    }
} 


include('config/db_connect.php');

//check Get request id parameter
    if(isset($_GET['id'])){

        $id = mysqli_real_escape_string($conn, $_GET['id']);

        //make sql
        $sql = "SELECT * FROM posts WHERE id = $id";

        //get quer result
        $result = mysqli_query($conn, $sql);

        //fetch result in array format (for each result or row)
        $post = mysqli_fetch_assoc($result);

        mysqli_free_result($result);
        mysqli_close($conn);
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?php echo $post['title']; ?></title>
    <link rel="stylesheet" type="text/css" href="humming-bird-r.css">
</head>
<body>
        <?php if($post): ?>
            <div class="form-center" style="width: 86%;">
            <img src="<?php echo 'media/'.$post['title'].'.jpg'; ?>" width="100%" style="padding-top: -70%; overflow: hidden;">
            <div class="padding">
            <h4><?php echo $post['title']; ?></h4>
			<p>Created by <?php echo $post['author']; ?></p>
			<p><?php echo date($post['created_at']); ?></p>
			<h5>content:</h5>
            <p><?php echo $post['content']; ?></p>
            </div>
        <?php else: ?>
            <h1>404</h1><br>
            <h5>No post founded</h5>
        <?php endif; ?>
        </div>
</body>
</html>