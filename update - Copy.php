<?php
session_start();
if(!isset($_SESSION["email"]))
{
    header("Location: newlogin.php");
}

$conn= mysql_connect("localhost","root","");
$db= mysql_select_db("nikhil",$conn);

$sql="SELECT * from firstclass where EMAIL='$_SESSION[email]'";

$num=mysql_query($sql);
$row=mysql_fetch_array($num);
//$v1=$row["NAME"];
?>


<html>
<head>
       <script>
       function abc()
       {
       var a=document.getElementById("se").value;
       if(document.getElementById("b1").value=="")
	   document.getElementById("b1").value=a;
	   else if(document.getElementById("b2").value=="")
	   document.getElementById("b2").value=a;
	   else if(document.getElementById("b3").value=="")
	   document.getElementById("b3").value=a;

       }
       </script>
</head>
<body>
<?php
echo "welcome   ";
 echo $_SESSION["email"];
?>


 <a href="newlogout.php"> Logout1</a>  <br>
<form action="completeupdate.php" method="post">
  username     :<input type="text" name="un" value="<?php echo $row['NAME']; ?>" />    <br> <br>
  email        : <input type="email" name="em" value=" <?php echo $_SESSION['email'];?>" />    <br> <br>
  password     :<input type="text" name="pw"  value="<?php echo $row['PASSWORD']; ?> " />  <br> <br>
  phone number :<input type="text" name="pn" value="<?php echo $row['PHONE']; ?> "/>  <br> <br>
  language     :<select name="s" id="se" onchange="abc()">
				 <option></option>
                 <option>C</option>
                 <option>C++</option>
                 <option>JAVA</option>
                </select><br>
                <input type="text" name="l1" id="b1" value="<?php echo $row['LANGUAGE1']; ?>"/>
                <input type="text" name="l2" id="b2" value="<?php echo $row['LANGUAGE2']; ?>"/>
                <input type="text" name="l3" id="b3" value="<?php echo $row['LANGUAGE3']; ?>"/>  <br> <br>
  college      :<input type="text" name="cl" value="<?php echo $row['COLLEGE']; ?>"/>  <br> <br>

  GENDER       :MALE <input type="radio" name="bt" value="male"/ <?php if($row['GENDER']="male")echo "checked"; ?>>
                FEMALE<input type="radio" name="bt" value="female"/ <?php if($row['GENDER']="female")echo "checked"; ?>>  <br>  <br>

                 <input type="submit" value="upadte your profile"/>

</form>
</body>
</html>