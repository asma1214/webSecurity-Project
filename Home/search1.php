<?php
// include('../connectDB.php');


// $search= $_POST['search'];
            
// //SQL Query to get foods based on search keyword
// $sql="SELECT * FROM tools WHERE itemName LIKE '%$search%'";
    
// //Execute the query
// $result = mysqli_query($conn, $sql);
    
<<<<<<< HEAD
//Count Rows
$items =mysqli_fetch_all($result, MYSQLI_ASSOC);


            
        //Count Rows
        $count =mysqli_num_rows($result);
        //Check whether food available of not
        if($count>0)
        {
            echo"<div class='error'> <h3><strong> Results for:</strong>$search </h3></div> "; 
          while($item=mysqli_fetch_assoc($result))
          {
            
          }
        }
        else
            {
                echo"<div class='error'> <h3><strong>No results for:</strong>$search </h3><br>Try checking your spelling or use more general terms</div> "; 
            }
          
=======
// //Count Rows

// $tools =mysqli_fetch_all($result, MYSQLI_ASSOC);
// if($tools <1)
// echo"<div class='error'> <h3><strong>No results for:$search </strong></h3><br>Try checking your spelling or use more general terms</div> ";

echo "\\d\\";
>>>>>>> master

?>