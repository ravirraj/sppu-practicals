<%@ page language="java" contentType="text/html; charset=ISO-8859-1" pageEncoding="ISO-8859-1"%>
<%@ page import="java.sql.*, java.io.*"%>
<!DOCTYPE html>
<html>
<head>
    <title>Authenticating...</title>
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
    <div style="font-weight: bold; margin-bottom: 10px;">Security Check</div>
    <div id="status">Verifying credentials...</div>
</div>

<% 
    String user = request.getParameter("username"); 
    String pword = request.getParameter("password"); 

    try { 
        Class.forName("com.mysql.cj.jdbc.Driver");
        Connection conn = DriverManager.getConnection("jdbc:mysql://localhost:3306/stud", "root", ""); 
        String sql = "SELECT * FROM reg WHERE username=? AND password=?"; 
        PreparedStatement pst = conn.prepareStatement(sql); 
        pst.setString(1, user); 
        pst.setString(2, pword); 
        ResultSet rs = pst.executeQuery(); 

        if (rs.next()) { 
%>
            <jsp:forward page="home.jsp" />
<% 
        } else { 
%>
            <script>
                alert('Invalid Username or Password!');
                window.location.href = "Signin.html";
            </script>
<% 
        } 
        conn.close();
    } catch (Exception e) { 
        out.println("<div class='window'>Error: " + e.getMessage() + "</div>");
    } 
%>

</body>
</html>