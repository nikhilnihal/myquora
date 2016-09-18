<?php

session_start();
if(!isset($_SESSION["email"]))
{
    header("Location: index.php");
}

$conn= mysql_connect("localhost","root","");
$db= mysql_select_db("nikhil_db",$conn);


$aya1=$_GET['ja'];    /// ye "ja" welcome_comment se aaya hai

//$aya2=$_GET['ja2'];   /// ye "ja2" welcome_comment_by_cat se aaya hai

if(isset($aya1))
{
 $sql ="UPDATE question_table SET upvote=upvote+1  where qid=$aya1";
 mysql_query($sql);
 header("Location: welcome_comment.php");
}

/*else if(isset($aya2))
 {
  $mila=$_GET['ok'];
   $sql ="UPDATE question_table SET upvote=upvote+1  where qid=$aya2";
 mysql_query($sql);
 header("Location: welcome_comment_by_cat.php?cate=$mila");
 }
*/
?>