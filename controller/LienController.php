<?php
//Si la variable $_GET["action"] existe
if(isset($_GET["action"]))
{
	//Récupartion de l'action passée dans l'url
	$action=$_GET["action"];

	//$connection = new UserPdo();

	switch ($action) {
            case 'getAll':
			$lesLiens = LienPdo::getAll();
			include(VUES."lien.php");
				break;
		default:
                  $lesLiens = LienPdo::getAll();
			include(VUES."lien.php");
				break;
	}
	
}
//si pas d'action dans l'url
else
{
	$lesLiens = LienPdo::getAll();
			include(VUES."lien.php");
				
}
?>