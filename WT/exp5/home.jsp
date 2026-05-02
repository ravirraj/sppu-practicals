<html> 
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1"> 
<title>Student Information</title> 
<%@ page import="java.sql.*"%> 
<%@ page import="javax.sql.*"%> 
<%@ page import="java.io.*"%> 
</style> 
</head> 
<body style="font-family: Veranda, sans-serif;"> 
  <center> 
    <div class="header">Student Information</div> 
    <br><br><br> 
    <% 
    try { 
      //Class.forName("com.mysql.cj.jdbc.Driver"); 
      Connection conn = 
DriverManager.getConnection("jdbc:mysql://localhost:3306/stud", "root", ""); 
  
  
  
  
  
  
  
  
  
  
  
  
String sql = "select * from reg"; 
PreparedStatement pst = conn.prepareStatement(sql); 
ResultSet rs = pst.executeQuery();
 
out.print("<table border=3px solid red>"); 
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
} catch 
  
} %> 
//width=\"100%\"> 
out.print("<tr>"); 
out.print("<th colspan='2'>C3 Student Information</th>"); 
out.print("</tr>"); 
out.print("<tr>"); 
out.print("<th>Name</th>"); 
out.print("<th>Branch</th>"); 
out.print("</tr>"); 
while (rs.next()) { 
  out.print("<tr>"); 
  out.print("<td>"); 
  out.print(rs.getString("name")); 
  out.print("</td>"); 
  out.print("<td>"); 
  out.print(rs.getString("branch")); 
  out.print("</td>"); 
  out.print("</tr>"); 
} 
(Exception e) { 
System.out.println(e); 
  
  
  
  
<hr /> 
<% 
 
      %>  
 
  
  
  
<a href="index.html" style="hover: green;"> 
<button class="button logout">Logout</button></a> 
  
</body> 
</html> 
