<?php session_start();
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="h1.css"/>
<style>

.center	{text-align:center;}
.header{margin:-8px -8px 0px;background:linear-gradient(#999999,#cccccc);color:green;text-align:center;padding:10px;}
.container{width:100%;}
.body{width:84%;float:left; padding:0px;}
.border{border:2px solid red;border-radius:25px; margin:0px 120px 170px 350px;}
.footer{margin:-8px -8px 0px;
clear:both;
background:linear-gradient(#999999,#cccccc);
color:#000000;text-align:center;padding:10px;}

</style>
<title>Log In</title>
</head>

<body>
<div class="header">
<img src ="header.png" width="1300" height="150" align="top"></div>

<div class="container">

<h2 class="center"><img src="images/stud.jpg"></h2>
<h4 class="center"><u><b>Please Enter Your Details To Log In or Sign Up</b></u></h2>

<div class="center body">

<form action="checklogin.php" class="center border" method="post" >
<p><br><br>
<!--<input type="radio"  name="user" value="user" required>New User 

&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 

<input type="radio"  name="user" value="user" required>Existing User <br><br><br> -->
<b>User Name &nbsp;&nbsp;&nbsp;&nbsp;</b> 
<input type="textbox" placeholder="User Name" class="center" id="username" name ="username" style="width:300px;" required>
<br><br>
<b >Password &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b>
<input type="password" placeholder="Password" class="center" id="password"  name="password" style="width:300px;" required>
<br><br><br><br>
 <input type = "submit" value="LOGIN" name="login"> <input type="reset" value="RESET">
<br><br>
<hr>
<h5>Don't have an account?<a href="sign.php">Sign Up here</h5> </a>
</div>
</div>
<div class="footer">
<p>copyright@Minor_Project</p></div>
</body>

</html>
