<?php
session_start();


$conn= mysql_connect("localhost","root","");
$db= mysql_select_db("nikhil_db",$conn);

if(!isset($_SESSION["email"]))
{
    header("Location: newlogin.php");
}


echo "welcome   "; echo $_SESSION["email"];

$n1=$_POST["un"];

echo $n1;

$n2=$_POST["pn"];

$n3=$_POST["bt"];

$n4=$_POST["l1"];

$n5=$_POST["l2"];

$n6=$_POST["l3"];

$n7=$_POST["cl"];


$sql ="UPDATE firstclass SET NAME='$n1', PHONE='$n2', GENDER='$n3', LANGUAGE1='$n4', LANGUAGE2='$n5', LANGUAGE3='$n6',COLLEGE='$n7' where EML='$_SESSION[email]'";

mysql_query($sql);

header("Location: newwelcome.php");

?>