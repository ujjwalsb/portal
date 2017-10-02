<?php
$conn = mysqli_connect("localhost","root","","sportal");

if (mysqli_connect_error())

{

echo "MySQLi Connection was not established: " . mysqli_connect_error();

}


if(isset($_POST['login'])){

$username = mysqli_real_escape_string($conn,$_POST['username']);

$password = mysqli_real_escape_string($conn,$_POST['password']);

$sel_user = "select * from login where username='$username' AND password='$password'";

$run_user = mysqli_query($conn, $sel_user);

$check_user = mysqli_num_rows($run_user);

if($check_user>0){

$_SESSION['username']=$username;

echo "<script>window.open('home.php','_self')</script>";

}

else {

echo "<script>alert('Username or Password Is Incorrect, Please try again!!')</script>";
echo "<script>window.open('mainlogin.php','_self')</script>";

}

}
?>