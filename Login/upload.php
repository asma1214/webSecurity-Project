<?php
session_start();
if(isset($_POST['submit'])){
        if(isset($_FILES['upload'])){
            $upload_dir = "userImg/";
            $file_name = $_FILES["upload"]["name"];
            // echo $file_name;
            $path = pathinfo($file_name);
            // $newFileName = $_SESSION['username'];
            $newFileName =$_SESSION['username'];
            $ext = $path['extension'];
            $tmp_name = $_FILES['upload']['tmp_name'];
            $fullPath = $upload_dir . $newFileName."." .$ext;
            $moved = move_uploaded_file($tmp_name, $fullPath);
            
            // move_uploaded_file($_FILES['upload']['tmp_name'], 'userImg/' . $_FILES['upload']['name']);
            header("Location: adminProfile.php");
        }
    
    
}

?>