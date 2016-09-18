<?php

session_start();
if(!isset($_SESSION["email"]))
{
    header("Location: index.php");
}

$conn= mysql_connect("localhost","root","");
$db= mysql_select_db("nikhil",$conn);


$aya=$_GET['ja'];
$bh=$_GET['qid'];

//echo $aya;

$e=$_SESSION["email"];

$rr="Select * from firstclass where EML='$e'";
$rr1=mysql_query($rr);
while($row = mysql_fetch_array($rr1))
 {
     $y=$row['ID'];
     $xp=$row['xp_level'];
 }

//echo $y;
$uid='user_'.$y;
//echo $uid;

$pp1="Select * from $uid where comment_id=$aya";
$pp1=mysql_query($pp1);
$number=mysql_num_rows($pp1);


if($number>=1)
{
        while($row = mysql_fetch_array($pp1))
        {
           $u=$row['comment_up'];
           $d=$row['comment_down'];
        }
		
        echo "<br>'$u' and '$d'";
        if($u==1)
        {
         header("Location: show_question.php?sqid=$bh");
        }

        else if($u==0 && $d==0)
        {
        $sql ="UPDATE answer_table SET a_upvote=a_upvote+1  where ans_id='$aya'";
        mysql_query($sql);
        $sql ="UPDATE $uid SET comment_up=1 , comment_down=0  where comment_id='$aya'";
        mysql_query($sql);
        }

        else if($u==0 && $d>=1) // downvote 1 tha
         {
        $sql ="UPDATE answer_table SET a_upvote=a_upvote+1 , a_downvote=a_downvote-1 where ans_id='$aya'";
        mysql_query($sql);
        $sql ="UPDATE $uid SET comment_up=1 , comment_down=0  where comment_id='$aya'";
        mysql_query($sql);


        $x1="select * from answer_table where ans_id=$aya";
        $x2= mysql_query($x1);
         $row = mysql_fetch_array($x2);
          $x3=$row['ans_by'];

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

        $x4="UPDATE firstclass SET xp_level=xp_level+$increase where EML='$x3'";
         mysql_query($x4);
          // echo $x3;
         }
}


else
{
        $sql ="UPDATE answer_table SET a_upvote=a_upvote+1  where ans_id=$aya";
        mysql_query($sql);

        $sql2="INSERT into $uid values('','$aya','1','','','','','','')";
        mysql_query($sql2);

        $x1="select * from answer_table where ans_id=$aya";
        $x2= mysql_query($x1);
         $row = mysql_fetch_array($x2);
          $x3=$row['ans_by'];

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

        $x4="UPDATE firstclass SET xp_level=xp_level+$increase where EML='$x3'";
         mysql_query($x4);
          // echo $x3;

}

header("Location: show_question.php?sqid=$bh");

?>