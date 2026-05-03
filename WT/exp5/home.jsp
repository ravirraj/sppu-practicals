<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Database Viewer</title>
    <style>
        body { 
            background-color: #008080; /* Win95 Teal */
            font-family: "MS Sans Serif", Arial, sans-serif; 
            font-size: 11px;
            display: flex; justify-content: center; align-items: center;
            min-height: 100vh; margin: 0;
        }
        .window {
            background-color: #c0c0c0;
            border: 2px solid;
            border-color: #fff #808080 #808080 #fff;
            padding: 2px; width: 450px;
        }
        .title-bar {
            background: linear-gradient(90deg, #000080, #1084d0);
            color: white; padding: 3px 5px; font-weight: bold;
            display: flex; justify-content: space-between;
        }
        .content { padding: 10px; border: 1px solid #808080; margin: 2px; background: #fff; }
        .header-box { background: #c0c0c0; padding: 5px; border-bottom: 2px groove #fff; margin-bottom: 10px; font-weight: bold; }
        
        table { width: 100%; border-collapse: collapse; background: #fff; }
        th { background: #d3d3d3; border: 1px solid #808080; padding: 4px; text-align: left; }
        td { border: 1px solid #d3d3d3; padding: 4px; }
        
        .footer { text-align: right; margin-top: 15px; background: #c0c0c0; padding: 5px; }
        .btn {
            background: #c0c0c0; border: 2px solid;
            border-color: #fff #808080 #808080 #fff;
            padding: 4px 15px; cursor: pointer; text-decoration: none; color: black; display: inline-block;
        }
        .btn:active { border-color: #808080 #fff #fff #808080; }
    </style>
</head>
<body>

<%@ page import="java.sql.*"%>
<div class="window">
    <div class="title-bar">
        <span>Database_Explorer.exe</span>
        <span>[?] [X]</span>
    </div>
    <div class="content">
        <div class="header-box">Student Record Records</div>
        <table>
            <thead>
                <tr>
                    <th>Student Name</th>
                    <th>Engineering Branch</th>
                </tr>
            </thead>
            <tbody>
                <% 
                try {
                    Class.forName("com.mysql.cj.jdbc.Driver");
                    Connection conn = DriverManager.getConnection("jdbc:mysql://localhost:3306/stud", "root", "");
                    String sql = "SELECT * FROM reg";
                    PreparedStatement pst = conn.prepareStatement(sql);
                    ResultSet rs = pst.executeQuery();

                    while (rs.next()) {
                %>
                <tr>
                    <td><%= rs.getString("name") %></td>
                    <td><%= rs.getString("branch") %></td>
                </tr>
                <% 
                    }
                    conn.close();
                } catch (Exception e) {
                    out.print("<tr><td colspan='2'>Error: " + e.getMessage() + "</td></tr>");
                } 
                %>
            </tbody>
        </table>
        
        <div class="footer">
            <a href="index.html" class="btn">Logout</a>
        </div>
    </div>
</div>

</body>
</html>