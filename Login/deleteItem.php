<?php
require('../connectDB.php'); 
if(isset($_POST['delete'])){
  $delete = false;

    $id = htmlspecialchars($_POST['id']);
    // echo "yes   " . $id;
    $query = "SELECT * FROM tools WHERE id = '$id' ";
    $objc= mysqli_query($conn, $query);
    $result = mysqli_fetch_assoc($objc);
    $name= $result['img'];
    $dir = "../Home/assets/img/miners/";
    $fullpath = $dir . $name;
    if(mysqli_num_rows($objc) > 0){
      $query1 = "DELETE FROM tools WHERE id = '$id' ";
      $name =  mysqli_query($conn, $query1);
      mysqli_query($conn, $query1);
      if (unlink($fullpath)) {
          $delete = true;
           
    }
  
  }
}


?>