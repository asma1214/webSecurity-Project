<html>

<form action="index.php?page=new.php" method="POST">
  <p>user ID:</p>
<input type="text" size="15" name="id">
<input type="submit" name="Submit" value="Submit">
</form>
<?php if(isset($_GET['Submit'])){
  echo "hi " . "h h";
} 
?>



</html>