<html>

<?php

if(!isset($_SESSION)) 
{ 
	session_start(); // Access the existing session.
} 
define('USER', 'userProfile.php');
define('ADMIN', 'adminProfile.php');


require ('../connectDB.php');
if(isset($_POST['change'])){
    // echo "hello1"; 
    // $newPass1= password_hash($newPass, PASSWORD_DEFAULT);
    // $oldPass= password_hash($oldPass, PASSWORD_DEFAULT);
    
    $currentPass = htmlspecialchars($_POST['currentPass']); 
    $newPass = htmlspecialchars($_POST['newPass']);    
    $rePass = htmlspecialchars($_POST['rePass']);  
    // echo $newPass . "<br>" . $currentPass . "<br>" . $rePass;
    
    $username = $_SESSION['username'];
    $flag1 = false;   
    $flag2 = false;   
    $flag3 = false;     
    $result = mysqli_query($conn, "SELECT * FROM users WHERE username ='$username'");
    $row = mysqli_fetch_array($result);
    $dbPass = $row['password'];
    
    // is your current password same as db password?
    //password_verify($currentPass, $dbPass)
    if(password_verify($currentPass, $dbPass)){
        $flag1 = true;
    }
    // two passwords are matches?
    if($newPass == $rePass){
        $flag2 = true;
    }
    // ensure the new and old password are not the same
    //password_verify($newPass, $dbPass)
    if(($flag2) && (!password_verify($newPass, $dbPass))){
        $flag3 = true;
    }
    // all conditions are met? then change the password
    if($flag1 && $flag2 && $flag3){
        $hashPass = password_hash($newPass, PASSWORD_DEFAULT);
        $query = "UPDATE users SET password='$hashPass' WHERE username ='$username'";
        if(mysqli_query($conn, $query)){
            ?>
            <?php
        } else {
            echo 'ERROR: '. mysqli_error($conn);
        }
    }
    
        


}

?>
    