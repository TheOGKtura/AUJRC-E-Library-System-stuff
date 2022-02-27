<?php
// Initialize the session
session_start();

include_once "database/config.php";

// Unset all of the session variables
$_SESSION["loggedin"] = false;
$_SESSION = array();
 
// Destroy the session.
session_destroy();
 
// Redirect to login page
header("location: index.php");
exit;


?>