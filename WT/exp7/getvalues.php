<!DOCTYPE html> 
 
<html> 
<head> 
<title>  </title> 
</head> 
<body> 
 
<?php 
$role=$_GET['p']; 
if($role==1) 
{ 
$sel_role="Developer"; 
} else if($role==2) 
{ 
$sel_role="Tester"; 
 
} else if($role==3) 
{ 
$sel_role="Technician"; 
 
} else if($role==4) 
{ 
$sel_role="Salesperson"; 
} 
 
$conn=mysqli_connect("localhost","root","","ajax"); 
 
$result=mysqli_query($conn,"select * from employee_data where role='$sel_role'"); 
echo "<table width='50%'> 
<tr style='background-color:#ff5b5b;color:white;'> 
 
<th>id</th> 
 
<th>name</th> 
 
<th>salary</th> 
 
<th>email</th> 
 
</tr>"; 
 
while ($row=mysqli_fetch_array($result)) 
{ 
echo "<tr>"; 
 
echo "<td>".$row['id']."</td>"; 
 

echo "<td>".$row['name']."</td>"; 
 
echo "<td>".$row['salary']."</td>"; 
 
echo "<td>".$row['email']."</td>"; 
 
echo"</tr>"; 
 
} echo "</table>"; 
 
?> 
 
</body> 
 
</html> 
