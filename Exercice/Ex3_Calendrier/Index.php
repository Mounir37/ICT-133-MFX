<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>
<?php
/**
 *Auteur:   Mounir Fiaux
 *Titre:    Index.php
 *Date:     05.12.2019
 *Version:
 */
$monthQS = $_GET['month'];
$yearQS = $_GET['year'];
$month = array("Janvier", "Février", "Mars", "Avril", "Mai", "juin", "Juillet", "Aout", "Septembre", "Octobre", "Novembre", "Décembre");
$year = array("2010", "2011", "2012", "2013", "2014", "2015", "2016", "2017", "2018", "2019", "2020", "2021", "2022", "2023", "2024", "2025", );
echo "<div class=\"month\">
	  	<ul>
	  		<li>August<br>2017</li>
	  	</ul>
	  </div>";
?>
<div class="month">
    <ul>
        <li>August<br>2017</li>
    </ul>
</div>

<ul class="weekdays">
    <li>Mo</li>
    <li>Tu</li>
    <li>We</li>
    <li>Th</li>
    <li>Fr</li>
    <li>Sa</li>
    <li>Su</li>
</ul>

<ul class="days">
    <li>1</li>
    <li>2</li>
    <li>3</li>
    <li>4</li>
    <li>5</li>
    <li>6</li>
    <li>7</li>
    <li>8</li>
    <li>9</li>
    <li><span class="active">10</span></li>
    <li>11</li>
</ul>
</body>
</html>