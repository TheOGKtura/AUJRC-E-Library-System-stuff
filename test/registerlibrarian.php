<?php

// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page

require_once "database/config.php"


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
  <h1 style="width: 340px">Librarian Register</h1>
  <p>Please fill up this form to register for a Librarian account. It will be manually accepted as it is needed to be reviewed first before accepting.</p>
  <!--eto ung nagcoconnect sa database-->
    <form action="insertadmin.php" method="POST">
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
      <label for="cell_No">Number:</label>
      <input style=" margin-left: 34px; margin-bottom: 8px;" type="text" name="cellNo" id="cellNo" placeholder="+63 (Optional)">
      <br>
      <label for="Username">Username:</label>
      <input style="margin-left: 18px;" type="text" name="username" id="username" required="">
      <br>
      <label for="Password">Password:</label>
      <input style="margin-left: 21.5px;" type="password" name="password" id="password" required="">
      <br> 
      <input  type="submit" class="btn btn-success"value="Register">
      <a type="button" class="btn btn-primary" href="index.php" style="margin-left: 5px; ">Back to Home</a>
    </form>
    
 
   
  </div>
</body>
</html>