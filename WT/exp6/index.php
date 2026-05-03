<?php
session_start();
if (!isset($_SESSION['email'])) {
  $_SESSION['email'] = '';
}
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <title>Home Page</title>
  <style>
    body {
      background-color: #008080;
      /* Win95 Teal */
      font-family: "MS Sans Serif", Arial, sans-serif;
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
      width: 450px;
      padding: 2px;
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
      padding: 30px;
      text-align: center;
      border: 1px solid #808080;
      margin: 2px;
    }

    h1 {
      font-size: 16px;
      background: #3cb371;
      color: white;
      padding: 10px;
      border: 2px inset #fff;
      margin-top: 0;
    }

    .btn-container {
      display: flex;
      flex-direction: column;
      gap: 15px;
      align-items: center;
    }

    .win-btn {
      width: 180px;
      padding: 10px;
      background: #c0c0c0;
      font-weight: bold;
      border: 2px solid;
      border-color: #fff #808080 #808080 #fff;
      text-decoration: none;
      color: black;
      font-size: 14px;
      cursor: pointer;
      display: inline-block;
    }

    .win-btn:active {
      border-color: #808080 #fff #fff #808080;
      padding: 11px 9px 9px 11px;
    }
  </style>
</head>

<body>
  <div class="window">
    <div class="title-bar">
      <span>Portal.exe</span>
      <span>[?] [X]</span>
    </div>
    <div class="content">
      <h1>Welcome To The Portal</h1>
      <div class="btn-container">
        <a href="Signin.php" class="win-btn">Sign-in</a>
        <a href="Signup.php" class="win-btn">Sign-up</a>
      </div>
      <p style="font-size: 10px; margin-top: 20px; color: #444">
        Please select an option to continue.
      </p>
    </div>
  </div>
</body>

</html>