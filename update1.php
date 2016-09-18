<?php
session_start();
if(!isset($_SESSION["email"]))
{
    header("Location: index.php");
}

?>

<html>
<head>
       <script>
       function abc()
       {
       //var a=document.getElementById("se").value;
        alert("gjh");

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
  username     :<input type="text" name="un" />    <br> <br>
  email        : <input type="email" name="em" value=" <?php echo $_SESSION["email"];?>" />    <br> <br>
  password     :<input type="password" name="pw" />  <br> <br>
  phone number :<input type="number" name="pn" />  <br> <br>
  language     :<select name="s" id="se" onchange="abc()">
                 <option>C</option>
                 <option>C++</option>
                 <option>JAVA</option>
                </select><br>
                <input type="text" name="l1" id="b1"/>
                <input type="text" name="l2" id="b2"/>
                <input type="text" name="l3" id="b3"/>  <br> <br>
  college      :<input type="text" name="cl" />  <br> <br>
  GENDER       :MALE <input type="radio" name="bt" value="male"/>
                FEMALE<input type="radio" name="bt" value="female"/>  <br>  <br>
                 <a href="#hahah" onclick="javascript:alert('lflfl');">hjj</a>
                 <input type="submit" value="upadte your profile"/>

</form>
</body>
</html>