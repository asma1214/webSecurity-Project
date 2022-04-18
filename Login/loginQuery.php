<?php
    require ('../connectDB.php');
    $query = 'SELECT * FROM users';
    $result = mysqli_query($conn , $query);
    $names = mysqli_fetch_all($result , MYSQLI_ASSOC);
?>