<?php
session_start();

if(!isset($_SESSION["email"]))
{
    header("Location: index.php");
}


$conn= mysql_connect("localhost","root","");
$db= mysql_select_db("nikhil_db",$conn);

$rby=$_SESSION["email"];

$by=$_GET["qid"];

$cat=$_POST["ans"];


$sql ="INSERT INTO answer_table VALUES('','$cat','$by','$rby','','')";
mysql_query($sql);

///no of comments on question increasing
$x1="UPDATE question_table set no_of_comments=no_of_comments+1 where qid='$by'";
mysql_query($x1);


///total_xp_part on question increasing
$e=$_SESSION["email"];
$rr="Select * from firstclass where EML='$e'";
$rr1=mysql_query($rr);
while($row = mysql_fetch_array($rr1))
 {
     $xp=$row['xp_level'];
 }
     if($xp<0)
           $increase=0;
         else if($xp>=0 && $xp<20)
           $increase=1;
         else if($xp>=20 && $xp<40)
            $increase=2;
         else if($xp>=40 && $xp<60)
            $increase=4;
         else if($xp>=60)
            $increase=8;

        $x4="UPDATE question_table SET total_xp_part=total_xp_part+$increase where qid='$by'";
         mysql_query($x4);




header("Location: show_question.php?sqid=$by");
?>
