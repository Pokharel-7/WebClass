<?php
// database.php

$servername = "localhost";
$username = "root";
$password = "";
$database = "student"; // ✅ Make sure this matches your phpMyAdmin database name

$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "Connection established successfully<br>";
?>
