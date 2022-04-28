<?php
session_start();
require ('../connectDB.php');
// echo "yes";
if(isset($_POST['edit'])){
    // $name = $_POST['Name']; not safe
    $name = htmlspecialchars($_POST['Name']); //safe
    // $email =$_POST['email']; not safe

    $email = htmlspecialchars($_POST['email']);
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