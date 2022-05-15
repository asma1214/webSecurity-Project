<?php
  include('../connectDB.php'); 

    // Check for submit
    if(isset($_POST['submit'])){
        // Get form data
        $ID = rand(1000,9999);
        // get data from database
        $name = mysqli_real_escape_string($conn, htmlspecialchars($_POST['name']));
        $username = mysqli_real_escape_string($conn, htmlspecialchars($_POST['username']));
        $password = mysqli_real_escape_string($conn,htmlspecialchars($_POST['password']));
        // $hashPass= password_hash($password, PASSWORD_DEFAULT);
        $email = mysqli_real_escape_string($conn, htmlspecialchars($_POST['email']));
        $email = filter_var($email, FILTER_VALIDATE_EMAIL);
        if ($email === false) {
          //exit('Invalid Email');
          $emailError = "Email is invalid";
          //define('ROOT_URL1', 'registerPage.php');
          //header('Location: ' . ROOT_URL1);
        }
        //validate password
        $uppercase = preg_match('@[A-Z]@', $password); // must include at least one upper case letter
        // $lowercase = preg_match('@[a-z]@', $password); // must include at least one lower case letter
        $number    = preg_match('@[0-9]@', $password); // must include at least one number
        $specialChars = preg_match('@[^\w]@', $password); // must include at least one special character
        $user = preg_match("/\b{$username}\b/i", $password);
        $len =  strlen($password);
        if(!$uppercase){
          $uppError = "Password must include at least one upper case letter";
        }
        else if(!$number){
          $numError = "Password must include at least one number";
        }
        else if(!$specialChars){
          $specError = "Password must include at least one special character";
        }
        else if($len < 8){
          $lenError= "Password must be at least 8 characters in length";
        }
        else if($user){
          $userError = "Password must not include your name";
        }
        else {
          $hashPass= password_hash($password, PASSWORD_DEFAULT);
        
        $query2 = "SELECT * FROM users WHERE username = '$username' ";
        $result2 = mysqli_query($conn, $query2);
        $query3 = "SELECT * FROM users WHERE email = '$email' ";
        $result3 = mysqli_query($conn, $query3);
        if(mysqli_num_rows($result2)>0){
          $usernameError = "username are already taken";
        }
        if(mysqli_num_rows($result3)>0){
          if ($email === false) { }
          else {$emailError = "This email is exist";}
          
        }
        else{
          session_start();
          //insert data into database
        $query = "INSERT INTO users (ID, name, username, password, email, Pr) VALUES ('$ID', '$name' , '$username', '$hashPass' , '$email' , 'u' )";
        define('ROOT_URL', '../index.php');
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
}
  

?>
