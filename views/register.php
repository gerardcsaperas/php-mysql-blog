<?php

// Render Header
require_once '../includes/register_login_header.php';
?>

<div class="register-login-form-container">

<?php

// If a POST request has been submitted...
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Function to validate data from POST request
    function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
    
    
    // Store the fata from the post request into a variable, validate and sanitize
    $username = (isset($_POST['username'])) ? test_input(filter_input(INPUT_POST, 'username')): false;
    
    $email = (isset($_POST['email'])) ? filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL) : false;

    $password = (isset($_POST['password'])) ? test_input(filter_input(INPUT_POST, 'password')) : false;
    
    // Encrypt password
    $safe_password = password_hash($password, PASSWORD_BCRYPT, ['cost'=>12]);
     
    // Insert data from POST request into users table
    $new_user = "INSERT INTO users VALUES(NULL, '$username', '$email', '$safe_password', CURDATE())";

    $insert_new_user = mysqli_query($db, $new_user);

    
    // If user inserted correctly...Else...
    if($insert_new_user) {
        echo "<p>New user created. "
        ."<a href='login.view.php'>Login</a>"
        ." in order to write and read posts.</p>";
    } else {
        if (mysqli_error($db) === "Duplicate entry '$email' for key 'email'") {
            echo "<p>A user with this email already exists.</p>";
        } else {
            echo "<p>Error" . mysqli_error($db) . "</p>";
        }
    }
}
?>

</div>

<?php
// Render Footer
require_once '../includes/footer.php';                       
