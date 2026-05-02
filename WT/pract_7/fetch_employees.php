<?php
include 'db.php';
header('Content-Type: application/json');
$role = isset($_GET['role']) ? $_GET['role'] : 'All';
if ($role === 'All' || $role === '') {
    $stmt = $conn->prepare("SELECT id, first_name, last_name, gender, role, mobile_no, salary, email FROM employees ORDER BY id DESC");
} else {
    $stmt = $conn->prepare("SELECT id, first_name, last_name, gender, role, mobile_no, salary, email FROM employees WHERE role = ? ORDER BY id DESC");
    if ($stmt) {
        $stmt->bind_param("s", $role);
    }
}
if ($stmt && $stmt->execute()) {
    $result = $stmt->get_result();
    $employees = [];
    while ($row = $result->fetch_assoc()) {
        $employees[] = $row;
    }
    echo json_encode([
        'success' => true,
        'data' => $employees,
        'count' => count($employees)
    ]);
    $stmt->close();
} else {
    echo json_encode([
        'success' => false,
        'message' => 'Failed to retrieve data from the database. ' . ($stmt ? $stmt->error : $conn->error)
    ]);
}
?>