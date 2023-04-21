<?php
session_start();

// Check if the user is logged in, if not redirect to the login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: login.php");
    exit;
}

// Display the user's username
echo "Welcome, " . $_SESSION["username"] . "!";
?>
