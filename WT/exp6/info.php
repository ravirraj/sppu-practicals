<?php 
require 'db_connect.php'; 
session_start(); 
if ($_SESSION['email'] == '') { 
?> 
 
<script>alert('Please login to the system first!'); 
location.href="s_in.php";</script> 
<?php 
 
} else { 
 
$query = "SELECT * FROM s_info"; 
$result = mysqli_query($conn, $query); 
$info = []; 
if ($result && mysqli_num_rows($result) > 0) { 
 
$info = mysqli_fetch_all($result, MYSQLI_ASSOC); 
mysqli_free_result($result); 
mysqli_close($conn); 
 
} 
} 
?> 
 
<html> 
<head> 
<title>Student Information</title> 
<style> 
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
text-align: center; 
padding: 10px 15px; 
transition-duration: 0.4s; 
border-radius: 4px; 
font-size: 20px; 
} 
 
tr:nth-child(even) { 
background-color: #efefef; 
} 
 

.tablebtn { 
background-color: white; 
color: black; 
padding: 5px 5px; 
text-align: center; 
 
text-decoration: none; 
display: inline-block; 
transition-duration: 0.4s; 
border-radius: 4px; 
border: 1px solid #ff5b5b; 
} 
 
.tablebtn:hover { 
background-color:#ff5b5b; 
color: white; 
} 
 
</style> 
</head> 
 
<body style="font-family: Veranda, sans-serif;"> 
<center> 
 
<div class="header">Student Information</div> 
<br><br><br> 
 
<table width="100%"> 
<tr> 
<th colspan="6">C3 Student Information</th> 
</tr> 
 
<tr style="background-color: #ff5b5b; color: white;"> 
 
<th>Roll No.</th> 
<th>First Name</th> 
<th>Last Name</th> 
<th>Gender</th> 
 <th>Mobile No.</th> 
<th>Action</th> 
</tr> 
 
<?php foreach ($info as $row) { ?> 
<tr> 
<td><?php echo isset($row['rollno']) ? $row['rollno'] : ''; ?></td> 
<td><?php echo isset($row['first_name']) ? $row['first_name'] : ''; ?></td> 
<td><?php echo isset($row['last_name']) ? $row['last_name'] : ''; ?></td> 
<td><?php echo isset($row['gender']) ? $row['gender'] : ''; ?></td> 
<td><?php echo isset($row['mobile_number']) ? $row['mobile_number'] : ''; ?></td> 
<td> 
 
<a href="update.php?rollno=<?php echo isset($row['rollno']) ? $row['rollno'] : ''; ?>" 
class="tablebtn">Update</a> 

 
&nbsp;&nbsp;&nbsp;&nbsp; 
 
<a href="delete.php?rollno=<?php echo isset($row['rollno']) ? $row['rollno'] : ''; ?>" 
class="tablebtn">Delete</a> 
 
</td> 
</tr> 
 
<?php } ?> 
</table> 
 
<a href="insert.php"><button type="button" name="insert" class="button insert" style="margin- 
top: 5%;">Insert</button></a> 
 
<a href="logout.php"><button style="position: absolute; top: 12%; right: 3%;" class="button 
logout">Logout</button></a> 
</center> 
</body> 
</html> 
