<!DOCTYPE html>
<html>
<head>
	<title>Crime Register Form</title>
    <link rel="stylesheet" href="crime.css">
	<?php
		session_start();
		include('header.php');
		?>
</head>
<body>
	<h1>Crime Register Form</h1>
	<form class="from" action="dbconnect.php" method="post">
		<label for="crime_type">Type of Crime:</label>
		<select id="crime_type" name="crime_type">
			<option value="ROBBERY">ROBBERY</option>
			<option value="MURDER">MURDER</option>
			<option value="ASSAULT">ASSAULT</option>
			<option value="THEFT">THEFT</option>
			<option value="VANDALISM">VANDALISM</option>
			<option value="CYBER CRIME">CYBER CRIME</option>

		</select>

		<label for="date">Date:</label>
		<input type="date" id="date" name="date" required>

		<label for="location">Location:</label>
		<input type="text" id="location" name="location" required>

		<label for="description">Description:</label>
		<textarea id="description" name="description" required></textarea>

		<button type="submit">Submit Report</button>
	</form>
</body>
</html>
