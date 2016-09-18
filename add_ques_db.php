<?php
session_start();

if(!isset($_SESSION["email"]))
{
    header("Location: index.php");
}


$conn= mysql_connect("localhost","root","");
$db= mysql_select_db("nikhil_db",$conn);

echo "welcome   "; echo $_SESSION["email"];

$by=$_SESSION["email"];

$cat=$_POST["cate"];

$que=$_POST["ques"];

$sql ="INSERT INTO question_table VALUES('','$que','$cat','$by','','','','')";

mysql_query($sql);
header("Location: welcome_comment.php");
?>