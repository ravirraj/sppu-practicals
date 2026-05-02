<html> 
 
<head> 
 
<title>Sign-in to your account</title> 
 
<style> 
 
.header { 
margin-top: 5px; 
margin-bottom: 10%; 
border: 2px solid #4CAF50; 
padding: 8px; 
font-size: 30px; 
text-align: center; 
} 
 
.top { 
background-color: #ff5b5b; 
color: white; 
text-align: center; 
padding: 15px 30px; 
font-size: 25px; 
float: left; 
border: none; 
width: 50%; 
margin-bottom: 10px; 
} 
 
.button { 
background-color: white; 
color: black; 
text-align: center; 
padding: 10px 15px; 
transition-duration: 0.4s; 
border-radius: 4px; 
font-size: 20px; 
} 
 
.login { 
text-align: center; 
} 
 
</style> 
 
</head> 
 
<body style="font-family: Veranda, sans-serif;"> 
 
<div class="top_bar"> 
 

<a href="index.php"><button class="top">Home</button></a> 
 
<a href="abt.php"><button class="top">About Us</button></a> 
 
</div> 
 
<center> 
 
<div style="clear: left;" class="header">Sign-in to your Account</div> 
 
<form action="login_validate.php" method="POST"> 
 
<table> 
 
<tr> 
 
<td>Email:</td> 
 
<td style="text-align: center;"><input type="text" id="email" name="email" placeholder="Enter 
your email id" class="login"></td> 
</tr> 
 
<tr> 
 
<td>Password:</td> 
 
<td style="text-align: center;"><input type="password" id="pword" name="pword" 
placeholder="Enter your password" class="login"></td> 
 
</tr> 
 
</table> 
 
<br><br> 
 
<button type="submit" name="submit" class="button s_in">Login</button> 
&nbsp;&nbsp;&nbsp;&nbsp; 
<button type="reset" name="reset" class="button reset">Reset</button> 
 
</form> 
 
</center> 
 
</body> 
 
</html> 
