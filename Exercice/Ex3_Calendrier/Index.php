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
$weeks = array("Lu", "Ma", "Me", "Je", "Ve", "Sa", "Di");
?>
<div class="month">
    <ul>
		<?php
		    echo "<li>" . $month[$monthQS - 1] . "<br>$yearQS</li>";
		?>
    </ul>
</div>
<ul class="days">
	<?php
        for ($i = 0; $i < 7; $i++){
            echo "<li>$weeks[$i]</li>";
        }
	?>
</ul>
<ul>
    <?php
    for ($i = 1;;){

    }
    ?>
</ul>
</body>
</html>