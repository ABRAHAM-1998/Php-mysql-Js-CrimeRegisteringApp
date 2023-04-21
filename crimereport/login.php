<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
	<link rel="stylesheet" href="crime.css">
	<style>
		* {
	margin: 0;
	padding: 0;
	box-sizing: border-box;
}

body {
	background: gray;
	font-family: sans-serif;
}

.login-box {
	position: absolute;
	top: 60%;
	left: 50%;
	transform: translate(-50%, -50%);
	width: 350px;
	padding: 40px;
	background: #fff;
	border-radius: 10px;
}

.login-box h2 {
	text-align: center;
	margin-bottom: 40px;
	color: #1abc9c;
}

.user-box {
	position: relative;
}

.user-box input {
	width: 100%;
	padding: 10px 0;
	font-size: 16px;
	color: #333;
	margin-bottom: 30px;
	border: none;
	border-bottom: 2px solid #1abc9c;
	outline: none;
	background: transparent;
}

.user-box label {
	position: absolute;
	top: 0;
	left: 0;
	font-size: 16px;
	color: #999;
	pointer-events: none;
	transition: 0.5s;
}

.user-box input:focus ~ label,
.user-box input:valid ~ label {
	top: -20px;
	left: 0;
	color: #1abc9c;
	font-size: 12px;
}

button {
	background: #1abc9c;
	color: #fff;
	border: none;
	padding: 10px 20px;
	border-radius: 5px;
	cursor: pointer;
	margin-top: 20px;
	font-size: 16px;
}

button:hover {
	background: #148f77;
}
h1{
	color: white;
}

	</style>
</head>
<body>
<header>
		<nav>
			<ul>

				<li><a href="#">Contact Us</a></li>
			</ul>
		</nav>
	</header>
	<h1>CRIME REPORTING MANAGEMENT SYSTEM</h1>

	<div class="login-box">
		<h2>Login Here</h2>
		<form action="login_process.php" method="post">
			<div class="user-box">
				<input type="text" name="username" required>
				<label>Username</label>
			</div>
			<div class="user-box">
				<input type="password" name="password" required>
				<label>Password</label>
			</div>
			<button type="submit" name="login">Login</button>
		</form>
		<p>Don't have account?<a style="color:blue" href="register.php">Register Now</a></p>
	</div>
</body>
</html>
