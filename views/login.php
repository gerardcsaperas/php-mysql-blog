<?php

// Render Header
require_once '../includes/register_login_header.php';

// Connect to DB
require_once '../includes/dbconnection.php';

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
    $user =
            "SELECT email FROM users"
           ."WHERE email='$email' AND password='$password'";

    $login_user = mysqli_query($db, $user);

    
    // If query returns a user, log in
    if($user) {
        echo "<p>Logged In</p>";
    } else {
            echo "<p>Error" . mysqli_error($db) . "</p>";
    }
}

// Render Footer
require_once '../includes/footer.php';  
