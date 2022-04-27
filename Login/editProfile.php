


<?php
    require ('../connectDB.php');
    
    if(isset($_POST['submit'])){
        echo "hello1"; 
        session_start();


       




        $newPass = $_POST['newpassword'];    
        $newPass1= password_hash($newPass, PASSWORD_DEFAULT);
        $oldPass = $_POST['currentPassword'];    
        $oldPass= password_hash($oldPass, PASSWORD_DEFAULT);

        $username = $_SESSION['username'];
        echo $_SESSION['username'];
       
        
       
        $result = mysqli_query($conn, "SELECT *from users WHERE username ='$username'");
        $row = mysqli_fetch_array($result);
        
        
            $query = "UPDATE users SET password='$newPass' WHERE username ='$username'";
            define('ROOT_URL', '../Home/home.php');
            if(mysqli_query($conn, $query)){
                header('Location: '.ROOT_URL.'');
            } else {
                    echo 'ERROR: '. mysqli_error($conn);
            }
        
    }
    
    
    
   
        







?>