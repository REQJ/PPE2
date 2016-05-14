<?php
//Si la variable $_GET["action"] existe
if(isset($_GET["action"]))
{
	//Récupartion de l'action passée dans l'url
	$action=$_GET["action"];

	//$connection = new UserPdo();

	switch ($action) {
		case 'getAll':
			$lesEpreuves = EpreuvePdo::getAll();
			include(VUES."epreuve.php");
				break;
		
		default:
			$lesEpreuves = EpreuvePdo::getAll();
			include(VUES."epreuve.php");
			break;
	}
	
}
//si pas d'action dans l'url
else
{$lesEpreuves = EpreuvePdo::getAll();
//	include("page/Accueil.php");
    include(VUES."epreuve.php");
}
?>