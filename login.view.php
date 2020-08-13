<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="./assets/css/index.css" />
        <script src="https://kit.fontawesome.com/85b8e23c67.js" crossorigin="anonymous"></script>
        <title>Register</title>
    </head>
    <body>
        <!-- HEADER -->
        <header>
            <div class="top-section">
                <a class="top-section__logo" href="index.php">
                    <i class="fas fa-rocket" ></i>A Random Blog
                </a>
            </div>
        </header>
        
        <!-- REGISTER -->
        <div class="register-form-container">
            <h1>User Login</h1>
        <h2>You need to be logged in to be able to read the posts.</h2>
        <form action="register.php" method="POST" enctype="multipart/form-data">            
            <label for="email">Email</label><br>
            <input type="email" name="email" required autofocus /><br>
            
            <label for="password">Password</label><br>
            <input type="password" name="password" minlength="8" placeholder="8 characters or more..." required autofocus pattern="[A-Za-z0-9]+" /><br>
            
            <input type="submit" value="Login">
        </form>
        
        <p>Not a user? <a href="register.view.php">Register</a> instead!</p>
        </div>
        
<?php

require_once './includes/footer.php';                  
        
?>
