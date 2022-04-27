


<?php
    require ('../connectDB.php');
    if(isset($_POST['submit'])){
    session_start();
    $stmt = mysqli_stmt_init($conn);
    $sql = 'SELECT * FROM users WHERE username = ?';
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        echo "Failed";
        
    }
    else {
        mysqli_stmt_bind_param($stmt , 's' , $_POST['username']);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        define('ROOT_URL', '../Home/home.php');
        $row = mysqli_fetch_assoc($result);
        
        if( password_verify($_POST['currentPassword'], $row['password'])){
                   $query = "UPDATE users set password='" . $_POST["newPassword"] . "' WHERE username='" . $_SESSION["username"] . "'"; }
      
        if(mysqli_query($conn, $query)){
                echo "Password updated"; 
            }
            else {
                $Error = "Sorry, your password can not update";
            
        }
    }
}






?>