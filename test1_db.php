<?php

$conn= mysql_connect("localhost","root","");
$db= mysql_select_db("nikhil",$conn);

$v1=$_GET['mail2'];


$sql="SELECT * from test_table WHERE (EMAIL='$v1')";

$qury=mysql_query($sql);

$result =mysql_num_rows($qury);

if($result>0)
 echo "already present found";

?>
