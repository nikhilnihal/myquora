
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
              echo   $_POST["comment"]   ;

 if (isset($_POST['comment']))
{
          $commen=$_POST["comment"];
           $sql="INSERT into nik values('$commen' ,'$commen')";
            $qury=mysql_query($sql);                                 ;
             echo "ho gaya";
              header("Location: commentht.php");
}
?>