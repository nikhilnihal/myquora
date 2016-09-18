
 <?php
  $conn=mysql_connect("localhost","root","");
  $db=mysql_select_db("nikhil",$conn);
  if($db)
  {
          echo 'done';
  }
  else
  {
      echo 'not done';
  }


 if (isset($_POST['comment']))
{
          $commen=$_POST["comment"];
          $naam=$_GET['name'];                                   //this is receiving
           $sql="INSERT into nik values('$naam' ,'$commen')";
            $qury=mysql_query($sql);                                 ;
             echo "ho gaya";
              header("Location: welcome_comment.php");
}
?>