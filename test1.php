<html>


<head>
  <link rel="stylesheet" href="comment.css" />
  <script type="text/javascript" src='jquerykubda.js'></script>
       <script>
       function verify()
       {

       if(document.getElementById("nn").value=="")
	        return false;

	   else if(document.getElementById("ee").value=="")
	   return false;

	   else if(document.getElementById("pp").value=="")
	   return false;

       else
       return true;
       }

       function ajax1()
       {
       var email=document.getElementById("nn").value;
       $.get("test1_db.php",{mail:email},function (data,status){ alert(data); alert(status)});
       }

        function ajax2()
       {
       var email=document.getElementById("ee").value;
       $.get("test1_db.php",{mail2:email},function (data,status){ alert(data)});
       }

       </script>
</head>




<body>
 <form action="test2_db.php"  method="post" onsubmit="return verify()">
 NAME :     <input type="text"     name="n"  id="nn">     <br>  <br>   <br>  <br>
 EMAIL-ID : <input type="email"    name="e"  id="ee" onblur='ajax2()'>     <br>   <br>  <br>

 PASSWORD : <input type="password" name="p"  id="pp">    <br>    <br>  <br>
            <input type="submit">
 </form>
</body>

</html>