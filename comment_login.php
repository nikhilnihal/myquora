

<?php
   session_start();
   $conn=mysql_connect("localhost","root","");
   $db=mysql_select_db("nikhil",$conn);

 $user = $_POST["nn"];
 $pass = $_POST["pp"];
 $sql  = "SELECT count(*) FROM member WHERE (name='$user' AND password='$pass')";
  $qury = mysql_query($sql);
  $result =mysql_num_rows($qury);


   if($result>0)
  {
    echo "successful";
     echo "welcome";
     $_SESSION["username"]=$user;
     header("Location: welcome_comment.php?name=$user");     //we are sending(or rediresting) a variable called name in welcome_comment page
     exit;
  }
  else
  {
    echo"login ";
    echo "not welcome";
  }
 ?>