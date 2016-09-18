<?php
session_start();

$conn= mysql_connect("localhost","root","");
$db= mysql_select_db("nikhil_db",$conn);

$n1=$_POST["nn"];
$n2=$_POST["pp"];
echo $n1;
echo $n2;

$sql="SELECT * from firstclass WHERE (EML='$n1' and PASSWORD='$n2')";

$qury=mysql_query($sql);

 $result =mysql_num_rows($qury);   ///this will return the rows

   if($result>0)
  {
     echo "successful";
     echo "welcome";
     $_SESSION["email"]=$n1;   ///global variable creation
     header ("Location:newwelcome.php");
  }
  else
  {
	 header ("Location:index.php"); 
  }

?>