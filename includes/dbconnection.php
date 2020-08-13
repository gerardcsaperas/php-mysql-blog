<?php

// Database Connection
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'blog';
$db = mysqli_connect($host, $user, $password, $database);

// Check connection
if ($db -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

// Allow for utf8 characters
mysqli_query($db, "SET_NAMES 'utf8'");

