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
<title>SIGN UP</title>
</head>

<body>
<div class="header">
<img src ="header.png" width="1300" height="150" align="top"></div>


<div class="container">

<h2 class="center"><img src="images/icon_new_student.jpg"</h2>
<h3 class="center"><u><b>Please Enter Your Details To Sign Up</b></u></h3><br>
<div class="center body">

<div class="border">
<form method="post" action="sign.php">
<table align="center">
<br><br>
<tr><td><b>Name</b></td><td><input type="text" name="nm" /></td></tr>
<tr><td><b>Enrollment No.</b></td><td><input type="text" name="username" /></td></tr>
<tr><td><b>Password</b></td><td><input type="password" name="pass" /></td></tr>
<tr><td><b>Email</b></td><td><input type="email" name="em" /></td></tr>
<tr><td><b>Branch</b></td><td><input type ="text" name = "br"/></td></tr>
<tr><td><b>Semester</b></td><td><input type ="text" name ="sem"/></td></tr>
</table><br>
<table align="center">
<tr><td colspan="2"><input type="submit" name="submit" value="SAVE DETAILS"/></td></tr>

</table>
<br><br>
<table align="center">
<tr><td>Already have an account?<a href="mainlogin.php">&nbsp;Sign In here.</a></td></tr>
</table></div></div>
</form>

<?php  
include("connect.php");
if(isset($_POST['submit'])){
$name=$_POST['nm'];
$username=$_POST['username'];
$password=$_POST['pass'];
$email=$_POST['em'];
$branch=$_POST['br'];
$semester=$_POST['sem'];

$sql = "INSERT INTO login(name,username,password,email,branch,semester) VALUES ('$name','$username','$password','$email','$branch','$semester')";  
if(mysqli_query($conn, $sql)){  

echo "<script>alert('You Are Successfully Signed Up!!')</script>";
echo "<script>window.open('mainlogin.php','_self')</script>";

}
else{  
echo "<script>alert('Please Check Your Details Again!!')</script>";
echo "<script>window.open('sign.php','_self')</script>";
}  
}
mysqli_close($conn);  
?>  


<div class="footer">
<p>copyright@Minor_Project</p></div>
</body>
</html>
