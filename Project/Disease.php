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
	<link rel="stylesheet" type="text/css" href="Disease.css">
</head>
<body>
	<div class="main">
		<div class="header">
			<img src="images/disease.jpg">
		</div>
		<div class="mainmenu">
			<ul>
        <li><a href="Home.html">Home</a></li>
        <li><a href="About.php">About</a></li>
        <li><a href="Disease.php">Diseases</a></li>
        <li><a href="Treatment.php">Treatment</a></li>
        <li><a href="Medicine.php">Medicine</a></li>
        <li><a href="Doctor.php">Specialist Doctor</a></li>
        <li><a href="Testin.php">Test</a></li>

			</ul>
		</div>
		<div class="Maincontent">
			<div class="Search">
				<center>
					<h2>Search Disease</h2>
					<form action="search.php" method="GET">
						<input type="text" name="k" size="50" placeholder="Enter the name of the disease" />
						<input type="submit" value="Search">
					</form>
				</center>
			</div>
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
  		<div class="pra">
  			<p><b>Describtion:</b>It would be difficult to overstate the impact of disease on history. Since the beginning of human existence on the planet, diseases have played a significant role in the events of every era. Malaria, one of the oldest known diseases, caused drastic declines in the population of Greek city-states in the fourth century. The Spanish flu epidemic of 1918–1919 killed 20 million people around the world — more than twice the number of people who were killed during World War I. In 1944, a major outbreak of polio around Hickory, North Carolina, overwhelmed the area’s medical facilities, separating sick children from their families and preventing healthy young people from visiting each other for fear of contracting the disease.</p>
  			<p>Scientific achievements through the ages have greatly alleviated the effects of some of the worst diseases. The formulation of vaccines, the advent of effective mosquito control, and the introduction of modern sanitation to urban areas have rendered diseases like polio, yellow fever, and cholera all but unheard of in the United States. As a result, average life expectancy in the U.S. has risen from 47 years in 1900 to 77 years in 2008. Unfortunately, though, outbreaks of many of the most serious diseases still cause illness and death around the world.</p>
			<p>This brief listing of some of the most notorious diseases explains their causes, symptoms, history, prevention, and treatment, and provides links to further information.</p>
																<p>-By <b>Emily Jack</b></p>
  		</div>
	</div>
</body>
</html>