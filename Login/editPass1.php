<?php
session_start();
define('USER', 'userProfile.php');
define('ADMIN', 'userProfile.php');


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
             
    $result = mysqli_query($conn, "SELECT * FROM users WHERE username ='$username'");
    $row = mysqli_fetch_array($result);
    $dbPass = $row['password'];
    if($currentPass == $dbPass){
        if($newPass == $rePass){
        $query = "UPDATE users SET password='$newPass' WHERE username ='$username'";
        if(mysqli_query($conn, $query)){
        } else {
            echo 'ERROR: '. mysqli_error($conn);
        }
        
    }
//     else {
//         $Error = "Those passwords didn't match. Try again.";
//     }
// }
// else {
//     $Error = "Sorry, your password is not correct.";
// }


$pr = $_SESSION['Pr'];
if($pr == 'u'){
header('Location: '.USER.'');
} 
else{
    header('Location: '.ADMIN.'');
  
}   
}
}
    
    
    
   
        







?>