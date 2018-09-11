<!DOCTYPE html>
<html>
<head>
    <title>Blood Pressure Calculator</title>
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
               <form action="" name="f2" method="POST">
                <input type="text" name="sp" placeholder="Enter Systolic Pressure" required><br><br>
                <input type="text" name="dp" placeholder="Enter Diastolic Pressure" required><br><br>
                <input type="submit" value="Calculate"><br><br>
                </form>        
            </div>
            <?php

        if(isset($_POST['sp']) || isset($_POST['dp'] ))
        {
             $s=$_POST['sp'];
             $d=$_POST['dp'];

              if(($s>=70 && $s<=90) && ($d>=40 && $d<=70))
                {
                    echo("You  Low Blood Pressure<br><br>
                            Eat More Healthy Food That Have More Fat<br> 
                            Example: Beaf, Mutton, Egg,milk Etc");
                 
                }
                else if(($s>=91 && $s<=120) && ($d>=60 && $d<=80))
                {
                    echo("You Have  Normal Blood Pressure<br><br>Eat Healthy Food Regularly And Avoid Food Those have High Fat");
                }
                else if(($s>=121 && $s<=140) && ($d>=81 && $d<=90))
                {
                     echo("You Have  Pre High Blood Pressure<br><br>
                             Stop Eating Food Those Have High Fat<br>
                             Beaf, Mutton, Egg, Porn, Oil Are Harmful For Your Health>br>");
                           
                }
                else if(($s>=140 && $s<=190) && ($d>=91 && $d<=130))
                {
                     echo("You Have  High Blood Pressure!!!<br><br>
                             Totally Stop Eating Food Having High Fat And Oil<br>
                             Omit Beaf, Mutton, Egg, Porn, Oil From Your Food List<br>
                             Only Eat Food Those Have Less Oil Like Vegetables<br>
                             Chicken, Fish etc<br>
                             Start Regular Morning Exercise. Consult with your doctor<br>
                             for more treatment ");
                }
                else
                {
                    echo("Wrong Input!!!");
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