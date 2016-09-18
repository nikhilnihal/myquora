<?php
   // echo"cbcbcb";
    //die();
session_start();
if(!isset($_SESSION["email"]))
{
    header("Location: newlogin.php");
}

$conn= mysql_connect("localhost","root","");
$db= mysql_select_db("nikhil_db",$conn);


$aya=$_GET['ja'];
//echo $aya;

$e=$_SESSION["email"];
$rr="Select * from firstclass where EML='$e'";
$rr1=mysql_query($rr);
while($row = mysql_fetch_array($rr1))
 {
     $y=$row['ID'];
 }

//echo $y;
$uid='user_'.$y;
//echo $uid;

$pp1="Select * from $uid where ques_id=$aya";
$pp1=mysql_query($pp1);
$number=mysql_num_rows($pp1);

if($number>=1)
{
//echo $aya;
      while($row = mysql_fetch_array($pp1))
        {
           $u=$row['eiwtk'];
        }

      if($u==1)
      {
        //  header("Location: welcome_comment.php");
      }
      else
      {

      }
  //    echo 'if';
     // die();
}
else
{ //echo 'else';

  $sql ="UPDATE question_table SET eiwtk=eiwtk+1  where qid=$aya";
  mysql_query($sql);

  $sql2="INSERT into $uid values('','','','','','','','$aya','1')";
        mysql_query($sql2);
       // die();
}

//echo "over";
//header("Location: welcome_comment.php");

?>