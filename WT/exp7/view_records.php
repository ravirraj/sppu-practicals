<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <title>View Employee Details</title>
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
      width: 600px;
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
      margin: 0 0 15px 0;
      text-align: center;
    }

    .controls {
      display: flex;
      justify-content: center;
      margin-bottom: 15px;
    }

    select {
      background: white;
      border: 2px solid;
      border-color: #808080 #fff #fff #808080;
      padding: 2px;
      font-family: "MS Sans Serif", Arial, sans-serif;
      font-size: 12px;
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
  </style>

  <script type="text/javascript">
    function showUser(role_val) {
      if (role_val === "select") {
        document.getElementById("table1").innerHTML = "";
        return;
      }
      var xmlhttp = new XMLHttpRequest();
      xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
          document.getElementById("table1").innerHTML = this.responseText;
        }
      };

      xmlhttp.open("GET", "getvalues.php?p=" + role_val, true);
      xmlhttp.send();
    }
  </script>
</head>

<body>
  <div class="window">
    <div class="title-bar">
      <span>EmployeeViewer.exe</span>
      <span>[?] [X]</span>
    </div>
    <div class="content">
      <h1>View Employee Details</h1>
      
      <div class="controls">
        <label for="users" style="margin-right: 10px; line-height: 24px;">Select Role:</label>
        <select name="users" id="users" onchange="showUser(this.value)">
          <option value="select">Select a role</option>
          <option value="1">Developer</option>
          <option value="2">Tester</option>
          <option value="3">Technician</option>
          <option value="4">Salesperson</option>
        </select>
      </div>
      
      <div id="table1"></div>
    </div>
  </div>
</body>

</html>
