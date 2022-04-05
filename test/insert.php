<?php

//create connection
require_once "database/config.php";

//security
$firstName = mysqli_real_escape_string($conn, $_REQUEST['firstName']);
$middleName = mysqli_real_escape_string($conn, $_REQUEST['middleName']);
$lastName = mysqli_real_escape_string($conn, $_REQUEST['lastName']);
$email = mysqli_real_escape_string($conn, $_REQUEST['email']);
$cellNo = mysqli_real_escape_string($conn, $_REQUEST['cellNo']);
$lrn = mysqli_real_escape_string($conn, $_REQUEST['lrn']);
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
$sql = "INSERT INTO users (`account_id`, `lastName`, `firstName`, `middleName`, `email`, `cellNo`, `lrn`, `username`, `password`, `access_level`)
       VALUES ('$randomID', '$lastName', '$firstName', '$middleName', '$email', '$cellNo', '$lrn', '$username', '$encrypted_password', '$access_level')";

if (mysqli_query($conn, $sql)) 
{
	header('Refresh: 5; URL=login.php');
}

else
{
	echo "Error: Could not able to execute $sql. ".mysqli_error($conn);
}



//close connection
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="shortcut icon" type="x-icon" href="images/tab.png">
  <meta charset="utf-8">
  <title>Sign In</title>
  <!--naglilink sa css ko-->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">  

  <style>
        body{  background-color: #284394; font: 14px sans-serif; }

        .wrapper { 
          border: 3px solid black; 
          background-color: lightblue;  
          width: 350px;
         padding:10px;
         box-shadow: 5px 10px #203145
        }

        .logo {
          position: absolute;
          top: 1px;
          left: 0px;
          width: 50px;
          height: 50px;
          margin-left: 10px;
        }

        .header {
          padding: .1px;
          background: #EA0404;
          color: white;
        }    

        .hi {

            margin-left: 30px;
        }

        .dropdown {
            position: absolute;
            top: 17px;
            right: 55px;
            margin-left: 10px;
            border: none;
            outline: none;
            background: transparent;
        }

        .dropdown-toggle {
            color: white;
            text-decoration: none;
        }

        .navname {
          position: absolute;
          top: 17px;
          color: white;
          right: 160px;
          margin-right: -15px;
        }

    </style>
</head>

<body>

   <div>
    <header class="header">
        <img class="logo" src = "images/aulogo.png"/>
        <h2 style="margin-left: 70px; margin-top: 10px;">Electronic Library System</h2>
    </header>

    
    </div>

   <div style="width: 340px; margin: 50px auto; font-size: 15px;" class="wrapper">
  <h1 style="width: 340px">Student Register</h1>
  <h5>Account Registered Successfully</h5>
</div>
</body>
</html>