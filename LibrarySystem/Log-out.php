<?php
// Initialize the session
session_start();

include_once "database/config.php";

// Unset all of the session variables
$_SESSION["loggedin"] = false;
$_SESSION = array();
 
// Destroy the session.
session_destroy();

$conn->query("UPDATE FROM * users SET user_systemStatus = 'Online' WHERE user_id");
 
// Redirect to login page
header("location: index.php");
exit;


?>