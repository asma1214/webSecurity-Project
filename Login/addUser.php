<?php
  include('DB.php'); 

    // Check for submit
    if(isset($_POST['submit'])){
        // Get form data
        $ID = uniqid();
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
     
        $query = "INSERT users SET ID='$ID', username='$username', password='$password' ";
        define('ROOT_URL', 'http://localhost:6060/webSecurity-Project/MyResume/');
        if(mysqli_query($conn, $query)){
            header('Location: '.ROOT_URL.'');
        } else {
            echo 'ERROR: '. mysqli_error($conn);
        }
    }

?>
