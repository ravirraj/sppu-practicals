<?php
include 'db.php';
header('Content-Type: application/json');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $_POST['first_name'] ?? '';
    $last_name = $_POST['last_name'] ?? '';
    $gender = $_POST['gender'] ?? '';
    $role = $_POST['role'] ?? '';
    $mobile_no = $_POST['mobile_no'] ?? '';
    $salary = $_POST['salary'] ?? '';
    $email = $_POST['email'] ?? '';

    if (empty($first_name) || empty($last_name) || empty($email) || empty($role)) {
        echo json_encode(['success' => false, 'message' => 'Please fill out all required fields.']);
        exit;
    }
    $stmt = $conn->prepare("INSERT INTO employees (first_name, last_name, gender, role, mobile_no, salary, email) VALUES (?, ?, ?, ?, ?, ?, ?)");

    if ($stmt) {
        $stmt->bind_param("sssssds", $first_name, $last_name, $gender, $role, $mobile_no, $salary, $email);
        if ($stmt->execute()) {
            echo json_encode([
                'success' => true,
                'message' => 'Employee added successfully!'
            ]);
        } else {
            echo json_encode([
                'success' => false,
                'message' => 'Failed to insert data: ' . $stmt->error
            ]);
        }
        $stmt->close();
    } else {
        echo json_encode([
            'success' => false,
            'message' => 'Database preparation failed: ' . $conn->error
        ]);
    }
} else {
    echo json_encode([
        'success' => false,
        'message' => 'Invalid Request Method.'
    ]);
}
?>