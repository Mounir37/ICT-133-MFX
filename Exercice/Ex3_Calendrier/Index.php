<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exo Calendrier</title>
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>
<?php
/**
 *  Projet: Calendrier
 *  Repos: ICT-133-SRD
 *  Author: Mounir Fiaux
 *  Creation date: 15.12.2019
 */
$month = 8;
$year = 2019;
if (isset($_GET['month']) && isset($_GET['year'])) {
    $month = $_GET['month'];
    $year = $_GET['year'];
}
$now = time();
$year += 0;
$month += 0;
$mois_avant = $month - 1;
$mois_apres = $month + 1;
$annee_avant = $year - 1;
$annee_apres = $year + 1;

if ($month == 1) {
    $mois_avant = 12;
    $mois_apres = 2;
} else if ($month == 12) {
    $mois_apres = 1;
    $mois_avant = 11;
    $yeartomonth = $annee_apres;
} else {
    $mois_avant = $month - 1;
    $mois_apres = $month + 1;
    $yeartomonth = $year;
}
$jour_commencement = date("w", strtotime("$year-$month-0"));
$jour_commencement += 0;
echo $jour_commencement;
$lastdaypossiblelastmonth = 31;
while (checkdate($mois_avant, $lastdaypossiblelastmonth, $year) != true) {
    $lastdaypossiblelastmonth--;
}
$lastdaypossiblethismonth = 31;
while (checkdate($month, $lastdaypossiblethismonth, $year) != true) {
    $lastdaypossiblethismonth--;
}

$month = date("F");

echo '<div class="month"><ul>';
echo "<li>$month<br>$year</li>";
echo "</div></ul>";
echo '<ul class="weekdays">';
for ($i = 1; $i <= 7; $i++) {
    //Generate days of the week:
    $dayinrun = date("l");
    if ($dayinrun == date("l", $now) && $month == date("F", $now) && $year == date("Y", $now)) {
        echo "<li><span class='active'>$dayinrun</span></li>";
    } else {
        echo "<li>$dayinrun</li>";
    }
}
echo '</ul>';
$nbdayslastmonth = $jour_commencement;
echo '<ul class="days">';

if ($jour_commencement != 0) {
    while ($jour_commencement != 0) {
        $daylastmonth = $lastdaypossiblelastmonth - $jour_commencement + 1;
        $jour_commencement -= 1;
        echo "<li class='lastmonth'>$daylastmonth</li>";
    }
}

for ($i = 1; $i <= $lastdaypossiblethismonth; $i++) {
    if ($i == date("j", $now) && $month == date("F", $now) && $year == date("Y", $now)) {
        echo "<li class='thismonth'><span class='active'>$i</span></li>";
    } else {
        echo "<li class='thismonth'>$i</li>";
    }
}
echo '</ul>';
?>

</body>
</html>