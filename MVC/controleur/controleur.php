<?php
/**
 *Auteur:   Mounir Fiaux
 *Titre:    controleur.php
 *Date:     20.12.2019
 *Version:
 */

function showConcerts()
{
require_once ('model/concerts.php');
	//logique
	unset($concerts[5]);
	unset($concerts[7]);
	unset($concerts[8]);
	require_once ('view/concerts.php');
}
function showMovies()
{
	require_once('model/movies.php');
	require_once ('view/movies.php');
}
?>