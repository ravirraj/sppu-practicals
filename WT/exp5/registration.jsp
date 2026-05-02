<%@ page language="java" contentType="text/html; charset=ISO 8859-1" 
  pageEncoding="ISO-8859-1"%> 
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 
Transitional//EN" " http://www.w3.org/TR/html4/loose.dtd"> 
<html> 
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1"> 
<title>Sign Up JSP</title> 
</head> 
<body> 
  <%@ page import="java.sql.*"%> 
  <%@ page import="javax.sql.*"%> 
  <%@ page import="java.io.*"%> 
  <% 
  String name = request.getParameter("name"); 
  String gender = request.getParameter("gender"); 
  String email = request.getParameter("email"); 
  String college = request.getParameter("college"); 
  String branch = request.getParameter("branch"); 
  String mobile = request.getParameter("mobile"); 
  String username = request.getParameter("username"); 
  String pass = request.getParameter("password"); 
  System.out.println(name); 
  try { 
    //Class.forName("com.mysql.jdbc.Driver"); 
    Connection conn = 
DriverManager.getConnection("jdbc:mysql://localhost:3306/stud", "root", ""); 
    String sql = "insert into 
reg(name,gender,email,college,branch,mobile,username,password) 
values(?,?,?,?,?,?,?,?)"; 
    PreparedStatement pst = conn.prepareStatement(sql); 
    pst.setString(1, name); 
    pst.setString(2, gender); 
    pst.setString(3, email); 
    pst.setString(4, college); 
    pst.setString(5, branch); 
    pst.setString(6, mobile); 
    pst.setString(7, username); 
    pst.setString(8, pass); 
    pst.executeUpdate(); 
  %>  
  alert('Registered Successfully!'); 
  <jsp:forward page="Signin.html" /> 
  <% 
  } catch (Exception e) { 
  System.out.println(e); 
  } 
  %> 
</body> 
</html> 
