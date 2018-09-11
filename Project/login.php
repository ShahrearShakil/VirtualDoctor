<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
	<div class="frm">
		<form action="process.php" method="POST">
			<p>
				<label>Username:</label>
				<input type="text" id="username" name="username" placeholder="Enter your name" />

			</p>
			<p>
				<label>Password:</label>
				<input type="password" id="password" name="password" placeholder="Enter your password" />

			</p>
			<p>
				<input type="submit" id="smt" value="Login" />

			</p>
			

		</form>

		<a href="register.php">Register?</a>

	</div>
</body>
</html>