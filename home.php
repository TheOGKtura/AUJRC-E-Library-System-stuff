<!-- Run the cmd
type http-server "C:\Users\Keoda\Documents\Visual Studio Code\LibrarySystem" (you can change the directory to your folder/pwede ipalit sa lokasyon ng folder na ito)
this is to make the localhost work-->

<!-- Finish the landing page for the system-->
<!-- Make it (semi) interactable-->
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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arellano Library System</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="nav-container">
        <div class="wrapper">
            <nav>
            <div class="logo">
                <img class="home-btn" src="images/logo.png" alt="" />
            </div>
                <ul class="nav-items">
                    <li>
                        <a href="index.html">Home</a> <!-- Put the redirect to home page here.-->
                    </li>

                    <li>
                        <a href="Book List">Book List</a>
                    </li>

                    <li>
                        <a class="nav-btn-container" href="#" search></a>
                            <img class="search-btn" src="images/search-13-64 1.svg" alt="">
                    </li>

                    <!-- <div class="search-box">
                        <input type="text" placeholder="Search here">
                    </div> -->

                    <li>
                        <a href="Help">Help</a>
                    </li>

                    <li>
                        <a href="login.php">Account</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>

    <div class="header-container">
        <div class="wrapper">
            <header>
                <div class="hero-content">
                    <div class="hero-image">
                        <img src="images/background 2.jpg" alt="">
                    </div>
                </div>
            </header>
        </div>
    </div>
    <script src="main.js"></script>
</body>
</html>