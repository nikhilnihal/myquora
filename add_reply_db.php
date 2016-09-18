<?php
session_start();

if(!isset($_SESSION["email"]))
{
    header("Location: index.php");
}


$conn= mysql_connect("localhost","root","");
$db= mysql_select_db("nikhil_db",$conn);

$rby=$_SESSION["email"];

$by=$_GET["kk"];

$cc=$_GET["bb"];

$cat=$_POST["rep"];


$sql ="INSERT INTO reply_table VALUES('','$cat','$by','$rby')";


mysql_query($sql);

header("Location: show_question.php?sqid=$cc");

?>