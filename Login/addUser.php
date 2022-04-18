<?php
  include('DB.php'); 

    // Check for submit
    if(isset($_POST['submit'])){
        // Get form data
        $update_id = mysqli_real_escape_string($conn, $_POST['update_id']);
        $title = mysqli_real_escape_string($conn, $_POST['title']);
        $body = mysqli_real_escape_string($conn, $_POST['body']);
        $author = mysqli_real_escape_string($conn, $_POST['author']);
     
        $query = "UPDATE posts SET title='$title', author='$author', body='$body' WHERE id = {$update_id}";
        define('ROOT_URL', 'http://localhost:6060/updatetrial.php');
        if(mysqli_query($conn, $query)){
            header('Location: '.ROOT_URL.'');
        } else {
            echo 'ERROR: '. mysqli_error($conn);
        }
    }

?>
