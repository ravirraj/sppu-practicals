<?php
require_once 'db.php';

$query = "SELECT * FROM employees ORDER BY id DESC";
$result = $conn->query($query);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Directory | HR Portal</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <div class="header">
            <div>
                <h1>Employee Directory</h1>
                <p>Manage and view all employee details.</p>
            </div>
            <a href="insert.php" class="btn">New Employee</a>
        </div>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>Mobile No</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php if ($result->num_rows > 0): ?>
                    <?php while ($row = $result->fetch_assoc()): ?>
                        <tr>
                            <td>#<?php echo htmlspecialchars($row['id']); ?></td>
                            <td><?php echo htmlspecialchars($row['first_name'] . ' ' . $row['last_name']); ?></td>
                            <td><?php echo htmlspecialchars($row['gender']); ?></td>
                            <td><?php echo htmlspecialchars($row['mobile_no']); ?></td>
                            <td>
                                <a href="update.php?id=<?php echo $row['id']; ?>" class="btn btn-edit">Edit</a>
                                <a href="delete.php?id=<?php echo $row['id']; ?>"
                                    onclick="return confirm('WARNING: Are you sure you want to permanently delete this employee?');"
                                    class="btn btn-delete">Delete</a>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="5" class="empty-state">
                            <h3>No employees</h3>
                            <p>Get started by creating a new employee profile.</p>
                            <br>
                            <a href="insert.php" class="btn">Add Employee</a>
                        </td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</body>

</html>