<?php

		 
		 
		    $dbhost = 'localhost';
            $dbuser = 'root';
            $dbpass =  
   
            $conn = mysqli_connect($dbhost, $dbuser, $dbpass);
   
             if(! $conn ) {
                 die('Could not connect: ' . mysql_error());
                }

              else
              {
              	 echo("connected");
              }






?>