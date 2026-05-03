<?php

$servername = "localhost";

$username = "root";

$password = "";

$dbname = "assignment6";

// Create connection 

$conn = new mysqli("localhost", "root", "", "assignment6");



// Check connection 

if ($conn->connect_error) {

    die("Connection failed: " . $conn->connect_error);

}

?>