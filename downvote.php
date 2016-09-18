<?php

session_start();
if(!isset($_SESSION["email"]))
{
    header("Location: newlogin.php");
}

$conn= mysql_connect("localhost","root","");
$db= mysql_select_db("nikhil_db",$conn);


$aya=$_GET['ja'];

echo $aya;

$sql ="UPDATE question_table SET downvote=downvote+1  where qid=$aya";

mysql_query($sql);

header("Location: welcome_comment.php");

?>