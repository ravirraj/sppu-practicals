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
  $query = "SELECT * FROM s_info";
  $result = mysqli_query($conn, $query);
  $info = [];
  if ($result && mysqli_num_rows($result) > 0) {
    $info = mysqli_fetch_all($result, MYSQLI_ASSOC);
    mysqli_free_result($result);
  }
}
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <title>Student Information</title>
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
      width: 700px;
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
      border-collapse: collapse;
      background: white;
      border: 2px solid;
      border-color: #808080 #fff #fff #808080;
    }

    th,
    td {
      border: 1px solid #c0c0c0;
      padding: 4px;
      text-align: left;
    }

    th {
      background: #c0c0c0;
      border-bottom: 2px solid #808080;
      border-right: 2px solid #808080;
      font-weight: bold;
    }

    .btn-row {
      text-align: right;
      margin-top: 15px;
    }

    a.button,
    button,
    input[type="submit"] {
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

    a.button:active,
    button:active,
    input[type="submit"]:active {
      border-color: #808080 #fff #fff #808080;
    }

    a.tablebtn {
      color: blue;
      text-decoration: underline;
      margin-right: 5px;
    }
  </style>
</head>

<body>
  <div class="window">
    <div class="title-bar">
      <span>Information.exe</span>
      <span>[?] [X]</span>
    </div>
    <div class="content">
      <h1>C3 Student Information</h1>
      <table>
        <tr>
          <th>Roll No.</th>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Gender</th>
          <th>Mobile No.</th>
          <th>Action</th>
        </tr>
        <?php foreach ($info as $row) { ?>
          <tr>
            <td><?php echo isset($row['rollno']) ? htmlspecialchars($row['rollno']) : ''; ?></td>
            <td><?php echo isset($row['first_name']) ? htmlspecialchars($row['first_name']) : ''; ?></td>
            <td><?php echo isset($row['last_name']) ? htmlspecialchars($row['last_name']) : ''; ?></td>
            <td><?php echo isset($row['gender']) ? htmlspecialchars($row['gender']) : ''; ?></td>
            <td><?php echo isset($row['mobile_number']) ? htmlspecialchars($row['mobile_number']) : ''; ?></td>
            <td>
              <a href="update.php?rollno=<?php echo isset($row['rollno']) ? $row['rollno'] : ''; ?>"
                class="tablebtn">Update</a>
              <a href="delete.php?rollno=<?php echo isset($row['rollno']) ? $row['rollno'] : ''; ?>"
                class="tablebtn">Delete</a>
            </td>
          </tr>
        <?php } ?>
      </table>
      <div class="btn-row">
        <a href="insert.php" class="button">Insert</a>
        <a href="logout.php" class="button">Logout</a>
      </div>
    </div>
  </div>
</body>

</html>