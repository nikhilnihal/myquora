<?php

session_start();

if(!isset($_SESSION["email"]))
{
    header("Location: index.php");
}
?>


<html>

<head> <link rel="stylesheet" href="comment.css" /> </head>
<body class="bod">

<div class="navi">
<?php $bb=$_SESSION["email"];
    echo "welcome";  echo "<a href='member_profile.php?bye=$bb'>"; echo $_SESSION["email"];  echo "</a>"; ?>
 <a href="newlogout.php"> Logout</a>     &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;
 <a href="update.php"> UPDATE YOUR PROFILE </a>    &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;
 <a href="welcome_comment.php"> GO TO MAIN AREA </a>   &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;
</div>


<div class="banner2">
<?php
$conn= mysql_connect("localhost","root","");
$db= mysql_select_db("nikhil_db",$conn);

 $nn=$_GET['bye'];

echo $nn;   echo "<br>";
 $selectSQL="SELECT * FROM firstclass WHERE EML='$nn' ";

 $queryset=mysql_query($selectSQL);

if($queryset === FALSE)
 {
   die(mysql_error()); // TODO: better error handling
 }
 while($row = mysql_fetch_array($queryset))
 {
    echo "NAME :";     echo $row['NAME']; echo "<br>";
    echo "EMAIL-ID:"; echo $row['EML'];  echo "<br>";
    echo "PHONE  :";   echo $row['PHONE']; echo "<br>";
    echo " GENDER : "; echo $row['GENDER']; echo "<br>";
    echo "xp leve" ;  echo $row['xp_level']; echo "<br>";
 }
?>
</div>

</body>
</html>