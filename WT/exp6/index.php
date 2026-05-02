<?php 
session_start(); 
if(!isset($_SESSION['email'])) 
{ 
             $_SESSION['email'] = ''; 
} 
?> 
<html> 
<head><title>Home Page</title> 
<style> 
.button { 
background-color: white; 
color:black; padding:5px;  
text-align: center; 
padding: 15px 30px; 
transition-duration: 0.4s; 
border-radius: 4px; 
font-size: 25px; 
} 
.top { 
background-color: #ff5b5b; 
color: white; 
padding : 5px; 
text-align: center; 
padding: 15px 30px; 
font-size: 25px; 
float: left; 
border: none; width: 
50%; 
} 
 
</style> 
</head> 
 
<body style="font-family: Verdana, sans-serif;"> 
<div class="top_bar"> 
<a href="index.php"><button class="top">Home</button></a> 
<a href="abt.php"><button class="top">About Us</button></a> 
</div> 
<center> 
<a style="clear: left;" href="s_in.php"><button style="margin-top: 10%;" class="button s_in">Sign- 
in</button></a> 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
 
<a href="s_up.php"><button class="button s_up">Sign-up</button></a> 
</center> </body> 
</html> 
