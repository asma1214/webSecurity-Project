<?php
$password= "ASMA";
$uppercase = preg_match('@[A-Z]@', $password); // must include at least one upper case letter
$lowercase = preg_match('@[a-z]@', $password); // must include at least one lower case letter
$number    = preg_match('@[0-9]@', $password); // must include at least one number
$specialChars = preg_match('@[^\w]@', $password); // must include at least one special character
$len =  strlen($password);

if($name){
    echo "Password must not include your name";
  }
// }
// if(!$number){
//   echo "Password must include at least one number";
// }
// if(!$specialChars){
// echo "Password must include at least one special character";
// }
// else if($len < 8){
// echo"Password must be at least 8 characters in length";
// }
?>
