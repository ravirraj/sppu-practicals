<?php
require 'db_connect.php';
session_start();
if (empty($_SESSION['email'])) {
    ?>
    <script>
        alert('Please login to the system first!');
        location.href = "Signin.php"; 
    </script>
    <?php
} else {
    $rollno = $_GET['rollno'];
    $query = "DELETE FROM s_info WHERE rollno='$rollno'";
    if (mysqli_query($conn, $query)) {
        ?>
        <script>
            alert('Deleted Successfully!');
            location.href = "info.php"; 
        </script>
        <?php
    } else {
        echo 'Error: ' . mysqli_error($conn);
    }
}
?>