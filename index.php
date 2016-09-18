<html>
       <head> <link rel="stylesheet" href="comment.css" >

       <script>
       function verify()
       {
          alert("goit");

        alert(nx);
        var ex=document.getElementById("e").value;
        var px=document.getElementById("p").value;

        alert("aaya");
         if(ex=='')
            {
                    alert("e not");
                document.getElementById("msg").innerHTML="Email not filled";
                document.getElementById("e").focus();
                return false;
            }
         else if(px=='')
            {                alert("p not");
                document.getElementById("msg").innerHTML="password not filled";
                document.getElementById("p").focus();
                return false;
            }


               return true;
       }
       </script>
       </head>
<body>


<div class="frm">
KaliTeerth Discussion Forum
</div>


 <div class="signup">
 SIGNUP SECTION : <br> <br>
 <form action="newsignup.php" method="post" onsubmit="return verify()">  <!-- verify function(javascript's part) is for check -->
  Email    :<input type="email" name="em" id="e" placeholder="EMAIL">      <br>
  Password :<input type="password" name="pm" id="p" placeholder="username"> <br>
    <!-- //placeholder is just for show is for check -->
  <input type="submit" />

 <div id="msg"> </div>
 </form>
 </div>


<div class="logg">
 LOGIN SECTION : <br> <br>
<form action="logincheck.php" method="post">
  email :<input type="text" name="nn" />    <br>
  password :<input type="password" name="pp" />  <br> <br>
  <input type="submit" />
</form>
 </div>

</body>
</html>
