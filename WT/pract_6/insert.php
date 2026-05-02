<?php
require_once 'db.php';

$message = '';
$messageType = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $first_name = $_POST['first_name'] ?? '';
    $last_name = $_POST['last_name'] ?? '';
    $gender = $_POST['gender'] ?? '';
    $mobile_no = $_POST['mobile_no'] ?? '';
    
    if (!empty($first_name) && !empty($last_name) && !empty($gender) && !empty($mobile_no)) {
        // Prepared statement to prevent SQL injection
        $stmt = $conn->prepare("INSERT INTO employees (first_name, last_name, gender, mobile_no) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $first_name, $last_name, $gender, $mobile_no);
        
        if ($stmt->execute()) {
            $message = "Employee added successfully!";
            $messageType = "success";
        } else {
            $message = "Error: " . $stmt->error;
            $messageType = "error";
        }
        $stmt->close();
    } else {
        $message = "All fields are required.";
        $messageType = "error";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Employee | HR Portal</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="form-container">
        <div class="header center">
            <h2>Add New Employee</h2>
        </div>
        
        <?php if ($message): ?>
            <div class="alert <?php echo $messageType === 'success' ? 'alert-success' : 'alert-error'; ?>">
                <?php echo $message; ?>
            </div>
        <?php endif; ?>

        <form action="insert.php" method="POST">
            <div class="form-group">
                <label>First Name</label>
                <input type="text" name="first_name" required placeholder="John">
            </div>
                
            <div class="form-group">
                <label>Last Name</label>
                <input type="text" name="last_name" required placeholder="Doe">
            </div>

            <div class="form-group">
                <label>Gender</label>
                <select name="gender" required>
                    <option value="" disabled selected>Select Gender</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Other">Other</option>
                </select>
            </div>

            <div class="form-group">
                <label>Mobile No</label>
                <input type="tel" name="mobile_no" required placeholder="+1 (555) 000-0000">
            </div>

            <div class="form-actions">
                <a href="view.php" class="cancel-link">View Directory</a>
                <button type="submit" class="btn">
                    Save Employee
                </button>
            </div>
        </form>
    </div>
</body>
</html>
