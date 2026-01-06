<?php
$servername = "localhost";
$username = "root";  // Change if using a different DB user
$password = "";      // Add DB password if applicable
$dbname = "drivexight"; // Your database name

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
