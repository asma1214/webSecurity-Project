<?php

if(!isset($_SESSION)) 
{ 
	session_start(); // Access the existing session.
} 
require ('../connectDB.php');
// echo "yes";
if(isset($_POST['save'])){
    // echo $_SESSION['userId'];
    $name = htmlspecialchars($_POST['Name']);
    $email = htmlspecialchars($_POST['email']);
    $ID = $_SESSION['userId'];
    $query = "UPDATE users SET name = '$name' , email = '$email' WHERE ID = '$ID' ";
    mysqli_query($conn, $query);
    $_SESSION['name'] = $name;
    $_SESSION['email'] = $email;
    header("Location: adminProfile.php");
    
}

?>