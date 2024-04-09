<!-- logout.php -->
<?php
// Start session
session_start();

// Unset all session variables
$_SESSION = array();

// Destroy the session
session_destroy();

// Redirect to the homepage or any other page after logout
header("Location: index.php");
exit;
?>
