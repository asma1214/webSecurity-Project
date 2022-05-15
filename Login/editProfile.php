<?php

if(!isset($_SESSION)) 
{ 
	session_start(); // Access the existing session.
} 
require ('../connectDB.php');
// echo "yes";
if(isset($_POST['save'])){
    $edit = false;
    // $name = $_POST['Name']; not safe
    $name = htmlspecialchars($_POST['Name']); //safe
    // $email =$_POST['email']; not safe
    $email = htmlspecialchars($_POST['email']);
    $ID = $_SESSION['userId'];
    $query = "UPDATE users SET name = '$name' , email = '$email' WHERE ID = '$ID' ";

    if(mysqli_query($conn, $query)){
        $edit = true;
        $_SESSION['name'] = $name;
        $_SESSION['email'] = $email;
    }

    
}

?>