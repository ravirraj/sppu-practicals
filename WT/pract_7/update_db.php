<?php
include __DIR__ . '/db.php';

$sql = "ALTER TABLE employees 
        ADD COLUMN IF NOT EXISTS role VARCHAR(50) NOT NULL,
        ADD COLUMN IF NOT EXISTS salary DECIMAL(10, 2) NOT NULL,
        ADD COLUMN IF NOT EXISTS email VARCHAR(100) NOT NULL";

if ($conn->query($sql) === TRUE) {
    echo "Database updated successfully: Added 'role', 'salary', and 'email' columns.";
} else {
    $sql2 = "ALTER TABLE employees 
             ADD COLUMN role VARCHAR(50) NOT NULL,
             ADD COLUMN salary DECIMAL(10, 2) NOT NULL,
             ADD COLUMN email VARCHAR(100) NOT NULL";

    if ($conn->query($sql2) === TRUE) {
        echo "Database updated successfully.";
    } else {
        $sql3_drop = "DROP TABLE IF EXISTS employees";
        $conn->query($sql3_drop);

        $sql4_create = "CREATE TABLE employees (
            id INT AUTO_INCREMENT PRIMARY KEY,
            first_name VARCHAR(50) NOT NULL,
            last_name VARCHAR(50) NOT NULL,
            gender ENUM('Male', 'Female', 'Other') NOT NULL,
            role VARCHAR(50) NOT NULL,
            mobile_no VARCHAR(15) NOT NULL,
            salary DECIMAL(10, 2) NOT NULL,
            email VARCHAR(100) NOT NULL
        )";
        if ($conn->query($sql4_create) === TRUE) {
            echo "Database updated successfully: Recreated 'employees' table with all needed columns.";
        } else {
            echo "Error updating database: " . $conn->error;
        }
    }
}
?>