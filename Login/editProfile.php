<?php
session_start();
require ('../connectDB.php');
// echo "yes";
if(isset($_POST['edit'])){
    // echo $_SESSION['userId'];
    $name = $_POST['Name'];
    $email =$_POST['email'];
    $ID = $_SESSION['userId'];
    $query = "UPDATE users SET name = '$name' , email = '$email' WHERE ID = '$ID' ";
    mysqli_query($conn, $query);
    $_SESSION['name'] = $name;
    $_SESSION['email'] = $email;
    $pr = $_SESSION['Pr'];
    if($pr == 'u'){
    header("Location: userProfile.php");
    }
    else {
        header("Location: adminProfile.php");
    }
    
}

?>