<?php
session_start();
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
    if($currentPass == $dbPass){
        $flag1 = true;
    }
    // two passwords are matches?
    if($newPass == $rePass){
        $flag2 = true;
    }
    // ensure the new and old password are not the same
    if(($flag2) && ($newPass != $dbPass)){
        $flag3 = true;
    }
    // all conditions are met? then change the password
    if($flag1 && $flag2 && $flag3){
        $query = "UPDATE users SET password='$newPass' WHERE username ='$username'";
        if(mysqli_query($conn, $query)){
            ?>
            <script>
            window.location.href='adminProfile.php';
            alert('Password sucessfully changed!');
            </script>
            <?php
        } else {
            echo 'ERROR: '. mysqli_error($conn);
        }
    }
    
        
    


$pr = $_SESSION['Pr'];
if($pr == 'u'){
header('Location: '.USER.'');
} 
else{
    if(!$flag3){ ?>
    <script>
    window.location.href='adminProfile.php';
    alert('your old password and new password are the same!');
</script>
 <?php
    }
    if(!$flag2){     
?>
<script>
    window.location.href='adminProfile.php';
    alert('The two given passwords do not match!');
</script>
<?php
    }
    else if (!$flag1){ ?>

<script>
    window.location.href='adminProfile.php';
    alert('incorrect current password!');
</script>

<?php
}

}
}
?>
    