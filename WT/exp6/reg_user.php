<?php 
require 'db_connect.php';  
 
// Sanitize input 
 
$fname = mysqli_real_escape_string($conn, $_POST['fname']); 
 
$lname = mysqli_real_escape_string($conn, $_POST['lname']); 
 
$gender = mysqli_real_escape_string($conn, $_POST['gender']); 
 
$age = mysqli_real_escape_string($conn, $_POST['age']); 
 
$mno = mysqli_real_escape_string($conn, $_POST['mno']); 
 
$address = mysqli_real_escape_string($conn, $_POST['add']); 
 
$email = mysqli_real_escape_string($conn, $_POST['email']); 
 
$pword = mysqli_real_escape_string($conn, $_POST['pword']); 
 
 
// Check if all fields are filled 
 
if (!empty($fname) && !empty($lname) && !empty($gender) && !empty($age) && !empty($mno) && 
!empty($address) && !empty($email) && !empty($pword)) { 
 
// Insert user data into the database 
$query = "INSERT INTO registration_details (`fname`, `lname`, `gender`, `age`, `mno`, `address`, 
`email`, `pword`) 
 
VALUES ('$fname', '$lname', '$gender', '$age', '$mno', '$address', '$email', '$pword')"; 
 
if (mysqli_query($conn, $query)) { 
 
// Registration successful  
echo '<script>alert("Registered Successfully!"); location.href="s_in.php";</script>'; 
} else { 
 
// Display error if insertion fails 
echo '<script>alert("Error: ' . mysqli_error($conn) . '"); 
location.href="s_up.php";</script>'; 
} 
} else { 
// Alert user to fill in all fields echo '<script>alert("Please fill in all fields!"); 
location.href="s_up.php";</script>'; 
 
} 
?> 
