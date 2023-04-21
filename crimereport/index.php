<!DOCTYPE html>
<html>

<head>
	<title>CRIME REPORTING MANAGEMENT SYSTEM</title>
	<link rel="stylesheet" href="crime.css">

</head>

<body>
	<header>
		<?php
		session_start();
		include('header.php');
		?>
		<div class="hero">
			<p>Report crimes and help keep your community safe</p>
			<a href="crimeregisterform.php" class="btn">Report Now</a>
		</div>
	</header>


	<footer>
		<p>&copy; 2023 Crime Reporting Management System. All rights reserved. | Developer @ Abraham Jolly</p>
	</footer>
</body>

</html>