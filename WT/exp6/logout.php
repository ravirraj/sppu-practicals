<?php
session_start();
session_destroy();
?>
<script>
    alert('Logged out successfully!');
    location.href = "index.php";
</script>