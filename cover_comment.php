<html>
       <head> <link rel="stylesheet" href="comment.css" >

       <script>
       function verify()
       {
    alert("goit");
        var nx=document.getElementById("n").value;
        alert(nx);
        var ex=document.getElementById("e").value;
        var px=document.getElementById("p").value;
        var cpx=document.getElementById("cpm").value;
        var qg=document.getElementsByName('g');
        alert("aaya");

         if(qg[0].checked==false && qg[1].checked==false)
            {
                alert("Gender not selected");
                return false;
            }
         else if(nx=='')
            {
                    alert("not");
                document.getElementById("msg").innerHTML="Name not filled";
                document.getElementById("n").focus();
                return false;
            }
         else if(ex=='')
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
         else if(cpx=='')
            {                         alert("cp not");
                document.getElementById("msg").innerHTML="password not filled";
                document.getElementById("cp").focus();
                return false;
            }
         else if(cp!=p)
            {
                alert("nt");
                document.getElementById("msg").innerHTML="password not matched";
                document.getElementById("cp").focus();
                return false;
            }
               return true;
       }
       </script>
       </head>
<body>


<div class="frm">
Comment  Book Login/signup
</div>


 <div class="signup">
 SIGNUP SECTION : <br> <br>
 <form action="comment_signup.php" method="post" onsubmit="return verify()">  <!-- verify function(javascript's part) is for check -->
  Username :<input type="text" name="nm" id="n" placeholder="username">    <br>
  Email    :<input type="email" name="em" id="e" placeholder="EMAIL">      <br>
  Password :<input type="password" name="pm" id="p" placeholder="username"> <br>
  Confirm Password : <input type="password" name="cpm" id="cp" placeholder="username"> <br>   <!-- //placeholder is just for show is for check -->
  Gender : <input type="radio" name="g" value="male" >
           <input type="radio" name="g" value="female" >
            <br>
  <input type="submit" />

 <div id="msg"> </div>
 </form>

 </div>


<div class="logg">
 LOGIN SECTION : <br> <br>
<form action="comment_login.php" method="post">
  username :<input type="text" name="nn" />    <br>
  password :<input type="password" name="pp" />  <br> <br>
  <input type="submit" />
</form>
 </div>

</body>
</html>