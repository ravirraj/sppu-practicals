<?php 
require 'db_connect.php'; 
session_start(); 
if($_SESSION['email'] == '') 
{ 
?> 
 
<script>alert('Please login to the system first!'); location.href="s_in.php";</script> 
<?php 
 
} 
else { 
$rollno = $_POST['rollno']; 
$fname = $_POST['fname']; 
$lname = $_POST['lname']; 
$gender = $_POST['gender']; 
$mno = $_POST['mno']; 
 
if($fname != '' && $lname != '' && $gender != '' && $mno != '') 
 
{ 
$query = "INSERT INTO s_info (rollno, first_name, last_name, gender, mobile_number) 
VALUES ('$rollno', '$fname', '$lname', '$gender', '$mno')"; 
if(mysqli_query($conn, $query)) 
 
{ 
?> 
 
<script>alert('Inserted Successfully!'); location.href="s_info.php";</script> 
 
<?php 
 
} 
else { 
 
echo 'Error: '.mysqli_error($conn); 
} 
} 
else { 
?> 
<script>alert('Please fill in all fields!'); location.href="insert.php";</script> 
 
<?php 
 
}  
} 
?> 
