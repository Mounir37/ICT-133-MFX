<?php
/**
 *Auteur:   Mounir Fiaux
 *Titre:    concerts.php
 *Date:     19.12.2019
 *Version:
 */
$title = 'Concerts';
ob_start();
?>
<h1>Liste des concerts</h1>
<ul>
	<?php
		foreach ($concerts as $concert) {
			echo "<li>" . $concert['band']."</li>";
		}
	?>
</ul>
<?php

$content = ob_get_clean();
require_once 'gabarit.php';
?>