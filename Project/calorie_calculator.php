<!DOCTYPE html>
<html>
<head>
    <title>Calorie Calculator</title>
    <link rel="stylesheet" type="text/css" href="Test.css">
    <script type="text/javascript">
</script>
</head>
<body>
    <div class="main">
        <div class="header">
            <img src="images/logo.jpg">
        </div>
        <div class="mainmenu">
            <ul>
                <li><a href="Home.html">Home</a></li>
                <li><a href="About.php">About</a></li>
                <li><a href="Disease.php">Disease</a></li>
                <li><a href="Treatment.php">Treatment</a></li>
                <li><a href="Medicine.php">Medicine</a></li>
                <li><a href="Doctor.php">Specialist Doctor</a></li>
                <li><a href="Test.php">Test</a></li>

            </ul>
        </div>
        <div class="Maincontent">
            <div class="Content">
              <form action="" name="f1" method="POST">
                <input type="text" name="age" placeholder="Enter Your Age" required><br><br>
                <input type="text" name="weight" placeholder="Enter  Your Weight" required><br><br>
                <input type="text" name="height" placeholder="Enter Your Height" required><br><br>
                <input type="radio" name="male" value="male" >Male<br>
                <input type="radio" name="female" value="female" >Female<br><br>
                <input type="submit" value="Calculate" ><br><br>
            </form>
        </div>
<?php

if(isset($_POST['age']))
{
$a=$_POST['age'];
$w=$_POST['weight'];
$h=$_POST['height'];


if(isset($_POST['male']))
{
        $i=(($h*30.48)/12.00);
        $c=(10*$w+(6.25*$i)-(5*$a)+5);
        echo("You need $c calories per day");
}
else if(isset($_POST['female']))
{
        $i=(($h*30.48)/12.00);
        $c=(10*$w+(6.25*$i)-(5*$a)-161);
        echo("You need $c calories per day");
}
}

?>  
            
        </div>
        <div class="footer">
            <p>@copyrigth,SHAKIL 20016</p>
        </div>

    </div>
</body>
</html>