

<html>
<head>
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
<title>Forget Password</title>
</head>
<body>

<div class="header">
<img src ="header.png" width="1300" height="150" align="top"></div>


<div class="container">
<div class="center">

<form method="post" autocomplete="off" id="password_form">
<p align="center">
<table>
<tr><td>Enter Your Contact No.</td><td></td><td> <input type="text" name="contact" /></td></tr>
<tr><td>New password</td><td></td><td> <input type="password" name="password"  id="password" class="ser" /></td></tr>
<tr><td>Confirm password</td><td></td><td> <input type="password" name="confirm_pwd" id="confirm_pwd" class="ser" /></td></tr>
</table>
<p align="center">
 <table>
 <tr><td><input name="submit" type="submit" value="Save Password" class="submit" /></td></tr></table>
</p>
<div class="<?=(@$msg_sucess=="") ? 'error' : 'green' ; ?>" id="logerror">
 <?php echo @$error; ?><?php echo @$msg_sucess; ?>
</div>
</form>

<?php
$dbname= new mysqli('localhost','root','','sportal');

 if(isset($_POST['contact'])){
     $contact=$_POST['contact'];
	 $password=$_POST['password'];
	
	 

extract($_POST);
if($contact!="" && $contact!="" && $confirm_pwd!="") :
  $contact = 'contact';
  $contact=md5(mysqli_real_escape_string($db,$_POST['contact']));
  $pwd=md5(mysqli_real_escape_string($db,$_POST['password']));
  $c_pwd=md5(mysqli_real_escape_string($db,$_POST['confirm_pwd']));
  if($pwd == $c_pwd) :
  if($contact!=$contact) :
    $sql="SELECT * FROM `login` WHERE  `contact` ='$contact'";
    $dbname_check=$dbname->query($sql);
    $count=mysqli_num_rows($db_check);
  if($count==1) :
    $fetch=$db->query("UPDATE `login` SET `password` = '$pwd' WHERE `contact`='$contact'");
    $contact=''; $password =''; $confirm_pwd = '';
    $msg_sucess = "Your new password update successfully.";
  else:
    $error = "The contact you gave is incorrect.";
  endif;
  else :
    $error = "Old password new password same Please try again.";
  endif;
  else:
    $error = "New password and confirm password do not matched";
  endif;
  else :
    $error = "Please fil all the fields";
  endif;   
}  
?> 

<div class="footer">
<p>copyright@Minor_Project</p></div>
</body>
</html>