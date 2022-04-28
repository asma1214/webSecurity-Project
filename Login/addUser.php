<?php
  include('../connectDB.php'); 

    // Check for submit
    if(isset($_POST['submit'])){
        // Get form data
        // $nameFlag = array_key_exists( "name", $_POST );
        // $usernameFlag = array_key_exists( "username", $_POST );
        // $passFlag = array_key_exists( "password", $_POST );
        // $emailFlag = array_key_exists( "email", $_POST );
        // if($usernameFlag && $nameFlag && $passFlag && $emailFlag) {
        $ID = rand(1000,9999);
        // get data from database
        $name = mysqli_real_escape_string($conn, htmlspecialchars($_POST['name']));
        $username = mysqli_real_escape_string($conn, htmlspecialchars($_POST['username']));
        $password = mysqli_real_escape_string($conn,htmlspecialchars($_POST['password']));
        // $hashPass= password_hash($password, PASSWORD_DEFAULT);
        $email = mysqli_real_escape_string($conn, htmlspecialchars($_POST['email']));
        // }
        // else {
        //   header('Location: registerPage.php');
        // }
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
          //insert data into database
        $query = "INSERT INTO users (ID, name, username, password, email, Pr) VALUES ('$ID', '$name' , '$username', '$password' , '$email' , 'u' )";
        define('ROOT_URL', '../Home/home.php');
        if(mysqli_query($conn, $query)){
          $_SESSION['userId'] = $ID;
          $_SESSION['name'] = $name;
          $_SESSION['username'] = $username;

          $_SESSION['Pr']= 'u';


          header('Location: ' . ROOT_URL);
        }
         else {
            echo "NO";
        }
    }
  }

?>
