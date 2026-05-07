<!DOCTYPE html
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title>Using PHP Variables, arrays and operators</title>
     <!-- add other meta -->
</head>
<body>
    <h1>PHP Variables, arrays and operators </h1>
<?php
$days = array ("monday", "tuesday", "wednesday", "thursday", "friday", "saturday", "sunday"); // declare and initialise array 
$days_french  = array("Dimanche", "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi");

echo "<p>The days of the week are $days[0], $days[1], $days[2], $days[3], $days[4], $days[5], and $days[6]. </p>
<p>The days of the week in french are $days_french[0], $days_french[1], $days_french[2], $days_french[3], $days_french[4], $days_french[5], $days_french[6]</p>";
?>
</body>
</html>