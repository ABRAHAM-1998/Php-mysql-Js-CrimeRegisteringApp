// register_process.php

<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  // Get the form data
  $username = $_POST["username"];
  $password = $_POST["password"];

  // Validate the form data (you can add more validation if needed)
  if (empty($username) || empty($password)) {
    $_SESSION["error"] = "Please enter a username and password";
    header("Location: login.php");
    exit;
  }

  $servername = "localhost";
  $username = "root";
  $password = "password";
  $dbname = "crime_reporting";

  $conn = mysqli_connect($servername, $username, $password, $dbname);

  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
  $username = mysqli_real_escape_string($conn, $_POST['username']);
  $password = mysqli_real_escape_string($conn, $_POST['password']);
  $sql = "SELECT * FROM users WHERE username='$username'AND password='$password'";

  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    // Store data in session variables
    $_SESSION["loggedin"] = true;
    $_SESSION["id"] = $id;
    $_SESSION['username'] = $row['username'];
    echo $row['username'];

    // header("location: index.php");
    $_SESSION["user_id"] = $row["id"];
    header("Location: index.php");
    exit;
  } else {

    // Authentication failed, redirect back to login page with error message
    $_SESSION["error"] = "Invalid password";
    echo "<H2>" . "Invalid password" . "</H2>";
    header("Location: login.php");
    exit;
  }


  // Close the database connection
  mysqli_close($conn);
} else {
  // Redirect back to login page if the form was not submitted
  header("Location: login.php");
  exit;
}
?>