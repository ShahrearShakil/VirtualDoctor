<?php
	echo "<h1>Resister Form<h1>";

	$submit=$_POST['submit'];

	$firstname=strip_tags($_POST['firstname']);
	$lastname=strip_tags($_POST['lastname']);
	$username=strip_tags($_POST['username']);

	$password=strip_tags($_POST['password']);
	$rpassword=strip_tags($_POST['rpassword']);

	if ($submit) {

		if ($firstname&&$lastname&&$username&&$password&&$rpassword) {


			if ($password==$rpassword) {
				
				if (strlen($firstname)>20 || strlen($lastname)>20 || strlen($username)>15)  {

					echo "firstname/lastname/username cross the limit";
					 
			}
			else{

				if (strlen($password)>32 || strlen($password)<6) {

					echo "Password must be between 6  to 32 character";
				}
				else{

					$password=($password);
					$rpassword=($rpassword);

					$connect=mysql_connect("localhost","root","");
					mysql_select_db("login");

					$namecheck=mysql_query("SELECT username FROM users WHERE username='$username'");
					$count=mysql_num_rows($namecheck);
					if ($count!=0) {
						die("Username is already exist");
					}

					$queryreg=mysql_query("

						INSERT INTO users VALUES('$firstname','$lastname','$username','$password')
						");
					die("You have been registered! <a href='login.php'>Return to the login page</a>");



				}
			}			
		}
		else
				echo "Password is not match!!";
	}
	else
			echo "Please fill in all fields";
}

?>
<!DOCTYPE html>
<html>
<p>
<head>
	<title>Register Page</title>
	<link rel="stylesheet" type="text/css" href="register.css">
</head>
<body>
<div class=frm>
	<form action="register.php" method="POST">
		<table>
			<tr id="fs">
				<td>
					First Name:
				</td>
				<td>
					<input type="text" name="firstname" placeholder="Enter your first name">
				</td>
			</tr>
			<tr id="ls">
				<td>
					Last Name:
				</td>
				<td>
					<input type="text" name="lastname" placeholder="Enter your last name">
				</td>
			</tr>
			<tr id="us">
				<td>
					Choose a username:
				</td>
				<td>
					<input type="text" name="username" placeholder="Enter your username">
				</td>
			</tr>
			<tr id="ps">
				<td>
					Choose a password:
				</td>
				<td>
					<input type="password" name="password" placeholder="Enter your password">
				</td>
			</tr>
			<tr id="rp">
				<td>
					Repeat the password:
				</td>
				<td>
					<input type="password" name="rpassword" placeholder="Enter the password again">
				</td>
			</tr>
		</table>
		<p>
			<input type="submit" name="submit" id="smt" value="Register">
		</p>
	</form>
	</div>
</body>
</html>