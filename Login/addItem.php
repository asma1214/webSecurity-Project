<?php 
require ('../connectDB.php');


if(isset($_POST['addItem'])){
    $name = htmlspecialchars($_POST['name']);
    $price = htmlspecialchars($_POST['price']);
    $quantity = htmlspecialchars($_POST['quan']);
    $desc = htmlspecialchars($_POST['desc']);
    $img = $_FILES['upload']['name'];
    // echo $img;
    $query = "INSERT INTO tools (itemName, description, quantity, price, img) VALUES ('$name' , '$desc', '$quantity' , '$price' , '$img' )";
    mysqli_query($conn, $query);  
    $upload_dir = "../Home/assets/img/miners/";
    $file_name = $img;
    // echo $file_name.'<br>';
    $path = pathinfo($file_name);
    $ext = $path['extension'];
    $tmp_name = $_FILES['upload']['tmp_name'];
    $fullPath = $upload_dir . $file_name;
    $moved = move_uploaded_file($tmp_name, $fullPath);
 
    header("Location: adminProfile.php");
        
    // echo $name . "<br>" . $price . "<br>" . $quantity . "<br>" . $desc . "<br>" . $img;
}

?>