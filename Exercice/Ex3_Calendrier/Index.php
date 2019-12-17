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
 *Auteur:   Mounir Fiaux
 *Titre:    index.php
 *Date:     17.12.2019
 *Version:
 */
$month = 8;
$annee = 2019;
if (isset($_GET['month']) && isset($_GET['annee'])) {
	$month = $_GET['month'];
	$annee = $_GET['annee'];
}
$ajd = time();
$annee += 0;
$month += 0;
$mois_avant = $month - 1;
$mois_apres = $month + 1;
$annee_avant = $annee - 1;
$annee_apres = $annee + 1;


$jour_commencement = date("w", strtotime("$annee-$month-0"));
$jour_commencement += 0;
$dernier_jour_mois_avant = 31;
while (checkdate($mois_avant, $dernier_jour_mois_avant, $annee) != true) {
	$dernier_jour_mois_avant--;
}
$dernier_jour_mois = 31;
while (checkdate($month, $dernier_jour_mois, $annee) != true) {
	$dernier_jour_mois--;
}

if ($month == 1) {
	$mois_avant = 12;
	$mois_apres = 2;
} else if ($month == 12) {
	$mois_apres = 1;
	$mois_avant = 11;
} else {
	$mois_avant = $month - 1;
	$mois_apres = $month + 1;
}
$month = date("F");

echo '<div class="month"><ul>';
echo "<li>$month<br>$annee</li>";
echo "</div></ul>";
echo '<ul class="weekdays">';
for ($i = 1; $i <= 7; $i++) {
	$Jour = date("l");
	if ($Jour == date("l", $ajd) && $month == date("F", $ajd) && $annee == date("Y", $ajd)) {
		echo "<li><span class='active'>$Jour</span></li>";
	} else {
		echo "<li>$Jour</li>";
	}
}
echo '</ul>';
$jour_mois = $jour_commencement;
echo '<ul class="days">';

if ($jour_commencement != 0) {
	while ($jour_commencement != 0) {
		$jour_mois_avant = $dernier_jour_mois_avant - $jour_commencement + 1;
		$jour_commencement -= 1;
		echo "<li class='lastmonth'>$jour_mois_avant</li>";
	}
}

for ($i = 1; $i <= $dernier_jour_mois; $i++) {
	if ($i == date("j", $ajd) && $month == date("F", $ajd) && $annee == date("Y", $ajd)) {
		echo "<li class='thismonth'><span class='active'>$i</span></li>";
	} else {
		echo "<li class='thismonth'>$i</li>";
	}
}
echo '</ul>';
?>

</body>
</html>
