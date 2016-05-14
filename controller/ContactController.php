<?php
//Si la variable $_GET["action"] existe
if(isset($_GET["action"]))
{
	//Récupartion de l'action passée dans l'url
	$action=$_GET["action"];

	//$connection = new UserPdo();

	switch ($action) {
		default:
                    include(VUES."contact.php");
                    break;
	}
	
}
//si pas d'action dans l'url
else
{
	include(VUES."contact.php");
}
?>