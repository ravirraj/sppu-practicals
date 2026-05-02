<?php 
require 'db_connect.php'; 
session_start(); 
if($_SESSION['email']=='') { 
?> 
<script>alert('Please login to the system first!'); 
location.href="s_in.php";</script> 
<?php 
}  
else { 
$rollno = isset($_GET['rollno']) ? $_GET['rollno'] : ''; // Ensure rollno is set 
$rollno = mysqli_real_escape_string($conn, $rollno); // Sanitize input to prevent SQL injection 
$query = "SELECT * FROM s_info WHERE rollno='$rollno'"; 
$result = mysqli_query($conn, $query); 
if ($result && mysqli_num_rows($result) > 0)  
  
else { 
echo '<script>alert("Student record not found!"); location.href="s_info.php";</script>'; 
exit(); // Exit to prevent further execution 
} 
} 
?> 
<html> 
<head><title>Update Student Information</title> 
<style> 
 
.header { 
margin-top: 5px; 
margin-bottom: 5%; 
border-left: 2px solid #4CAF50; 
border-top: 2px solid #4CAF50; 
border-right: 2px solid #008CBA; 
border-bottom: 2px solid #008CBA; 
padding: 8px; 
font-size: 30px; 
text-align: center; 
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
 
 
 

</style>  
</head> 
<body style="font-family: Verdana, sans-serif;"> 
<center> 
 
div class="header">Update Existing Record</div> 
 
<br><br><br> 
 
<form action="update_rec.php?rollno=<?php echo htmlspecialchars($rollno); ?>" method="POST"> 
 
<table> 
 
<tr><td>First Name:</td><td style="text-align:center;"><input type="text" 
id="fname" 
name="fname" value="<?php echo htmlspecialchars($info['first_name']); ?>" 
class="updtrec"></td></tr> 
 
<tr><td>Last Name:</td><td style="text-align:center;"><input type="text" id="lname" 
 
name="lname" value="<?php echo htmlspecialchars($info['last_name']); ?>" class="updtrec"></td></tr> 
 
<tr><td>Gender:</td><td style="text-align:center;"><input type="text" id="gender" 
 
name="gender" value="<?php echo htmlspecialchars($info['gender']); ?>" class="updtrec"></td></tr> 
 
<tr><td>Mobile No.:</td><td style="text-align:center;"><input type="text" 
 
id="mno" name="mno" value="<?php echo htmlspecialchars($info['mobile_number']); ?>" 
class="updtrec"></td></tr> 
</table> 
 
<br><br> 
 
<button type="submit" name="submit" class="button update">Update</button> 
&nbsp;&nbsp;&nbsp;&nbsp; 
<button type="reset" name="reset" class="button reset">Reset</button> 
 
</form> 
</center> 
 
<a href="s_info.php"><button style="position:absolute; top:12%; left:3%;" 
class="button back">Back</button></a> 
</body> 
</html> 
