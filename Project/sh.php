<?php

require_once("config.php");



?>

<!DOCTYPE html>
<html>
<head>
	<title>VIRTUAL DOCTOR</title>
	<link rel="stylesheet" type="text/css" href="search2.css">
</head>
<body>
	<div class="main">
		<div class="header">
			<img src="images/logo.jpg">
		</div>
		<div class="mainmenu">
			<ul>
				<li><a href="logout.php">Logout</a></li>
				<li><a href="Home.html">Home</a></li>
				<li><a href="About.php">About</a></li>
				<li><a href="Disease.php">Diseases</a></li>
				<li><a href="Treatment.php">Treatment</a></li>
				<li><a href="Medicine.php">Medicine</a></li>
				<li><a href="Doctor.php">Specialist Doctor</a></li>
				<li><a href="Test.php">Test</a></li>

			</ul>
		</div>

   <?php

    $data=$_GET['k'];
    mysql_select_db('doctor');
    $query="SELECT * FROM specialist WHERE";
    
    while($row=mysqli_fetch_array($send))
    {
        echo("$row[name]");
    }



   ?>


</div>
</body>
</html>
		





