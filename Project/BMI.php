<!DOCTYPE html>
<html>
<head>
    <title>BMI Calculator</title>
    <link rel="stylesheet" type="text/css" href="Test.css">
    <script type="text/javascript">
    function computeBMI()
    {
        
        var height=Number(document.getElementById("height").value);
        var heightunits=document.getElementById("heightunits").value;
        var weight=Number(document.getElementById("weight").value);
        var weightunits=document.getElementById("weightunits").value;


        
        if (heightunits=="inches") height/=39.3700787;
        if (weightunits=="lb") weight/=2.20462;

        
        var BMI=weight/Math.pow(height,2);

        
        document.getElementById("output").innerText=Math.round(BMI*100)/100;

        var output =  Math.round(BMI*100)/100
        if (output<18.5)
        document.getElementById("comment").innerText = "Underweight";
      else   if (output>=18.5 && output<=25)
        document.getElementById("comment").innerText = "Normal";
     else   if (output>=25 && output<=30)
        document.getElementById("comment").innerText = "Obese";
     else   if (output>30)
        document.getElementById("comment").innerText = "Overweight";
        
    }
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
               <h1>Body Mass Index Calculator</h1>
               <p>Enter your height: <input type="text" id="height"/>
               <select type="multiple" id="heightunits">
                    <option value="metres" selected="selected">metres</option>
                    <option value="inches">inches</option>
               </select>
               </p>
               <p>Enter your weight: <input type="text" id="weight"/>
               <select type="multiple" id="weightunits">
                    <option value="kg" selected="selected">kilograms</option>
                     <option value="lb">pounds</option>
               </select>
               </p>
              <input type="submit" value="computeBMI" onclick="computeBMI();">
               <h1>Your BMI is: <span id="output">?</span></h1>

               <h2>This means you are: <span id="comment"> ?</span> </h2>  
        </div>
        </div>
        <div class="footer">
            <p>@copyrigth,SHAKIL 20016</p>
        </div>

    </div>
</body>
</html>