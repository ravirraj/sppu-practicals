<?php
require 'db_connect.php';
session_start();
if (!isset($_SESSION['email']) || $_SESSION['email'] == '') {
    ?>
    <script>alert('Please login to the system first!');
        location.href = "Signin.php";</script>
    <?php
} else {
    $rollno = $_GET['rollno'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $gender = $_POST['gender'];
    $mno = $_POST['mno'];

    if ($fname != '' && $lname != '' && $gender != '' && $mno != '') {

        $query = "UPDATE s_info SET 
first_name='$fname', last_name='$lname', gender='$gender', mobile_number='$mno' 
WHERE rollno='$rollno'";
        if (mysqli_query($conn, $query)) {

            ?>
            <script>alert('Updated Successfully!');
                location.href = "info.php"; 
            </script>
            <?php

        } else {
            echo 'Error: ' . mysqli_error($conn);
        }
    } else {
        ?>

        <script>alert('Please fill in all fields!');
            location.href = "update.php?rollno=<?php echo $rollno; ?>";</script>
        <?php

    }
}
?>