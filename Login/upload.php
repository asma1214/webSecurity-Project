<?php
session_start();
if(isset($_POST['submit'])){
        if(isset($_FILES['upload'])){
            $upload_dir = "assets/img/userImg/";
            $file_name = $_FILES["upload"]["name"];
            // echo $file_name;
            $path = pathinfo($file_name);
            // $newFileName = $_SESSION['username'];
            $newFileName =$_SESSION['username'];
            $ext = $path['extension'];
            $tmp_name = $_FILES['upload']['tmp_name'];
            $fullPath = $upload_dir . $newFileName."." .$ext;

            if( ( $ext == "jpeg" || $ext == "png" ) && ( $uploaded_size < 100000 ) ) {
    
                // Can we move the file to the upload folder?
                if( !move_uploaded_file($tmp_name, $fullPath) ) {
                    // No
                    echo '<pre>Your image was not uploaded.</pre>';
                }
                else {
                    // Yes!
                    echo "<pre> Succesfully uploaded!</pre>";
                }
            }
            else {
            // Invalid file
            echo '<pre>Your image was not uploaded. We can only accept JPEG or PNG images.</pre>';
            } 

            
            //$moved = move_uploaded_file($tmp_name, $fullPath);
            
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
            header("Location: adminProfile.php");
        }
    
    
}

?>