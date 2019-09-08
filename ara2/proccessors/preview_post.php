<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<?php

    include ("../config/db_connect.php");
    if (isset($_GET['id'])){

        $id = mysqli_real_escape_string($conn, $_GET['id']);

        // make sql
        $sql = "SELECT * FROM posts WHERE id = $id";

        // get the query result
        $result = mysqli_query($conn, $sql);

        // fetch result in array format
        $post = mysqli_fetch_assoc($result);

        mysqli_free_result($result);
        mysqli_close($conn);
    }

?>
<div class="container">
    <div class="mt-2">
        <button class="btn btn-outline-primary" type="button">Edit</button>
        <button class="btn btn-outline-danger" type="button">Delete</button>
    </div>
    <div class="card mt-2 p-3">
        <h1><?php echo htmlspecialchars($post['title']) ?></h1>
        <hr>
        <h5><?php echo htmlspecialchars($post['content']) ?></h5>
    </div>
</div>