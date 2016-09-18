
<?php
   $conn=mysql_connect("localhost","root","");
   $db=mysql_select_db("nikhil",$conn);
?>


<?php
echo "hii";
  $user = $_POST['nm'];
  $pass = $_POST['pm'];
  $email= $_POST['em'];
  $gen  = $_POST['g'];
  $sql  = "INSERT into member values('$user','$pass','$email','$gen',')";
  $qury = mysql_query($sql);
  echo "signup successful";
  header("Location: cover_comment.php");
?>





