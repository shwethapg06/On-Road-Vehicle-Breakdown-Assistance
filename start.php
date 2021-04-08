<?php
ob_start();
session_start();
?>
<html> 
<head> 
<meta charset="UTF-8"> 
<title>E-workshop</title> 
<style>
     blink {
        color: #1c87c9;
        font-size: 50px;
        font-weight: bold;
        font-family: sans-serif;
      }   
    </style>
<link rel="stylesheet" href="Start.css"> 
    </head>
</head>
<body>
<div id="container">
  <div id="content">
    <div id="about">
      <h1>
        <div style='float:left; margin-bottom:10px;'>
          On Road Vehicle Breakdown Assistance Finder
        </div>      
        <div class="stage">
          <div class="pyramid3d">
            <div class="triangle side1"></div>
            <div class="triangle side2"></div>
            <div class="triangle side3"></div>
            <div class="triangle side4"></div>
          </div>
        </div> 
      </h1>
      <h3 style='clear:both' class="subhead">
      <?php
        echo "<a href='index.php'><blink>Click Here</blink></a>" ?> 
        E-workshop-Because you deserve a peaceful driving.
      </h3>
      <p id='pleft'>
        A Vehicle breakdown can be very challenging moment for customers. <b>E-workshop</b> introduces a new <b>On Road Vehicle Breakdown Assistance Finder</b>
      </p>
      <p id='pright'>
        <b>"E-workshop"</b> is a Vehicle Breakdown Assistance that can be used to find a mechanic on user location.
      </p>
      <ul>
        <li>For Assistance please call <b>1800 220 200</b></li>
        <li>Or write us on <b>eworkshop@wiaaindia.in</b> </li>
      </ul>
      <p>
        24/7 EMERGENCY ROADSIDE ASSISTANCE
      </p>
    </div>
  </div>
</div>
</body>
</html>
<?php
include("car.html");
?>