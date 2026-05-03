<?php
require 'db_connect.php';
session_start();
if (!isset($_SESSION['email']) || $_SESSION['email'] == '') {
  ?>
  <script>alert('Please login to the system first!');
    location.href = "Signin.php";</script>
  <?php
  exit();
} else {
  $rollno = isset($_GET['rollno']) ? $_GET['rollno'] : '';
  $rollno = mysqli_real_escape_string($conn, $rollno);
  $query = "SELECT * FROM s_info WHERE rollno='$rollno'";
  $result = mysqli_query($conn, $query);
  if ($result && mysqli_num_rows($result) > 0) {
    $info = mysqli_fetch_assoc($result);
  } else {
    echo '<script>alert("Student record not found!"); location.href="info.php";</script>';
    exit();
  }
}
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <title>Update Student Information</title>
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
      width: 400px;
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

    input[type="text"] {
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
    input[type="reset"],
    a.button {
      background: #c0c0c0;
      border: 2px solid;
      border-color: #fff #808080 #808080 #fff;
      padding: 4px 10px;
      min-width: 80px;
      cursor: pointer;
      font-size: 11px;
      color: black;
      text-decoration: none;
      display: inline-block;
      text-align: center;
    }

    input:active,
    a.button:active {
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
      <span>Update.exe</span>
      <span>[?] [X]</span>
    </div>
    <div class="content">
      <div style="text-align: left; margin-bottom: 10px;">
        <a href="info.php" class="top-link">[Back]</a>
      </div>
      <h1>Update Existing Record</h1>
      <form action="updaterec.php?rollno=<?php echo htmlspecialchars($rollno); ?>" method="POST">
        <table>
          <tr>
            <td><label>First Name:</label></td>
            <td><input type="text" id="fname" name="fname" value="<?php echo htmlspecialchars($info['first_name']); ?>"
                required></td>
          </tr>
          <tr>
            <td><label>Last Name:</label></td>
            <td><input type="text" id="lname" name="lname" value="<?php echo htmlspecialchars($info['last_name']); ?>"
                required></td>
          </tr>
          <tr>
            <td><label>Gender:</label></td>
            <td><input type="text" id="gender" name="gender" value="<?php echo htmlspecialchars($info['gender']); ?>"
                required></td>
          </tr>
          <tr>
            <td><label>Mobile No.:</label></td>
            <td><input type="text" id="mno" name="mno" value="<?php echo htmlspecialchars($info['mobile_number']); ?>"
                required></td>
          </tr>
        </table>
        <div class="btn-row">
          <input type="reset" name="reset" value="Reset" />
          <input type="submit" name="submit" value="Update" />
        </div>
      </form>
    </div>
  </div>
</body>

</html>