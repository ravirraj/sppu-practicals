<?php
session_start();
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <title>Sign-in to your account</title>
  <style>
    body {
      background-color: #008080;
      font-family: "MS Sans Serif", Arial, sans-serif;
      font-size: 12px;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }

    .window {
      background-color: #c0c0c0;
      border: 2px solid;
      border-color: #fff #808080 #808080 #fff;
      padding: 2px;
      width: 350px;
    }

    .title-bar {
      background: linear-gradient(90deg, #000080, #1084d0);
      color: white;
      padding: 3px 5px;
      font-weight: bold;
      display: flex;
      justify-content: space-between;
    }

    .content {
      padding: 15px;
      border: 1px solid #808080;
      margin: 2px;
    }

    h1 {
      font-size: 14px;
      margin: 0 0 10px 0;
      text-align: center;
    }

    table {
      width: 100%;
      border-spacing: 5px;
    }

    label {
      font-weight: bold;
    }

    input[type="text"],
    input[type="password"] {
      border: 2px solid;
      border-color: #808080 #fff #fff #808080;
      background: #fff;
      padding: 2px;
      width: 100%;
      font-size: 12px;
      box-sizing: border-box;
    }

    .btn-row {
      text-align: right;
      margin-top: 15px;
    }

    input[type="submit"],
    input[type="reset"] {
      background: #c0c0c0;
      border: 2px solid;
      border-color: #fff #808080 #808080 #fff;
      padding: 4px 10px;
      min-width: 80px;
      cursor: pointer;
      font-size: 11px;
    }

    input:active {
      border-color: #808080 #fff #fff #808080;
    }

    .top-link {
      font-size: 10px;
      text-decoration: none;
      color: black;
      margin-right: 5px;
    }
  </style>
</head>

<body>
  <div class="window">
    <div class="title-bar">
      <span>Signin.exe</span>
      <span>[?] [X]</span>
    </div>
    <div class="content">
      <div style="text-align: left; margin-bottom: 10px;">
        <a href="index.php" class="top-link">[Home]</a>
      </div>
      <h1>Sign-in to your Account</h1>
      <form action="loginvalidate.php" method="POST">
        <table>
          <tr>
            <td><label>Email:</label></td>
            <td><input type="text" id="email" name="email" placeholder="Enter your email id"></td>
          </tr>
          <tr>
            <td><label>Password:</label></td>
            <td><input type="password" id="pword" name="pword" placeholder="Enter your password"></td>
          </tr>
        </table>
        <div class="btn-row">
          <input type="reset" name="reset" value="Reset" />
          <input type="submit" name="submit" value="Login" />
        </div>
      </form>
    </div>
  </div>
</body>

</html>