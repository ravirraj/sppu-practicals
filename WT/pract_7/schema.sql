CREATE DATABASE IF NOT EXISTS company_db;
USE company_db;

CREATE TABLE IF NOT EXISTS employees (
    id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(50) NOT NULL,
    last_name VARCHAR(50) NOT NULL,
    gender ENUM('Male', 'Female', 'Other') NOT NULL,
    role VARCHAR(50) NOT NULL,
    mobile_no VARCHAR(15) NOT NULL,
    salary DECIMAL(10, 2) NOT NULL,
    email VARCHAR(100) NOT NULL
);
