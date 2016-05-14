<?php
//Si la variable $_GET["action"] existe
if(isset($_GET["action"]))
{
	//Récupartion de l'action passée dans l'url
	$action=$_GET["action"];

	//$connection = new UserPdo();

	switch ($action) {
		case 'getAll':
			$lesPortfolios = UserPdo::getPorfolio();
			include(VUES."portfolio.php");
				break;
		
		default:
			
			include(VUES."home.php");
			break;
	}
	
}
//si pas d'action dans l'url
else
{
//	include("page/Accueil.php");
    
}
?>