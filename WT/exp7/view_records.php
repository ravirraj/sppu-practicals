<!DOCTYPE html> 
<html> 
<head> 
<title>View Employee Details</title> 
 
<script type="text/javascript"> 
function showUser(role_val) { 
var xmlhttp = new XMLHttpRequest(); 
xmlhttp.onreadystatechange = function() { 
if (this.readyState == 4 && this.status == 200) { 
console.log('Result:' + this.responseText); 
document.getElementById("table1").innerHTML = this.responseText; 
 
} 
}; 
 
xmlhttp.open("GET", "getvalues.php?p=" + role_val, true); 
xmlhttp.send(); 
} 
 
</script> 
<style type="text/css"> 
 
.header { 
 
margin-top: 3%; 
 
margin-bottom: 5%; 
border: 2px solid #4CAF50; 
padding: 8px; 
font-size: 30px; 
text-align: center; 
} 
table { 
 
text-align: center; 
border-collapse: collapse; 

 font-size: 20px; 
} 
 
tr:nth-child(even) { 
 
background-color: #efefef; 
 
} 
 
select { 
width: 130px; 
height: 30px; 
} 
</style> 
</head> 
 
<body> <center> 
 
<div class="header">View Employee Details</div> 
<form> 
<div> 
 
<select name="users" onchange="showUser(this.value)"> 
 
<option value="select">Select a person:</option> 
 
<option value="1">Developer</option> 
<option value="2">Tester</option> 
<option value="3">Technician</option> 
<option value="4">Salesperson</option> 
</select> </div> 
 
</form> <br><br><br> 
<div id="table1"></div> 
</center> </body> 
</html> 
