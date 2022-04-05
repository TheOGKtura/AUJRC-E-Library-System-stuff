<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
// BOOK THUMBNAILS ARE ONLY PNG, TYVM :)
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
<div>
<ul class="nav-area">
<li><a href="home.php">Home</a></li>
<li><a href="newslogin.php">News</a></li>
<li><a href="booklistlogin.php">Booklist</a></li>
<li><a href="logout.php">Logout</a></li>
<li><a href="helplogin.php">Help</a></li>
</ul>
</div>
<div class="welcome-text">
<h1>The War of Art</h1>
</div>
<div class="book-page-image">
         <img src="bookimages/war of art.jpg">
         <div class="book-page">
      <p>The War of Art is a 2002 non-fiction book <br> by American author Steven Pressfield.</br> <br>The book highlights the forms of resistance faced by artists,<br> entrepreneurs, athletes, and others who are trying to break </br>through creative barriers.</p>
<br>
<div class="button button-read">
    <a href="bookread.php">READ</a>
</div>
<br/>
</header>
</body>
</html>