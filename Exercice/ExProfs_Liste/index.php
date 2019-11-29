<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>SI-CMI2a</h1>
<ul>
<?php
/**
 *Auteur:   Mounir Fiaux
 *Titre:    index.php
 *Date:     28.11.2019
 *Version:
 */
$i = 0;
$tab = array("Fabien", "David", "Miguel", "Benoit", "Johnny", "Kevin", "Christopher", "Dmitri", "etc...");
echo "<ul>";
for ($i = 0; $i < 8; $i++){
	echo "<li id=div$i>$tab[$i]</li>";
}
echo "</ul>";

?>
</ul>
</body>
</html>