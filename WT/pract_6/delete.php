<?php
require_once 'db.php';

$id = $_GET['id'] ?? null;

if ($id) {
    // Delete query with prepared statement
    $stmt = $conn->prepare("DELETE FROM employees WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->close();
}

// Redirect instantly back to view page
header("Location: view.php");
exit();
?>
