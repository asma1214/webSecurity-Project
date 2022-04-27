<?php
include('../connectDB.php');

$query = "SELECT * FROM tools ORDER BY id";
$result = mysqli_query($conn, $query);
$tools = mysqli_fetch_all($result, MYSQLI_ASSOC);

$ID = $tools['id'];
$name = $tools['itemName'];
$des = $tools['description'];
$num = $tools['quantity'];
$price = $tools['price'];
$image = $tools['img'];


?>