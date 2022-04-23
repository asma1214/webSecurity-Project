<?php
include('../connectDB.php');


$search= $_POST['search'];
            
//SQL Query to get foods based on search keyword
$sql="SELECT * FROM tools WHERE itemName LIKE '%$search%'";
    
//Execute the query
$result = mysqli_query($conn, $sql);
    
//Count Rows
$tools =mysqli_fetch_all($result, MYSQLI_ASSOC);

?>