<?php  
$host = 'localhost';  
$user = 'root';  
$pass = '';  
$conn = mysqli_connect($host, $user, $pass);  
if(! $conn )  
{  
  die('Could not connect: ' . mysqli_connect_error());  
}  
echo 'Connected successfully<br/>';  
  
$sql = 'CREATE Database SPortal';  
if(mysqli_query( $conn,$sql)){  
  echo "Database SPortal created successfully.";  
}else{  
echo "Sorry, database creation failed ".mysqli_error($conn);  
}  
mysqli_close($conn);  
?>  