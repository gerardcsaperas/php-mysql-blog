<?php

// Render Header
require_once '../includes/register_login_header.php';

// Connect to DB
require_once '../includes/dbconnection.php';

session_start();

// Function to validate data from POST request
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
    // Store the fata from the post request into a variable, validate and sanitize    
    $email = (isset($_POST['email'])) ? filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL) : false;

    $password = (isset($_POST['password'])) ? test_input(filter_input(INPUT_POST, 'password')) : false;
    
    // Insert data from POST request into users table
    $query = "SELECT * FROM users WHERE email='$email'";

    $login = mysqli_query($db, $query);

    
    // If query returns a user, check if password matches
    if($login && mysqli_num_rows($login) === 1) {
        
        // Convert query result into associative array
        $user = mysqli_fetch_assoc($login);
                
        // Check password
        $password_verify = password_verify($password, $user['password']);
            
        if ($password_verify) {
            // Store user data in the session and go back to homepage
            $_SESSION['user'] = $user;
            echo "<p>Logged in as " . $user['username'] . ".</p>"
                ."<p>If you are not redirected to the homepage in 5 sec, "
                ."click <a href='../index.php'>here</a>.</p>";
            header( "Refresh:5; ../index.php", true, 303);
        } else {
            // Echo out error
            echo "<p style='color:red'>Wrong credentials</p>";
            echo "<a href='login.view.php'>Try again</a>";
        }
    } else {
            // Redirect to login view
         echo "<p style='color:red'>Wrong credentials</p>";
         echo "<a href='login.view.php'>Try again</a>";
    }      
}           

// Render Footer
require_once '../includes/footer.php';  
