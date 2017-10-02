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
<title></title>
</head>
<body>
<div class="header">
<img src ="header.png" width="1300" height="150" align="top"></div>

<div class="container">
<table align="center" border="1">
<tr>
<th>Enroll</th><th>Name</th><th>Fathers name</th><th>Semester</th><th>BRANCH</th><th>contact</th><th>Paid Amount</th><th>Due Amount</th><th>Commited Date</th>
</tr>
<?php  
include("connect.php");
$sql = "select * from registration";
$result=mysqli_query($conn, $sql); 
 if(mysqli_num_rows($result)>0){
 while($row=mysqli_fetch_assoc($result))
 {
 echo"<tr>";
  
  echo"<td>".$row['enroll']."</td>";
  echo"<td>".$row['name']."</td>";
  echo"<td>".$row['fname']."</td>";
   echo"<td>".$row['semester']."</td>";
    echo"<td>".$row['branch']."</td>";
	echo"<td>".$row['contact']."</td>";
		echo"<td>".$row['paid']."</td>";
			echo"<td>".$row['due']."</td>";
				echo"<td>".$row['cdate']."</td>";
	 
	echo"</tr>";
	}
	}
	else 
	echo "no record found";
 
mysqli_close($conn);  
?>  


</table></div>
<div class="footer">
<p>copyright@Minor_Project</p></div>
</body>
</html>

