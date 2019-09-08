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

    if (isset($_POST['del_post'])){
        $id_to_delete = mysqli_real_escape_string($conn, $_POST['id_to_delete']);

        $sql_del = 'DELETE FROM posts WHERE id = $id_to_delete';

        if(mysqli_query($conn, $sql_del)){
            //success
            header('location: ../dashboard_admin.php');
        }else{
            //failure
            echo 'query error: ' . mysqli_error($conn);
        }
    }

?>
<div class="container">
    <div class="card mt-2 p-3">
        <h3>Do you want to delete tne post <?php echo htmlspecialchars($post['title']) ?> ?</h3>
        <form action="delete_post.php" method="post">
            <input type="hidden" name="id_to_delete" value="<?php echo htmlspecialchars($post['id']) ?>">
            <input type="submit" value="Cancel" class="btn btn-outline-primary" name="del_post">
            <input type="submit" value="Delete" class="btn btn-outline-danger" name="cancel">
        </form>
    </div>
</div>