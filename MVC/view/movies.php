<?php
/**
 *Auteur:   Mounir Fiaux
 *Titre:    movies.php
 *Date:     19.12.2019
 *Version:
 */
$title = 'Movies';
ob_start();
?>
    <h1 class="offset-md-3 ">Liste des films</h1>
    <table class="table table-bordered offset-md-3 col-sm-6 col-lg-6 offset-md-3">
        <thead>
        <tr>
            <th>Titre</th>
            <th>Audio</th>
            <th>Temps</th>
        </tr>
        </thead>
        <tbody>

		<?php
		foreach ($movies as $movie) {
			echo "<tr><td>" . $movie['title'] . "</td><td>" . $movie['audio'] . "</td><td>" . $movie['showtime'] . "</td></tr>";
		}
		?>
        </tbody>
    </table>
    <br>
<?php
$content = ob_get_clean();
require_once ('gabarit.php');
?>