<!DOCTYPE html>
<html>
<head>
	  <title>VIRTUAL DOCTOR</title>
	  <meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  	<style>
  		.carousel-inner > .item > img,
  		.carousel-inner > .item > a > img {
      width: 70%;
      margin-top: 10px;
      margin-bottom: 10px;
      margin-right: 70px;
      margin-left: 70px;
     
  }
  </style>
  	<link rel="stylesheet" type="text/css" href="Home.css">
</head>
<body>
	<div class="main">
		<div class="header">
			<img src="images/logo.jpg">
		</div>
		<div class="mainmenu">
			<ul>
				<li><a href="login.php">Login</a></li>
        <li><a href="register.php">Register</a></li>
				<li><a href="Home.html">Home</a></li>
				<li><a href="logout.php">About</a></li>
				<li><a href="Disease.php">Diseases</a></li>
				<li><a href="Treatment.php">Treatment</a></li>
				<li><a href="Medicine.php">Medicine</a></li>
				<li><a href="Doctor.php">Specialist Doctor</a></li>
				<li><a href="Test.php">Test</a></li>

			</ul>
		</div>
		<div class="container">
  		<br>
  			<div id="myCarousel" class="carousel slide" data-ride="carousel">
    			<ol class="carousel-indicators">
      				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      				<li data-target="#myCarousel" data-slide-to="1"></li>
      				<li data-target="#myCarousel" data-slide-to="2"></li>
      				<li data-target="#myCarousel" data-slide-to="3"></li>
    			</ol>
    		<div class="carousel-inner" role="listbox">
      			<div class="item active">
        			<img src="images/slider.jpg" alt="Slider" width="460" height="150">
      			</div>

     		 	<div class="item">
        			<img src="images/slider2.jpg" alt="Slider2" width="460" height="150">
      			</div>
    
      			<div class="item">
        			<img src="images/slider3.jpg" alt="Slider3" width="460" height="150">
     			</div>

      			<div class="item">
        			<img src="images/slider4.jpg" alt="Slider4" width="460" height="150">
      			</div>
    		</div>
  		</div>
  			<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      			<span class="sr-only">Previous</span>
    		</a>
    		<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      			<span class="sr-only">Next</span>
    		</a>
  	</div>
		<div class="Maincontent">
			<div class="Content">
				<h2>Content Title</h2>

        <div class="d">

        <h3>Diseases</h3>
        <p>Give the disease name it will show the Symptoms of that disease.</p></div>

        <div class="t">
        <h3>Treatment</h3>
        <p>Provide the primary treatment.</p></div>

        <div class="m">
        <h3>Medicine</h3>
        <p>Show the required medicine.</p></div>

        <div class="s">
          <h3>Specialist Doctor</h3>
          <p>Help to find Specialist Doctor for particular diseases.</p>
        </div>

        <div class="te">
          <h3>Test</h3>
          <p>Calculate different type of test.</p>
        </div>

			</div>
			<div class="Sidebar">
				<h2>Newsbar</h2>
				<marquee direction="up">
				<ul>
				<li><a href="">Home</a></li>
				<li><a href="">About</a></li>
				<li><a href="">Check Disease</a></li>
				<li><a href="">Find Treatment</a></li>
				<li><a href="">Medicine</a></li>
				<li><a href="">Find Specialist Doctor</a></li>
				<li><a href="">Testing</a></li>

			</ul>
			</marquee>

			</div>
		</div>
		<div class="footer">
			<p>@copyrigth,SHAKIL 2016</p>
		</div>

	</div>
</body>
</html> 