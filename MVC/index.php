<?php
require_once ('controleur/controleur.php');
if (isset($_GET['action'])){
	$action = $_GET['action'];
}
else{
	$action = 'home';
}

switch ($action){
	case 'movies';
		showMovies();
		break;
	case 'concerts';
		showConcerts();
		break;
	default:
		$title='home';
		require_once 'view/home.php';
		break;
}
require_once 'gabarit.php';
?>
