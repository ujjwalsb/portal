<?php  
$host = 'localhost';  
$user = 'root';  
$pass = '';  
$dbname = 'SPortal';  
  
$conn = mysqli_connect($host, $user, $pass,$dbname);  
if(!$conn){  
  die('Could not connect: '.mysqli_connect_error());  
}  
echo 'Connected successfully<br/>';  
  
$sql = "create table login
(
name VARCHAR(20) NOT NULL,
enroll VARCHAR(14),
password VARCHAR(20),
email VARCHAR(20),
branch VARCHAR(10),
semester INT(10),
contact INT(10),
primary key (enroll))"; 
 
if(mysqli_query($conn, $sql)){  
 echo "Table login created successfully";  
}else{  
echo "Could not create table: ". mysqli_error($conn);  
}  
  
mysqli_close($conn);  
?>  
