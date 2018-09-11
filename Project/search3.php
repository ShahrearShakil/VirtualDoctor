<!DOCTYPE html>
<html>
<head>
	<title>VIRTUAL DOCTOR</title>
	<link rel="stylesheet" type="text/css" href="search1.css">
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
				<li><a href="Diseases.php">Diseases</a></li>
				<li><a href="Treatment.php">Treatment</a></li>
				<li><a href="Medicine.php">Medicine</a></li>
				<li><a href="Doctor.php">Specialist Doctor</a></li>
				<li><a href="Test.php">Test</a></li>

			</ul>
		</div>

		<?php
		 
		 
		    $dbhost = 'localhost';
            $dbuser = 'root';
            $dbpass = 
   
            $conn = mysql_connect($dbhost, $dbuser, $dbpass);
   
             if(! $conn ) {
                 die('Could not connect: ' . mysql_error());
                }
		 
		    $k=$_GET['k'];
			$terms= explode(" ",$k);
			$query = "SELECT * FROM specialist WHERE ";
		    foreach($terms as $each)
			{
			  $i++;
			  
			  if($i == 1)
			    $query .= "expertise LIKE '%$each%' ";
				else 
				$query .= "OR expertise LIKE '%$each%' ";
			}
			
		
   mysql_select_db('doctor');
   $retval = mysql_query( $query );
   
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }	
		
		$query = mysql_query($retval);
		$numrows = mysql_num_rows($retval);
		
		if($numrows>0)
		{
		
		  while($row = mysql_fetch_assoc($retval))
		  {  
		  	 $name=$row['name'];
		     $qua=$row['qualification'];
			 $dis=$row['designation'];
			 $exp=$row['expertise'];
			 $org=$row['organization'];
			 $chm=$row['chamber'];
			 $loc=$row['location'];
			 $phn=$row['phone'];
			 
			echo "<b>Doctor Name: </b>$name<br><b>Qualification:</b>$qua<br><b>Designation:</b>$dis<br><b>Expertise:</b>$exp<br><b>Organization:</b>$org<br><b>Chamber:</b>$chm<br><b>Location:</b>$loc<br><b>Phone:</b>$phn<br>";
		     
			 
			
			 
			
		  
		  }
		
		
		
		}
		else
		 echo "No result is found for \"<b>$k</b>\" ";
		
		
		mysql_close();
		 
		 
		 ?>
		




		<div class="footer">
			<p>@copyrigth,SHAKIL 2016</p>
		</div>

	</div>
</body>
</html>