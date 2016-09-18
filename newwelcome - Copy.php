<?php

session_start();

if(!isset($_SESSION["email"]))
{
    header("Location: index.php");
}
          echo "welcome"; echo $_SESSION["email"];
?>

<html>
 <a href="newlogout.php"> Logout</a>  <br>

 <a href="update.php"> UPDATE YOUR PROFILE </a>   <br>

 <a href="welcome_comment.php"> GO TO MAIN AREA </a>   <br>

</html>