<?php
session_start();
?>

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
<title>Home Page</title>
</head>
<body>

<div class="header">
<img src ="header.png" width="1300" height="150" align="top">
</div>

<div class="body">
<ul>
  <li><a class="active" href="home.php">HOME</a></li>
  <li><a href="Registration.php">REGISTRATION</a></li>
  

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
  <p align="right" id="demo"></p>

<script >
document.getElementById("demo").innerHTML = Date();
</script> 
<img src="images/patient portal.jpg">






<br><br><br><br>
<div class="footer">
<p>copyright@Minor_Project</p></div>
</html>
