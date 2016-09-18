<?php

session_start();
if(!isset($_SESSION["email"]))
{
    header("Location: index.php");
}
$conn= mysql_connect("localhost","root","");
$db= mysql_select_db("nikhil_db",$conn);


$aya=$_GET['sqid'];

echo $aya;



$sql ="UPDATE question_table SET views=views+1  where qid=$aya";

mysql_query($sql);

header("Location:show_question.php?sqid=$aya");

?>