<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="crime.css">
    <title>Document</title>
</head>
<body>
<?php
	session_start();
	include('header.php');
?>



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

// If the delete button is clicked for a specific report
if (isset($_POST['delete']) && isset($_POST['id'])) {
	$id = $_POST['id'];
	// Delete the corresponding record from the "report" table
	$sql = "DELETE FROM report WHERE id='$id'";
	mysqli_query($conn, $sql);
  }
  if (isset($_POST['edit']) && isset($_POST['id'])) {
	$id = $_POST['id'];
	
  	header("Location: createNewReport.php/?id=".$id);
  }

  
  // Select all records from the "report" table
  $sql = "SELECT * FROM report";
  $result = mysqli_query($conn, $sql);
  
  // Check if there are any records
  if (mysqli_num_rows($result) > 0) {
	// Output data of each row in an HTML table with a delete button in each row
	echo "<table>";
	echo "<tr><th>ID</th><th>Crime Type</th><th>Date</th><th>Location</th><th>Description</th><th>Action</th></tr>";
	while ($row = mysqli_fetch_assoc($result)) {
	  echo "<tr><td>".$row["id"]."</td><td>".$row["crime_type"]."</td><td>".$row["date"]."</td><td>".$row["location"]."</td><td>".$row["description"]."</td><td>";
	  echo "<form method='post' action=''>";
	  echo "<input type='hidden' name='id' value='".$row["id"]."'>";
	  echo "<input type='submit' name='delete' value='Delete'>";
	  echo "<input type='submit' name='edit' value='Edit'>";

	  echo "</form>";
	  echo "</td></tr>";
	}
	echo "</table>";
  } else {
	echo "No records found.";
  }
  
  // Close the database connection
  mysqli_close($conn);
?>
    
</body>
</html>