<?php

// Connect to DB
require_once '../includes/dbconnection.php';

// Require helper functions
require_once 'helpers.php';

// Access session variables
session_start();

// Check if user is logged in
$logged_in = isset($_SESSION['user']) ? true : false;

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="../assets/css/index.css" />
        <script src="https://kit.fontawesome.com/85b8e23c67.js" crossorigin="anonymous"></script>
        <title>PHP & MySQL Blog</title>
    </head>
    <body>
        <!-- HEADER -->
        <header>
            <div class="top-section">
                <a class="top-section__logo" href="../index.php">
                    <i class="fas fa-rocket" ></i>A Random Blog
                </a>
            </div>
        </header>

