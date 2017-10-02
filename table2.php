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
  
$sql = "create table registration
(
name VARCHAR(20) NOT NULL,
enroll VARCHAR(14),
primary key (enroll),
fname VARCHAR(20),
course VARCHAR(12),
branch VARCHAR(16),
semester VARCHAR(2),
contact VARCHAR(12),
local_add VARCHAR(50),
gaurdian VARCHAR(35),
relation VARCHAR(14),
occupation VARCHAR(20),
income VARCHAR(10),
mob VARCHAR(15),
sgpa VARCHAR(10),
back VARCHAR(3),
regdate VARCHAR(16),
ddelay VARCHAR(15),
paid VARCHAR(13),
recipt VARCHAR(10),
due VARCHAR(14),
cdate VARCHAR(14),
nhos VARCHAR(50),
room VARCHAR(3),
hosamt VARCHAR(10),
hosdue VARCHAR(10),
hoscdate VARCHAR(14)

)"; 
 
if(mysqli_query($conn, $sql)){  
 echo "Table registration created successfully";  
}else{  
echo "Could not create table: ". mysqli_error($conn);  
}  
  
mysqli_close($conn);  
?>  
