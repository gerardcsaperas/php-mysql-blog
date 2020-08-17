<?php

// Connect to DB
require_once 'includes/dbconnection.php';

// Require helper functions
require_once 'helpers.php';

// Access session variables
session_start();

// Check if user is logged in
$logged_in = isset($_SESSION['user']) ? true : false;

// If user is logged in, retrieve username
$username = isset($_SESSION['user']) ? $_SESSION['user']['username'] : null;

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="description" content="PHP & MySQL Blog" />
        <link rel="stylesheet" type="text/css" href="./assets/css/index.css" />
        <script src="https://kit.fontawesome.com/85b8e23c67.js" crossorigin="anonymous"></script>
        <title>PHP & MySQL Blog</title>
    </head>
    <body>
        <!-- HEADER -->
        <header>
            <div class="top-section">
                <a class="top-section__logo" href="index.php">
                    <i class="fas fa-rocket" ></i>A Random Blog
                </a>
                <ul class="top-section__access-buttons">
                    <li>
                        <!-- If user is logged in, show username, else show 'Register' -->
                        <a href="<?php echo $logged_in ? './user.view.php' : './views/register.view.php'?>">
                            <i class="fas fa-user"></i>
                            <?php echo $logged_in ? trim($username) : 'Register';?>
                        </a>
                    </li>
                    <li>
                        <!-- If user is logged in, show 'Logout', else show 'Login' -->
                        <a href="<?php echo $logged_in ? './views/logout.php' : './views/login.view.php'?>">
                            <i class="fas fa-sign-in-alt"></i>
                            <?php echo $logged_in ? 'Logout' : 'Login';?>
                        </a>
                    </li>
                </ul> 
            </div>
        </header>
