<?php
session_start();
session_unset(); // Remove all session variables
session_destroy(); // Destroy the session
header("Location: ../homepage/index.php"); // Redirect to homepage
exit;
?>
