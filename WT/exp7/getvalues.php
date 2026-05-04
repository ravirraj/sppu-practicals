<?php
if (!isset($_GET['p']) || $_GET['p'] === "select") {
    echo "";
    exit;
}

$role = $_GET['p'];
$sel_role = "";
if ($role == 1) {
    $sel_role = "Developer";
} else if ($role == 2) {
    $sel_role = "Tester";
} else if ($role == 3) {
    $sel_role = "Technician";
} else if ($role == 4) {
    $sel_role = "Salesperson";
}

$conn = mysqli_connect("localhost", "root", "yourpassword", "ajax", 3307);

if (!$conn) {
    echo "<p style='color: red;'>Connection failed: " . mysqli_connect_error() . "</p>";
    exit;
}

$query = "SELECT * FROM employee_data WHERE role='$sel_role'";
$result = mysqli_query($conn, $query);

if ($result && mysqli_num_rows($result) > 0) {
    echo "<table> 
  <tr> 
    <th>id</th> 
    <th>name</th> 
    <th>salary</th> 
    <th>email</th> 
  </tr>";

    while ($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($row['id']) . "</td>";
        echo "<td>" . htmlspecialchars($row['name']) . "</td>";
        echo "<td>" . htmlspecialchars($row['salary']) . "</td>";
        echo "<td>" . htmlspecialchars($row['email']) . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "<p style='text-align: center; margin-top: 10px;'>No records found for role: $sel_role</p>";
}

mysqli_close($conn);
?>