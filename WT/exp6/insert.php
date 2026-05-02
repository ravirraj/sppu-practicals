<?php 
session_start(); 
if($_SESSION['email'] == '') 
 
{ 
?> 
 
<script>alert('Please login to the system first!'); location.href="s_in.php";</script> 
<?php 
 
} 
?> 
<html> 
<head><title>Insert Student Information</title> 
 
<style> 
 
.header { 
margin-top:5px; 
margin-bottom:5%; 
border-left:2px solid #4CAF50; 
border-top:2px solid #4CAF50; 
border-right:2px solid #008CBA; 
border-bottom:2px solid #008CBA; 
padding:8px; 
font-size:30px; 
text-align:center; 
} 
 
.button { 
background-color:white; 
color:black; 
text-align:center; 
padding:10px 15px; 
transition-duration:0.4s; 
border-radius:4px; 
font-size:20px; 
} 
 
</style> 
</head> 
<body style="font-family:Veranda,sans-serif;"> 
<center> 
 
<div class="header">Insert Records to Table</div> 
<br><br><br> 
 
<form action="insert_rec.php" method="POST"> 
 
 
 

<table> 
 
<tr><td>Roll No:</td><td style="text-align:center;"><input type="text" 
id="rollno" name="rollno" placeholder="Enter roll no" class="addrec"></td></tr> 
<tr><td>First Name:</td><td style="text-align:center;"><input type="text" 
id="fname" name="fname" placeholder="Enter first name" class="addrec"></td></tr> 
<tr><td>Last Name:</td><td style="text-align:center;"><input type="text" 
id="lname" name="lname" placeholder="Enter last name" class="addrec"></td></tr> 
<tr><td>Gender:</td><td style="text-align:center;"><input type="text" id="gender" 
name="gender" placeholder="Enter the gender" class="addrec"></td></tr> 
<tr><td>Mobile No.:</td><td style="text-align:center;"><input type="text" id="mno" 
 
name="mno" placeholder="Enter the mobile no" class="addrec"></td></tr> 
 
</table> <br><br> 
 
<button type="submit" name="submit" class="button insert">Insert</button> 
&nbsp;&nbsp;&nbsp;&nbsp; 
<button type="reset" name="reset" class="button reset">Reset</button> 
 
</form> 
</center> 
 
<a href="s_info.php"><button style="position:absolute; top:12%; left:3%;" 
class="button back">Back</button></a> 
</body> 
</html> 
