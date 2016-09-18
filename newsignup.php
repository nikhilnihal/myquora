<?php

$n1=$_POST["em"];
$n2=$_POST["pm"];

if (isset($_POST["em"]) && !empty($_POST["pm"] && !empty($_POST["em"])))  	//isset($_POST["pm"]))
{
$conn= mysql_connect("localhost","root","");
$db= mysql_select_db("nikhil_db",$conn);

$t=time();
$sql ="INSERT INTO firstclass VALUES('','','$n1','$n2','','','','','','','1','$t')";
mysql_query($sql);

$s1="SELECT ID FROM firstclass where EML='$n1'";
$gt=mysql_query($s1);
 while($row = mysql_fetch_array($gt))
 {
     $y=$row['ID'];
 }

//echo $y;
 $v='user_'.$y;

$sql2="CREATE TABLE $v(
  id INT AUTO_INCREMENT PRIMARY KEY,
  comment_id INT(11)  ,
  comment_up  INT(2) ,
  comment_down INT(2) ,

  reply_id INT(11) ,
  reply_up  INT(2)  ,
  reply_down  INT(2),

  ques_id INT(11) ,
  eiwtk   INT(2)
)";

mysql_query($sql2);

header("Location: index.php");
}
else
{
	header("Location: index.php");
}

?>