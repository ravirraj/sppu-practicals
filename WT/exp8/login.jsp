<%@ page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>JSP Page</title>
  </head>
  <body>
    <h1>Login</h1>
    <form action="loginform.do" method="post">
      username
      <input type="text" name="uname" /><br />
      password
      <input type="password" name="upass" /><br />
      <input type="submit" value="Login" />
    </form>
  </body>
</html>
