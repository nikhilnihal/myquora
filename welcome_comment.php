<?php
session_start();
if(!isset($_SESSION["email"]))
{
    header("Location: index.php");
}
?>

<html>
   <head>
   <link rel="stylesheet" href="comment.css" />
    <script type="text/javascript" src='jquerykubda.js'></script>
     <script>

     function ajax2(abc)
       {
         var email=abc;
         $.get("eiwtk.php",{ja:email});//,function (data,status){} );
         alert(abc);
       }

       </script>

  </head>

  
  
<body class="bod">

<div class="navi">
<?php $bb=$_SESSION["email"];
    echo "welcome";  echo "<a href='member_profile.php?bye=$bb'>"; echo $_SESSION["email"];  echo "</a>"; ?>
 <a href="newlogout.php"> Logout</a>     &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;
 <a href="update.php"> UPDATE YOUR PROFILE </a>    &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;
 <a href="welcome_comment.php"> GO TO MAIN AREA </a>   &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;
</div>


 <div class="banner">
     WELCOME TO KaliTeerth Discussion Forum
 </div>

<a href="add_ques.php"> ADD A QUESTION </a>

 <div>
<div class="show">
RECENTLY ASKED  QUESTIONS
 <?php
$conn= mysql_connect("localhost","root","");
$db= mysql_select_db("nikhil_db",$conn);

  $sql="select * from question_table  order by qid desc";
  $result=mysql_query($sql);
  $i=0;
  while($row=mysql_fetch_assoc($result))
  {
         echo "<div class='inside".$i."'>";
         echo "<div class='in'><img src='download.jpg' width='60px' height='35px'></div>";


         $tt=$row['question_by'];
        

		echo "<a href='member_profile.php?bye=$tt'>"; echo $rby=$row['question_by']; echo "</a>";  echo"<br>";
         $rqid=$row['qid'];
   echo "<a href='view.php?sqid=$rqid'>"; echo $row['question'];  echo "</a>"; echo"<br>";

   //echo "<a href='eiwtk.php?ja=$rqid'>"; echo "EIWTK"; echo "</a>";echo $row['EIWTK'];echo"    ";

   echo "<a href='#inside".$i."' onclick='ajax2(".$rqid.")'>EIWTK</a>";echo $row['EIWTK'];echo"    ";

   echo "views";      echo $row['views'];       echo "     ";

         echo "</div>";
         $i++;
  }
?>
</div>





<div class="show2">
TRENDING QUESTIONS
 <?php                  /// ye mera trending ke liye
  $conn=mysql_connect("localhost","root","");
  $db=mysql_select_db("nikhil_db",$conn);

    //user xp cal
     $e=$_SESSION["email"];
     $rr="Select * from firstclass where EML='$e'";
      $rr1=mysql_query($rr);
       $row = mysql_fetch_array($rr1);
        $y=$row['xp_level'];

         if($y<20)                 ///user is newbie
           { $a=0 ; $b=20;}
         else if($y<40)            ///user is of 1st level
             { $a=20 ; $b=40;}
         else if($y<60)            ///user is of 2nd level
            { $a=40 ; $b=60;}
         else                       ///user is of 3rd level
            { $a=60 ; $b=100000;}
  $sql="select * from question_table where (total_xp_part/(no_of_comments+1)) between $a and $b ORDER BY views+EIWTK+no_of_comments DESC";
  //$sql="select * from question_table ORDER BY views+EIWTK+no_of_comments DESC;
   mysql_query($sql);


  $result=mysql_query($sql);
  while($row=mysql_fetch_assoc($result))
  {
         echo "<div class='inside'>";
         echo "<div class='in'>"; echo "<img src='download.jpg' width='60px' height='35px'>"; echo "</div>";


         $tt=$row['question_by'];
         echo "<a href='member_profile.php?bye=$tt'>"; echo $rby=$row['question_by']; echo "</a>";  echo"<br>";
         $rqid=$row['qid'];
        echo "<a href='view.php?sqid=$rqid'>"; echo $row['question'];  echo "</a>"; echo"<br>";



        echo "<a href='' onclick='ajax2($rqid)'>"; echo "EIWTK"; echo "</a>";echo $row['EIWTK'];echo"    ";
            echo"    ";
            echo "views";      echo $row['views'];       echo"     ";

         echo "</div>";
  }
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