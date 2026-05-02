<?php
$host = "localhost";
$user = "root";
$password = "yourpassword";
$dbname = "company_db";
$port = 3307; // Define your specific port here

// Pass the port as the 5th parameter
$conn = new mysqli($host, $user, $password, $dbname, $port);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>