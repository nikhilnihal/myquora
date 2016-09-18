<?php
session_start();
if(!isset($_SESSION["email"]))
{
    header("Location: index.php");
}
?>

<html>
<head> <link rel="stylesheet" href="comment.css" /></head>

<body class="bod">

<div class="navi">
<?php $bb=$_SESSION["email"];
    echo "welcome";  echo "<a href='member_profile.php?bye=$bb'>"; echo $_SESSION["email"];  echo "</a>"; ?>
 <a href="newlogout.php"> Logout</a>     &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;
 <a href="update.php"> UPDATE YOUR PROFILE </a>    &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;
 <a href="welcome_comment.php"> GO TO MAIN AREA </a>   &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;
</div>


 <div class="banner">
     WELCOME TO COMMENT BOX
 </div>



<a href="add_ques.php"> ADD A QUESTION </a>

 <div >
<div class="show">
RECENTLY ASKED  QUESTIONS
 <?php
 $conn= mysql_connect("localhost","root","");
$db= mysql_select_db("nikhil_db",$conn);
  $re=$_POST['cate'];
  $sql="select * from question_table where category='$re' ";
  $result=mysql_query($sql);
  while($row=mysql_fetch_assoc($result))
  {
         echo "<div class='inside'>";
         echo "<div class='in'>"; echo "<img src='download.jpg' width='60px' height='35px'>"; echo "</div>";


         $tt=$row['question_by'];
         echo "<a href='member_profile.php?bye=$tt'>"; echo $rby=$row['question_by']; echo "</a>";  echo"<br>";
         $rqid=$row['qid'];
        echo "<a href='view.php?sqid=$rqid'>"; echo $row['question'];  echo "</a>"; echo"<br>";

       // echo "<a href='upvote.php?ja2=$rqid&ok=$re'>";    echo "upvote";    echo "</a>";   echo $row['upvote'];     echo"  ";
       //  echo "<a href='downvote.php?ja2=$rqid&ok=$re'>"; echo "downvote";  echo "</a>";  echo $row['downvote'];    echo"    ";
            echo "views";      echo $row['views'];       echo"     ";

         echo "</div>";
  }
?>
</div>



<div class="show2">
TRENDING QUESTIONS
 <?php                  /// ye mera trending ke liye
 /*
  $conn= mysql_connect("localhost","root","");
$db= mysql_select_db("nikhil_db",$conn);

  $re=$_POST['cate'];
  $sql="select * from question_table where category='$re' ORDER BY upvote DESC";
  $result=mysql_query($sql);
  while($row=mysql_fetch_assoc($result))
  {
         echo "<div class='inside'>";
         echo "<div class='in'>"; echo "<img src='download.jpg' width='60px' height='35px'>"; echo "</div>";
		 
         $tt=$row['question_by'];
         echo "<a href='member_profile.php?bye=$tt'>"; echo $rby=$row['question_by']; echo "</a>";  echo"<br>";
         $rqid=$row['qid'];
        echo "<a href='view.php?sqid=$rqid'>"; echo $row['question'];  echo "</a>"; echo"<br>";

      // echo "<a href='upvote.php?ja2=$rqid'>";    echo "upvote";    echo "</a>";   echo $row['upvote'];     echo"  ";
      //   echo "<a href='downvote.php?ja2=$rqid'>"; echo "downvote";  echo "</a>";  echo $row['downvote'];    echo"    ";
            echo "views";      echo $row['views'];       echo"     ";

         echo "</div>";
  }

*/
?>
</div>

<div class="show3">

<form action="welcome_comment_by_cat.php" method="post" >
 Search by Category <select name="cate">
				 <option></option>
                 <option>C</option>
                 <option>C++</option>
                 <option>JAVA</option>
                </select><br>
 <input type="submit" value="submit">
</form>
</div>
</div>

</body>
</html>