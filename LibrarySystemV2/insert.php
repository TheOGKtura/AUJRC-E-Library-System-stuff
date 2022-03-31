<?php

//create connection
require_once "database/config.php";

//security
$firstName = mysqli_real_escape_string($conn, $_REQUEST['firstName']);
$middleName = mysqli_real_escape_string($conn, $_REQUEST['middleName']);
$lastName = mysqli_real_escape_string($conn, $_REQUEST['lastName']);
$email = mysqli_real_escape_string($conn, $_REQUEST['email']);
$cellNo = mysqli_real_escape_string($conn, $_REQUEST['cellNo']);
$username = mysqli_real_escape_string($conn, $_REQUEST['username']);
$password = mysqli_real_escape_string($conn, $_REQUEST['password']);

  // The hash of the password that
  // can be stored in the database
  $encrypted_password = password_hash($password, PASSWORD_DEFAULT);
  
// for admin registration
$access_level = 0;

//account_id generator
$randomID = rand(1,99999);

//eto ung maglalagay sa database
$sql = "INSERT INTO users (`account_id`, `lastName`, `firstName`, `middleName`, `email`, `cellNo`, `username`, `password`, `access_level`)
       VALUES ('$randomID', '$lastName', '$firstName', '$middleName',  '$email', '$cellNo', '$username', '$encrypted_password', '$access_level')";

if (mysqli_query($conn, $sql)) 
{
	echo "You have been registered, please wait you're being redirected...";
	header('Refresh: 5; URL=login.php');
}

else
{
	echo "Error: Could not able to execute $sql. ".mysqli_error($conn);
}



//close connection
mysqli_close($conn);
?>

