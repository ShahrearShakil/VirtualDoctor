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
		 
		 
		    $dbhost = 'localhost';
            $dbuser = 'root';
            $dbpass = 
   
            $conn = mysql_connect($dbhost, $dbuser, $dbpass);
   
             if(! $conn ) {
                 die('Could not connect: ' . mysql_error());
                }
		 
		    $k=$_GET['k'];
			$terms= explode(" ",$k);
			$query = "SELECT dis_name,medicine FROM symptoms WHERE ";
		    foreach($terms as $each)
			{
			  $i++;
			  
			  if($i == 1)
			    $query .= "dis_name LIKE '%$each%' ";
				else 
				$query .= "OR dis_name LIKE '%$each%' ";
			}
			
		
   mysql_select_db('diseases');
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
		  
		     
			 $name=$row['dis_name'];
			 $medi=$row['medicine'];
			 
			echo "<b>Disease Name: </b>$name<br><b>Medicine:</b>$medi";
		  
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