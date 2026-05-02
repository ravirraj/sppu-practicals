<?php 
require 'db_connect.php'; 
session_start(); 
if($_SESSION['email']=='') { 
?> 
 
<script>alert('Please login to the system first!'); 
location.href="s_in.php";</script> 
<?php 
 
} else { 
$rollno = $_POST['rollno']; 
 
$fname = $_POST['fname']; 
 
$lname = $_POST['lname']; 
 
$gender = $_POST['gender']; 
 
$mno = $_POST['mno']; 
 
if($fname!='' && $lname!='' && $gender!='' && $mno!='') { 
 
$query = "UPDATE s_info SET 
first_name='$fname', last_name='$lname', gender='$gender', mobile_number='$mno' 
WHERE rollno='$rollno'"; 
if(mysqli_query($conn, $query)) { 
 
?> 
<script>alert('Updated Successfully!'); 
location.href="s_info.php"; 
</script> 
<?php 
 
} 
else { 
echo 'Error: '.mysqli_error($conn); 
} 
} else { 
?> 
 
<script>alert('Please fill in all fields!'); 
location.href="update.php?rollno=<?php echo $rollno; ?>";</script> 
<?php 
 
} 
} 
?> 
