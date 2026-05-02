<%@page contentType="text/html" pageEncoding="UTF-8"%> 
<!DOCTYPE html> 
<html> 
<head> 
<meta http-equiv="Content-Type" content="text/html; 
charset=UTF- 8"> 
<title>Sign In JSP</title> 
<%@ page import="java.sql.*"%> 
<%@ page import="javax.sql.*"%> 
<%@ page import="java.io.*"%> 
</head> 
<body> 
  <% 
  String user = request.getParameter("username"); 
  String pword = request.getParameter("password"); 
  try { 
    //Class.forName("com.mysql.jdbc.Driver"); 
    Connection conn = 
DriverManager.getConnection("jdbc:mysql://localhost:3306/stud", "root", ""); 
    String sql = "select * from reg where username=? and password=?"; 
    PreparedStatement pst = conn.prepareStatement(sql); 
    pst.setString(1, user); 
    pst.setString(2, pword); 
    ResultSet rs = pst.executeQuery(); 
  
  
  
%> 
if (rs.next()) { 
  <jsp:forward page="home.jsp" /> 
  <% 
  } else { 
  %> 
  <jsp:forward page="Signin.html" /> 
  <% 
  } 
  } catch (Exception e) { 
  System.out.println(e); 
  } 
  %> 
</body>  
</html>  
