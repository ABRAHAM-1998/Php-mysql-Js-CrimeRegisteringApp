// register_process.php

<?php
$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "crime_reporting";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// If the registration form is submitted
if (isset($_POST['submit'])) {
  $username = mysqli_real_escape_string($conn, $_POST['username']);
  $password = mysqli_real_escape_string($conn, $_POST['password']);
  // Check if the username already exists in the database
  $sql = "SELECT * FROM users WHERE username='$username'";
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result) > 0) {
    echo "Username already exists.";
    
  } else {
    // Insert the new user into the "users" table
    $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
    if (mysqli_query($conn, $sql)) {
      header("Location: index.php");
    }
  }
}

// Close the database connection
mysqli_close($conn);
?>
