<!DOCTYPE html>
<html>

<head>
	<title>Register Form</title>
	<link rel="stylesheet" href="crime.css">
	<style>
	
		h1 {
			text-align: center;
			margin-bottom: 20px;
		}



		label {
			margin-bottom: 10px;
		}

		input[type="text"],
		input[type="email"],
		input[type="password"] {
			padding: 10px;
			margin-bottom: 20px;
			border: none;
			border-radius: 5px;
			box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.1);
		}

	</style>

<body>
	<nav>
		<ul>

			<li><a href="#">Contact Us</a></li>
		</ul>
	</nav>
	</header>
	<h1>CRIME REPORTING MANAGEMENT SYSTEM</h1>
	<div class="container">
		<h1 style="color:black">USER REGISTRATION</h1>
		<form class="from"action="register_process.php" method="post">
			<label for="username">UserName:</label>
			<input type="text" id="username" name="username" required>

			<label for="email">Email:</label>
			<input type="email" id="email" name="email" required>

			<label for="password">Password:</label>
			<input type="password" id="password" name="password" required>

			<label for="confirm_password">Confirm Password:</label>
			<input type="password" id="confirm_password" name="confirm_password" required>
			<br>

			<input type="submit" value="Register" name="submit">
		<p>Already have an account? <a style="color:blue"href="login.php">Login here</a></p>

		</form>

	</div>
</body>

</html>