<?php

$conn= mysql_connect("localhost","root","");
$db= mysql_select_db("nikhil",$conn);

$v1=$_POST['n'];
$v2=$_POST['e'];
$v3=$_POST['p'];


$sql="INSERT INTO test_table VALUES ('$v1','$v2','$v3')";

$qury=mysql_query($sql);

echo "welcome u r registerd";

?>
