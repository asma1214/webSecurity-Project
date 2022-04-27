


<?php
    require ('../connectDB.php');
    
    if(isset($_POST['submit'])){
        echo "hello1"; 
        session_start();

        $newPass = $_POST['newpassword']; 
        $username = $_SESSION['username'];
        echo $_SESSION['username'];
        
        $query = "UPDATE users SET password='$newPass' WHERE username ='$username'";
        define('ROOT_URL', '../Home/home.php');
        if(mysqli_query($conn, $query)){
            header('Location: '.ROOT_URL.'');
        } else {
            echo 'ERROR: '. mysqli_error($conn);
        }}
        







?>