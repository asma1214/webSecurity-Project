<?php
include('../connectDB.php');


$s= htmlspecialchars($_POST['search']);
$search = "%$s%";

//Create prepared statment
$stmt = mysqli_stmt_init($conn);
            
//SQL Query to get foods based on search keyword
$sql="SELECT * FROM tools WHERE itemName LIKE ?";
  
//Prepare prepared statment
if(!mysqli_stmt_prepare($stmt, $sql)){
  echo "Faild";
}
else {
  //Bind parameter to the placeholder
  mysqli_stmt_bind_param($stmt, "s", $search);

  //Run the prepared statment
  mysqli_stmt_execute($stmt);
  $res = mysqli_stmt_get_result($stmt);
  // $items = mysqli_fetch_assoc($res);


}
//Execute the query
// $result = mysqli_query($conn, $sql);
    
//Count Rows
// $items =mysqli_fetch_all($result, MYSQLI_ASSOC);


            
        //Count Rows
        
          

?>