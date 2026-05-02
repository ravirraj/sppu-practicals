<?php
require_once 'db.php';

$message = '';
$messageType = '';
$id = $_GET['id'] ?? null;

if (!$id) {
    header("Location: view.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $first_name = $_POST['first_name'] ?? '';
    $last_name = $_POST['last_name'] ?? '';
    $gender = $_POST['gender'] ?? '';
    $mobile_no = $_POST['mobile_no'] ?? '';
    
    if (!empty($first_name) && !empty($last_name) && !empty($gender) && !empty($mobile_no)) {
        $stmt = $conn->prepare("UPDATE employees SET first_name=?, last_name=?, gender=?, mobile_no=? WHERE id=?");
        $stmt->bind_param("ssssi", $first_name, $last_name, $gender, $mobile_no, $id);
        
        if ($stmt->execute()) {
            $message = "Employee details updated successfully!";
            $messageType = "success";
        } else {
            $message = "Error updating record: " . $stmt->error;
            $messageType = "error";
        }
        $stmt->close();
    } else {
        $message = "All fields are required.";
        $messageType = "error";
    }
}

// Fetch current data for populating form
$stmt = $conn->prepare("SELECT * FROM employees WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 0) {
    header("Location: view.php");
    exit();
}

$employee = $result->fetch_assoc();
$stmt->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Employee | HR Portal</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="form-container">
        <div class="header center">
            <h2>Edit Employee #<?php echo htmlspecialchars($id); ?></h2>
        </div>
        
        <?php if ($message): ?>
            <div class="alert <?php echo $messageType === 'success' ? 'alert-success' : 'alert-error'; ?>">
                <?php echo $message; ?>
            </div>
        <?php endif; ?>

        <form action="update.php?id=<?php echo htmlspecialchars($id); ?>" method="POST">
            <div class="form-group">
                <label>First Name</label>
                <input type="text" name="first_name" value="<?php echo htmlspecialchars($employee['first_name']); ?>" required>
            </div>
                
            <div class="form-group">
                <label>Last Name</label>
                <input type="text" name="last_name" value="<?php echo htmlspecialchars($employee['last_name']); ?>" required>
            </div>

            <div class="form-group">
                <label>Gender</label>
                <select name="gender" required>
                    <option value="" disabled>Select Gender</option>
                    <option value="Male" <?php echo $employee['gender'] === 'Male' ? 'selected' : ''; ?>>Male</option>
                    <option value="Female" <?php echo $employee['gender'] === 'Female' ? 'selected' : ''; ?>>Female</option>
                    <option value="Other" <?php echo $employee['gender'] === 'Other' ? 'selected' : ''; ?>>Other</option>
                </select>
            </div>

            <div class="form-group">
                <label>Mobile No</label>
                <input type="tel" name="mobile_no" value="<?php echo htmlspecialchars($employee['mobile_no']); ?>" required>
            </div>

            <div class="form-actions">
                <a href="view.php" class="cancel-link">Cancel & Go Back</a>
                <button type="submit" class="btn">
                    Update Details
                </button>
            </div>
        </form>
    </div>
</body>
</html>
