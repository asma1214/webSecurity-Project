
<?php
include('../connectDB.php');
$search = "%Bitmain Antminer S19 Pro (110Th)%";

//Create prepared statment
$stmt = mysqli_stmt_init($conn);
// $search= htmlspecialchars($_POST['search']);
            
//SQL Query to get foods based on search keyword
$sql="SELECT * FROM tools WHERE itemName LIKE ?";
mysqli_stmt_prepare($stmt, $sql);
mysqli_stmt_bind_param($stmt, "s", $search);
mysqli_stmt_execute($stmt);
$res = mysqli_stmt_get_result($stmt);
// if (!mysqli_stmt_prepare($stmt, $sql)) {
//   echo "Failed";   
// }

// else{
    // $row = mysqli_fetch_assoc($res);
    // foreach($row as $e){
    //     echo $e['itemName'];
    // }
    while($row = mysqli_fetch_assoc($res)){
        echo $row['itemName'] . "<br>";
        echo $row['img'] . "<br>";

    }
    
//   mysqli_stmt_bind_param($stmt , 's' , "%$search%");
//   mysqli_stmt_execute($stmt);
//   $result = mysqli_stmt_get_result($stmt);
//   $items = mysqli_fetch_assoc($result, MYSQLI_ASSOC);
//   echo $item['itemName'];


// }




?>