<html>

<head> <link rel="stylesheet" href="comment.css" /></head>

<body class="bod">

 <div class="banner">
     WELCOME TO COMMENT BOX
 </div>


 // fetch query section
<div class="show">
 <?php
  $conn=mysql_connect("localhost","root","");
  $db=mysql_select_db("nikhil",$conn);
  $sql="select * from nik";
  $result=mysql_query($sql);
  while($row=mysql_fetch_assoc($result))
  {
         echo "<div class='inside'>";

            echo "<div class='in'>"; echo '<img src="download.jpg" width="60px" height="35px">'; echo "</div>";
         echo $row['name'];  echo"<br>";
         echo $row['comment'];   echo"<br>";
         echo "</div>";
  }
?>
</div>


 <div class="cbox">
 <form action="insert_comment.php" method="post" >
  <input class="box" type="text" name="comment"> <br> <br>
  <input type="submit" value="submit">
 </form>
 </div>

</body>
</html>