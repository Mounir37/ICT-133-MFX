<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="Css/Style.css" rel="stylesheet"/>
    <title>Title</title>
</head>
<body>
<h1>Puissance 4</h1>
<table>
	<?php
	/**
	 *Auteur:   Mounir Fiaux
	 *Titre:    index.php
	 *Date:     29.11.2019
	 *Version:
	 */

	for ($ligne = 0; $ligne < 8; $ligne++) { //dessine les lignes de la tables
		echo "<tr>";
		for ($colonne = 0; $colonne < 8; $colonne++) {
		    if ($ligne == 7 && $colonne == 6){
		        echo "<td><img src='Image/bleu.JPG'> </td> ";
            }elseif ($ligne == 7 && $colonne == 0){
				echo "<td><img src='Image/rouge.JPG'> </td> ";
            }else
			echo "<td></td>";
		}
		echo "</tr>";
	}
	?>
</table>
</body>
</html>
