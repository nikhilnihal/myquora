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


<div class="cbox">

<?php
$n1=$_GET['rr'];
$n2=$_GET['mm'];

echo "<form action='add_reply_db.php?kk=$n1&bb=$n2' method='post' >";  ///  <!--this is for recievingas well as sending-->
   echo  "Add Reply"; echo "<input class='box' type='text' name='rep'>"; echo"<br>";
   echo "<input type='submit' value='submit'>";
  echo "</form>";
?>

</div>
</body>


 </html>