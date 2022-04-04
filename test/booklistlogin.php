<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;

}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" type="x-icon" href="images/tab.png">
    <meta charset="UTF-8">
    <title>Arellano University </title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">    
</head>
<body>
    <header>
    <div class="wrapper">
        <div class="logo">
            <img src="images/aulogo.png" alt="">
        </div>
            <div class="logo-text">
        <h1>E-Library System</h1>
    </div>
<ul class="nav-area">
<li><a href="home.php">Home</a></li>
<li><a href="newslogin.php">News</a></li>
<ul class="dropdown">
  <button class="dropbtn"><?php echo htmlspecialchars($_SESSION["username"]); ?></button>
  <li class="dropdown-content">
    <a href="logout.php">Logout</a>
    <a href="signup.php">Settings</a>
</ul>
</li>
<li><a href="booklistlogin.php">Booklist</a></li>
<li><a href="helplogin.php">Help</a></li>
</div>
<div class="banner">
<h1>Booklist</h1>
<div class="books">
    <a href="bookpage.php">
    <img src="bookimages/war of art.jpg">
    <div class ="desc"> The War of Art </div>
</a>
</div>
</header>
<footer>
    All Right Reserved Web Master
</footer>
</body>
</html>