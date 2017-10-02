<html>
<head>
<link rel="stylesheet" type="text/css" href="h1.css"/>
<style>

.center	
{text-align:center;}

.header{margin:-8px -8px 0px;
background:linear-gradient(#999999,#CCCCCC);
color:green;
text-align:center;
padding:10px;
}


.container{width:100%;}

.textleft{width:15%;
float:left;}

.textright{width:15%;
float:right;}

.body{width:100%; float:left; 
padding:0px;}

.border{border-style:solid; border-width:2px;}

.footer{margin:-8px -8px 0px;
clear:both;
background:linear-gradient(#999999,#CCCCCC);
color:#000000;
text-align:center;
padding:10px;}


.active {
    background-color: #4CAF50;
    color: white;
}

.log {
    background-color: red;
    color: white;
}

.reg {
    background-color:#CCCC66;
    color: black;
	}


ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
 
    top: 35%;
    width: 101.2%;
    margin:0px -8px 0px;
}

li {
    float: left;
    border-right:1px solid #bbb;
}


li a, .dropbtn {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}


li a:hover, .dropdown:hover .dropbtn {
    background-color:#6666FF;
}

li.dropdown {
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}



</style>
<title>Registration Page</title>
</head>
<body>

<div class="header">
<img src ="header.png" width="1300" height="150" align="top">
</div>

<div class="body">
<ul>
  <li><a  href="home.php">HOME</a></li>
  <li><a class="active" href="../Registration.php">REGISTRATION</a></li>
  

<li class="dropdown">
    <a href="#" class="dropbtn">TIME TABLE</a>
    <div class="dropdown-content a">
      <a href="timetable/bs.htm" target="_blank">Basic Science</a>
	   <a href="timetable/ce.htm" target="_blank">Civil Engineering</a>
      <a href="timetable/me.htm" target="_blank">Mechanical Engineering</a>
    <a href="timetable/cs.htm" target="_blank">Computer Science & Engineering</a>
       <a href="timetable/ex.htm" target="_blank">Electrical & Electronics Engineering</a>
      <a href="timetable/ec.htm" target="_blank">Electronics & Communication Engineering</a>
         
</div>
  </li>

   <li> <a href="syllabus/syllabuslist.html">SYLLABUS</a>
</li>

<li class="dropdown">
    <a href="#" class="dropbtn">FACULTY INFO</a>
    <div class="dropdown-content">
      <a href="faculty info/bstable.html">Basic Science</a>
      <a href="faculty info/cetable.html">Civil Engineering</a>
      <a href="faculty info/metable.html">Mechanical Engineering</a>
<a href="faculty info/cstable.html">Computer Science & Engineering</a>
       <a href="faculty info/extable.html">Electrical & Electronics Engineering</a>
      <a href="faculty info/ectable.html">Electronics & Communication Engineering</a>
         
</div>
  </li>

  <li style="float:right"><a class="log" href="logout.php">Log Out</a></li>
<li style="float:right"><a class="reg" href="registered_students/registeredlist.html">View Registered Students</a></li>

</ul>

<br>
<h4 class="center">BE.(CS,EC,CE,ME,EX,IT), MBA, B-Pharmacy, D-Pharmacy, M-Pharm. & M.Tech.</h4>
<h3 class="center"><u>REGISTRATION FORM</u></h3>
<h4 align="center"><u>Personal Information:-</u></h4>

<?php 
include("connect.php");
if(isset($_POST['submit'])){
$name=$_POST['nm'];
$enroll=$_POST['en'];
$fname=$_POST['fn'];
$branch=$_POST['br'];
$semester=$_POST['sem'];
$contact=$_POST['con'];

$local_add=$_POST['badd'];
$gaurdian=$_POST['lg'];
$relation=$_POST['rel'];

$income=$_POST['in'];
$mob=$_POST['mb'];
$sgpa=$_POST['per'];
$back=$_POST['bk'];
$regdate=$_POST['date'];
$ddelay=$_POST['delay'];
$paid=$_POST['amt'];
$recipt=$_POST['rno'];
$due=$_POST['due'];
$cdate=$_POST['cdate'];
$nhos=$_POST['nhos'];
$room=$_POST['room'];
$hosamt=$_POST['hosamt'];
$hosdue=$_POST['hosdue'];
$hoscdate=$_POST['hoscdate'];






$sql = "INSERT INTO registration(name,enroll,fname,branch,semester,contact,local_add,gaurdian,income,mob,sgpa,back,regdate,ddelay,paid,recipt,due,cdate,nhos,room,hosamt,hosdue,hoscdate) VALUES ('$name','$enroll','$fname','$branch','$semester','$contact','$local_add','$gaurdian','$income','$mob','$sgpa','$back','$regdate','$ddelay','$paid','$recipt','$due','$cdate','$nhos','$room','$hosamt','$hosdue','$hoscdate')";  
if(mysqli_query($conn, $sql)){  
echo '<script language="javascript">';
echo 'alert("You Are Successfully Registered !!")';
echo '</script>'; 
}else{   
echo '<script language="javascript">';
echo 'alert("An Error Occured While Registering You, Please Check All The Fields Crefully Again !!")';
echo '</script>'; 
} 
}
mysqli_close($conn);  
?> 

<form method="post" action="registration.php">
<table cellpadding="4" cellspacing="5" align="center">
<tr><td>Name of student</td><td><input type="text" name="nm" required></td><td>Father's Name</td><td><input type="text" name="fn" required></td></tr>

<tr><td>course</td><td><input type="text" name="cor" required></td>
<td>Branch</td><td><input type ="text" placeholder="CS/ME/CE/EX/EC" name = "br" required></td>
<td>Semester</td><td><input type ="text" placeholder="1/2/3/4/5/6/7/8" name ="sem" required></td></tr>

<tr><td>Enrollment No.</td><td><input type="text" name="en" required></td>
<td>Contact</td><td><input type ="text" name ="con" required></td></tr>

<tr><td>Bhopal add</td><td><input type="text" name="badd"/></td></tr>

<tr><td>Name if Parent/Guardian in Bhopal</td><td><input type="text" name="lg"/></td>
<td>Your relation with above Parent</td><td><input type="text" name="rel"/></td></tr>
<tr><td>Occupation of Parent</td><td><input type="radio" name="occup"  value= "Service"/>Service</td><td><input type="radio" name="occup" value="Bussiness"/>Bussiness</td></tr>
<tr><td>Name Of The Compny</td><td><input type="text"></tr>
<tr><td>Annual Income of The Parent</td><td><input type="text" name="in"/></td><td>Mob.No.</td><td><input type = "text" name="mb" required></td></tr>
</table>
<br> <br> <hr>
<h3 align="center"><u>Last semester Result:-</u></h3>
<table border="2" cellpadding="2" align="center">
<tr>
<th>Branch</th>
<th>sem</th>
<th>percentage</th>
<th>no. of back pepers</th>
</tr>
<tr>
<td>
<input type="text" id="branch" ></td>
<td>
<input type="text" id="sem" ></td><td>
<input type="text" name="per" ></td><td>
<input type="text" name="bk" ></td>
</tr></table>
<br><br>
<table cellpadding="2" align="center">

<tr><td>Date of Registration</td><td><input type="text" placeholder="DD/MM/YYYY" name="date" required></td><td>Total Days of Delay-</td><td><input type="text" name="delay" required></td></tr>
</table><br><br>
<hr>
<h3 align="center"><b><u>College Fee Details:-</u></b></h3>
<table cellpadding="2" align="center">

<td><b>College Fees Paid(Amount)-</b></td><td><input type="text" name="amt" required></td><td></td><td> <b>Receipt No.-</b></td><td><input type="text" name="rno"></td></tr>
<tr><td><b>Date-</b></td><td><input type="text" placeholder="DD/MM/YYYY" id="date" required></td></tr><tr><td><b>Due Amount-</b></td><td><input type="text" name="due" required></td></tr><tr><td><b>Committed Date-</b></td><td><input type="text" placeholder="DD/MM/YYYY" id="date" name="cdate" required></td></tr>
</table>

<br><br>
<hr>
<h3 align="center"><b><u> Hostel Fee Details(Only for hostler):-</u></b></h3>
<table cellpadding="2" align="center">

<td><b>Name of Hostel</b></td><td><input type="text" name="nhos"></td><td><b>Room no-</b></td><td><input type="text" name="room"></td></tr><tr><td> <b>Paid Amount-</b></td><td><input type="text" name="hosamt"></td>
<td><b>Due Amount-</b></td><td><input type="text" name="hosdue"></td></tr>
</tr><tr><td><b>Committed Date-</b></td><td><input type="text" placeholder="DD/MM/YYYY" name="hoscdate"></td></tr>
</table><br>



<table cellpadding="2" align="center">
<br><br>
<tr><td></td><td><input type="submit" name="submit" value="SUBMIT" /><td></td><td></td><td></td><td><input type="reset" value="RESET"></td></tr>

</table>
</form>

 


<div class="footer">
<p>copyright@Minor_Project</p></div>
</body>
</html>
