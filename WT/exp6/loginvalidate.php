<?php
require 'db_connect.php';
session_start();

// Sanitize user inputs 
$email = mysqli_real_escape_string($conn, $_POST['email']);
$pword = mysqli_real_escape_string($conn, $_POST['pword']);


// Prepare SQL statement with placeholders 
$query = "SELECT * FROM registration_details WHERE email=? AND pword=?";
$stmt = mysqli_prepare($conn, $query);


// Bind parameters to the placeholders 
mysqli_stmt_bind_param($stmt, "ss", $email, $pword);


// Execute the prepared statement 
mysqli_stmt_execute($stmt);


// Get result 
$result = mysqli_stmt_get_result($stmt);

if (mysqli_num_rows($result) > 0) {

    $_SESSION['email'] = $email;

    ?>
    <script>location.href = "info.php";</script>
        <?php

} else {
    ?><script>alert('Please check email id or password');
                location.href = "Signin.php"; 
            </script>
            <?php

}
// Close statement and connection 
mysqli_stmt_close($stmt);
mysqli_close($conn);
?>