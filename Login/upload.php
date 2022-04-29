<?php
session_start();
if(isset($_POST['submit'])){
        
        if(isset($_FILES['upload'])){
            $upload_dir = "assets/img/userImg/";
            $file_name = $_FILES["upload"]["name"];
            $uploaded_type = $_FILES[ 'upload' ][ 'type' ];
            $uploaded_size = $_FILES[ 'upload' ][ 'size' ];
        
            // echo $file_name;
            $path = pathinfo($file_name);
            // $newFileName = $_SESSION['username'];
            $newFileName =$_SESSION['username'];
            $ext = $path['extension'];
            $tmp_name = $_FILES['upload']['tmp_name'];
            $fullPath = $upload_dir . $newFileName."." .$ext;
            $FileNoExt=$upload_dir . $newFileName; 
            
            //start here to remove 
            array_map('unlink', glob($FileNoExt.".*"));
            $moved = move_uploaded_file($tmp_name, $fullPath);
           //till here to remove 
           


          
            
           /* 

            To prvent file uploded Attack 
            
            if( ( $uploaded_type === 'image/jpeg' || $uploaded_type === 'image/png' || $uploaded_type === 'image/jpg') && ( $uploaded_size < 100000 )   ) {
                array_map('unlink', glob($FileNoExt.".*")); 
                $moved = move_uploaded_file($tmp_name, $fullPath); }  
           */

                
           
            



            // if( $moved ) {
            //     echo "Successfully uploaded";         
            //   } else {
            //     echo "Not uploaded because of error #".$_FILES["upload"]["error"];
            //   }
            //   if (is_dir($upload_dir) && is_writable($upload_dir)) {
            //     // do upload logic here
            //     echo "<br> yes";
            // } else {
            //     echo '<br>Upload directory is not writable, or does not exist.';
            // }
            
            // move_uploaded_file($_FILES['upload']['tmp_name'], 'userImg/' . $_FILES['upload']['name']);
            
            if($_SESSION['Pr'] == 'a'){
            header("Location: adminProfile.php");

            } 
            else {
                header("Location: userProfile.php");
                

            }
        }
    
    
}

?>