<?php

// Database connection details
$hostname = "localhost";
$username = "root";
$password = "";
$database = "smoothies";

$conn = mysqli_connect($hostname, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


?>