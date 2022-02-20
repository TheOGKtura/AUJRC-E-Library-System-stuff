<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
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
            <img src="images/fau.png" alt="">
        </div>
<ul class="nav-area">
<li><a href="index.html">Home</a></li>
<li><a href="#">Booklist</a></li>
<li><a href="#"><?php echo htmlspecialchars($_SESSION["username"]); ?></a></li>
<li><a href="Log-out.php">Log-out</a></li>
<li><a href="#">Help</a></li>
</ul>
</div>
<div class="welcome-text">
<h1>Welcome To The<span> Library</span></h1>
<a href="#">Contact US</a>
    </div>
</header>

</body>
</html>