<?php

session_start();

if(!isset($_SESSION["email"]))
{
    header("Location: index.php");
}

?>



<html>

<head> <link rel="stylesheet" href="comment.css" >  </head>

<body>
   <div class="navi">
   <?php $bb=$_SESSION["email"];
    echo "welcome";  echo "<a href='member_profile.php?bye=$bb'>"; echo $_SESSION["email"];  echo "</a>"; ?>
 <a href="newlogout.php"> Logout</a>     &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;
 <a href="update.php"> UPDATE YOUR PROFILE </a>    &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;
 <a href="welcome_comment.php"> GO TO MAIN AREA </a>   &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;
   </div>

</body>

</html>