<?php

session_start();

if(!isset($_SESSION["email"]))
{
    header("Location: index.php");
}
?>


<html>

<head> <link rel="stylesheet" href="comment.css" /> </head>

<body class="bod">

<?php echo $_SESSION["email"]; ?>

<a href="newlogout.php"> Logout </a>



<div class="banner">
<?php
  $conn=mysql_connect("localhost","root","");
  $db=mysql_select_db("nikhil",$conn);
  $n1=$_GET['sqid'];                                         ///recieved question id

  $sql="select * from question_table where qid=$n1";
  $result=mysql_query($sql);
  while($row = mysql_fetch_array($result))
  {
    echo $row['question'];
  }
?>
</div>




<?php
  $n1=$_GET['sqid'];
 echo "<form action='add_ans_db.php?qid=$n1' method='POST'>";
 echo "Add Your Answer:" ;  echo  "<input type='text' name='ans'>";
 echo "<input type='submit' >";
 echo "</form>" ;
?>


<div class="show">
  <?php
  $conn=mysql_connect("localhost","root","");
  $db=mysql_select_db("nikhil",$conn);
  $n1=$_GET['sqid'];
  $sql="select * from answer_table where ans_ques_id=$n1";
  $result=mysql_query($sql);

  while($row=mysql_fetch_assoc($result))
  {
         $mem=$_SESSION["email"];
         echo "<div class='inside'>";
         $byy=$row['ans_by'];
         echo "<div class='in'>"; echo "<img src='download.jpg' width='60px' height='35px'>"; echo "</div>";
         echo "<a href='member_profile.php?bye=$byy'>";  echo $row['ans_by']; echo "</a>"; echo"<br>";
         echo $row['answer'];  echo"<br>";
         $qq=$row['ans_id'];
         echo "<a href='replypage.php?rr=$qq&mm=$n1'> Add reply </a>";
         echo "</div>";

             $sql_reply="select * from reply_table where reply_ans_id=$qq";
             $result_reply=mysql_query($sql_reply);

                 while($row_reply=mysql_fetch_assoc($result_reply))
                  {
                   echo "<div class='inside_rep'>";
                   echo "<div class='in_rep'>"; echo "<img src='download.jpg' width='60px' height='35px'>"; echo "</div>";
                   echo "<a href='member_profile.php?bye=$byy'>"; echo $row_reply['reply_by']; echo "</a>"; echo"<br>";
                   echo $row_reply['reply'];  echo"<br>";
                   echo "</div>";
                   }
  }

 ?>
</div>

</body>
</html>