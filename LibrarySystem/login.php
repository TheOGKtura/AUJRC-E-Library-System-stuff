<?php
// Initialize the session
session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: home.php");
    exit;

}
 
// Include config file
require_once "database/config.php";
 
// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = $login_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter username.";
    } else{
        $username = trim($_POST["username"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate credentials
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT user_id, username, password, access_level FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($conn, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = $username;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);
                
                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $user_id, $username, $encrypted_password, $access_level);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $encrypted_password)){
                            // Password is correct, so start a new session
                            
                            if ($access_level == 1) {
                                
                            
                            session_start();
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["user_id"] = $user_id;
                            $_SESSION["username"] = $username;  

                            // Redirect user to welcome page
                            header("location: home.php");
                        }
                        if ($access_level == 0) {

                            session_start();
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["user_id"] = $user_id;
                            $_SESSION["username"] = $username;
                            header("location: home.php");

                        }
                        } else{
                            // Password is not valid, display a generic error message
                            $login_err = "Invalid username or password.";
                        }
                    }
                } else{
                    // Username doesn't exist, display a generic error message
                    $login_err = "Invalid username or password.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($conn);
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" type="x-icon" href="images/tab.png">
    <meta charset="UTF-8"/>
    <title>Library Log-in </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {  background-color: #284394; font-family: "Roboto Condensed", sans-serif;}
        .wrapper {  

            border: 3px solid black; 
          background-color: lightblue;  
            width: 350px;
             padding: 20px; 
             box-shadow: 5px 10px #203145
         }

        .navbar{
          float: left;
           height: 50px;
           padding: 15px 15px;	
           font-size: 18px;
           line-height: 20px;}
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

    </style>
</head>
<body>
    <div>
		<header class="header">
        <img class="logo" src = "images/aulogo.png"/>
        <h2 style="margin-left: 70px; margin-top: 10px;">Library System</h2>
        </header>
	</div>
    <div style="width: 340px; margin: 50px auto; font-size: 15px;color: #203145;" class="wrapper">
        <h2>Login</h2>
        <p>Please fill in your account to login.</p>
        
        <?php 
        if(!empty($login_err)){
            echo '<div class="alert alert-danger">' . $login_err . '</div>';
        }        
        ?>

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
                <span class="invalid-feedback"><?php echo $username_err; ?></span>
            </div>    
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>">
                <span class="invalid-feedback"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Login">
                <a href="index.php" class="btn btn-info">Back to Home</a>
          </div>
        </form>
    
    </div>
</body>
</html>

  
