<?php
  include('../connectDB.php'); 

    // Check for submit
    if(isset($_POST['submit'])){
        // Get form data
        $ID = rand(1000,9999);
        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $passwordOld = mysqli_real_escape_string($conn, $_POST['password']);
        $passwordOldNew= password_hash($password, PASSWORD_DEFAULT);
      
        
        $query2 = "SELECT * FROM users WHERE username = '$username' ";
        $result2 = mysqli_query($conn, $query2);
        $query3 = "SELECT * FROM users WHERE email = '$email' ";
        $result3 = mysqli_query($conn, $query3);
        if(mysqli_num_rows($result2)>0){
          $usernameError = "username are already taken";
        }
        if(mysqli_num_rows($result3)>0){
          $emailError = "This email is exist";
        }
        else{
          session_start();
        $query = "UPDATE users set   WHERE id = {$update_id}";
        define('ROOT_URL', '../index.php');
        if(mysqli_query($conn, $query)){
          $_SESSION['userId'] = $ID;
          $_SESSION['name'] = $name;
          $_SESSION['username'] = $username;
          $_SESSION['Pr'] = 'u';
          header('Location: ' . ROOT_URL);
        }
         else {
            echo "NO";
        }
    }
  }

?>
