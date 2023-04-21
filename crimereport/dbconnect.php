<?php
// Database credentials
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

// Sanitize the input data
$crime_type = mysqli_real_escape_string($conn, $_POST['crime_type']);
$date = mysqli_real_escape_string($conn, $_POST['date']);
$location = mysqli_real_escape_string($conn, $_POST['location']);
$description = mysqli_real_escape_string($conn, $_POST['description']);

$sql = "INSERT INTO report (crime_type, date, location, description) VALUES ('$crime_type', '$date', '$location', '$description')";
if (mysqli_query($conn, $sql)) {
  header("Location: viewcrimereports.php");
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>