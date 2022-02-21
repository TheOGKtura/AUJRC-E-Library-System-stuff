<?php

// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
require_once "database/config.php"


?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Signup</title>
	<!--naglilink sa css ko-->
	 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">	

	<style>
        body{  background-color: #F8F4EC; font: 14px sans-serif; }

        .wrapper{ width: 350px; padding: 20px; }

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
          background: royalblue;
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
        <h2 style="margin-left: 70px; margin-top: 10px;">Student Membership System</h2>
    </header>

    <div>
    <a class="navname"><span class ="glyphicon glyphicon-user"></span><?php echo htmlspecialchars($_SESSION["username"]); ?></a>
    </div>

    <button class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Settings<span class="caret"></span></a>
    <ul class="dropdown-menu">
    <li><a href="reset-password.php">Reset Password</a></li>
    <li><a href="logout.php">Logout</a></li>
    </ul>
    </li>
    </div>

	 <div style="width: 340px; margin: 50px auto; font-size: 15px;" class="wrapper">
	<h1 style="width: 340px">Student Registration</h1>
	<p>Please fill up this form to register your account.</p>
	<!--eto ung nagcoconnect sa database-->
		<form action="insert.php" method="POST">
			<label for="firstName">First Name:</label>
			<input style="margin-left: 15px;" type="text" name="firstName" id="firstName" required=""> 
			<br>
			<label for="middleName">Middle Name:</label>
			<input type="text" name="middleName" id="middleName" placeholder="Optional">
			<br>
			<label for="lastName">Last Name:</label>
			<input style="margin-left: 15px;" type="text" name="lastName" id="lastName" required="">
			<br>
			<label for="email">Email:</label>
			<input style="margin-left: 50px;" type="email" name="email" id="email" required="">
			<br>
			<label for="cell_No">Mobile:</label>
			<input style="margin-left: 43px;" type="text" name="cellNo" id="cellNo" placeholder="Optional">
			<br>
			<label for="Username">Username:</label>
			<input style="margin-left: 18px;" type="text" name="username" id="username" required="">
			<br>
			<label for="Password">Password:</label>
			<input style="margin-left: 21px;" type="password" name="password" id="password" required="">
			<br> 
			<input type="submit" class="btn btn-primary"value="Register">

		</form>
		<br>
		<a href="member.php">Go back</a></p>
	</div>

</body>
</html>