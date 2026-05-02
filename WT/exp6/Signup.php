<html> 
<head> 
<title>Sign-up for a new account</title> 
 
<style> 
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
 
.header { 
margin-top: 5px; 
margin-bottom: 5%; 
border: 2px solid #4CAF50; 
padding: 8px; 
font-size: 30px; 
text-align: center; 
} 
.button { 
 
background-color: white; 
color: black; 
padding: 10px 15px; 
text-align: center; 
border-radius: 4px; 
transition-duration: 0.4s; 
font-size: 20px; 
} 
 
</style> 
</head> 
 
<body style="font-family: Veranda, sans-serif;"> 
 
<div class="top_bar"> 
<a href="index.php"><button class="top">Home</button></a> 
<a href="abt.php"><button class="top">About Us</button></a> 
</div> 
<center> 
 
<div style="clear:left;" class="header">Sign-up for a new account</div> 
</center> 
<div> 
 

<form id="sign_up" action="reg_user.php" method="POST"> 
 
<center> 
<table> 
 
<tr><td>First Name:</td><td style="text-align:center;"><input type="text" id="fname" 
name="fname" class="info"></td></tr> 
 
<tr><td>Last Name:</td><td style="text-align:center;"><input type="text" id="lname" 
name="lname" class="info"></td></tr> 
<tr><td>Gender:</td><td style="text-align:center;"><input type="radio" name="gender" 
id="mradio" value="Male" checked>Male &nbsp;&nbsp;&nbsp; <input type="radio" name="gender" 
id="fradio" value="Female">Female</td></tr> 
 
<tr><td>Age:</td><td style="text-align:center;"><input type="text" id="age" name="age" 
class="info"></td></tr> 
<tr><td>Mobile No.:</td><td style="text-align:center;"><input type="text" id="mno" 
name="mno" class="info"></td></tr> 
 
<tr><td>Address:</td><td style="text-align:center;"><input type="text" id="address" 
name="address" class="info"></td></tr> 
<tr><td>Email ID:</td><td style="text-align:center;"><input type="email" id="email" 
name="email" class="info"></td></tr> 
<tr><td>Password:</td><td style="text-align:center;"><input type="password" id="pword" 
name="pword" class="info"></td></tr> 
</table> 
</center><br>  
<center> 
 
<button type="submit" class="button register">Register</button> 
&nbsp;&nbsp;&nbsp;&nbsp; 
&nbsp;&nbsp;&nbsp;&nbsp; 
 
<button type="reset" class="button reset">Reset</button> 
</center> 
</form> 
</div> 
</body> 
</html> 
