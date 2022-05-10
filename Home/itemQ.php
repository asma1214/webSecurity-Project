<?php

include('../connectDB.php');


$query = "SELECT * FROM tools ORDER BY id DESC";
$result = mysqli_query($conn, $query);

// mysqli_free_result($result);
// mysqli_close($conn);


?>