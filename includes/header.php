<?php require_once 'dbconnection.php'; ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
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
                        <a href="./views/register.view.php">
                            <i class="fas fa-user"></i>Register
                        </a>
                    </li>
                    <li>
                        <a href="./views/login.view.php">
                            <i class="fas fa-sign-in-alt"></i>Login
                        </a>
                    </li>
                </ul> 
            </div>
            
            <!-- CATEGORIES MENU -->
            <nav class="top-navbar">
                <a href="">Japan</a>
                <a href="">Fitness</a>
                <a href="">Web Dev</a>
                <a href="">Random</a>
            </nav>
        </header>
