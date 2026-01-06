<?php
session_start();
if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
    header("Location: login.html"); // Redirect if not logged in
    exit();
}
echo "Welcome, " . $_SESSION['user_name'] . "! You are logged in as an Admin.";
?>
<a href="logout.php">Logout</a>
