<%@ page language="java" contentType="text/html; charset=ISO-8859-1" pageEncoding="ISO-8859-1"%>
<%@ page import="java.sql.*, java.io.*"%>
<!DOCTYPE html>
<html>
<head>
    <title>Processing...</title>
    <style>
        body { 
            background-color: #008080; 
            font-family: "MS Sans Serif", Arial, sans-serif; 
            display: flex; justify-content: center; align-items: center; 
            height: 100vh; margin: 0; 
        }
        .window {
            background-color: #c0c0c0; border: 2px solid;
            border-color: #fff #808080 #808080 #fff;
            padding: 20px; width: 300px; text-align: center;
        }
    </style>
</head>
<body>

<div class="window">
    <div style="font-weight: bold; margin-bottom: 10px;">System Message</div>
    <div id="status">Writing to database...</div>
</div>

<% 
    String name = request.getParameter("name"); 
    String gender = request.getParameter("gender"); 
    String email = request.getParameter("email"); 
    String college = request.getParameter("college"); 
    String branch = request.getParameter("branch"); 
    String mobile = request.getParameter("mobile"); 
    String username = request.getParameter("username"); 
    String pass = request.getParameter("password"); 

    try { 
        Class.forName("com.mysql.cj.jdbc.Driver");
        Connection conn = DriverManager.getConnection("jdbc:mysql://localhost:3306/stud", "root", ""); 
        String sql = "INSERT INTO reg(name,gender,email,college,branch,mobile,username,password) VALUES(?,?,?,?,?,?,?,?)"; 
        PreparedStatement pst = conn.prepareStatement(sql); 
        pst.setString(1, name); 
        pst.setString(2, gender); 
        pst.setString(3, email); 
        pst.setString(4, college); 
        pst.setString(5, branch); 
        pst.setString(6, mobile); 
        pst.setString(7, username); 
        pst.setString(8, pass); 
        
        int row = pst.executeUpdate(); 
        if(row > 0) {
%>
    <script>
        alert('Registered Successfully!');
        window.location.href = "Signin.html";
    </script>
<% 
        }
        conn.close();
    } catch (Exception e) { 
        out.println("<script>alert('Error: " + e.getMessage() + "'); history.back();</script>");
    } 
%>

</body>
</html>