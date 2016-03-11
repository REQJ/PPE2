<?php
//Si la variable $_GET["action"] existe
if(isset($_GET["action"]))
{
	//Récupartion de l'action passée dans l'url
	$action=$_GET["action"];

	$connection = new NewsPdo();

	switch ($action) {
		case 'create':
			include("page/news/Create.php");
			break;
		case 'store':
			$uneNews=new News();
			$uneNews->titre=$_POST["titre"];
			$uneNews->description=$_POST["description"];
			echo $uneNews->afficher();
			$connection->create($uneNews);
			break;
		case 'getall':
			$lesNews=$connection->getAll();
			include("page/news/GetAll.php");
			break;
		case 'login':
			$unUser=new User();
			$unUser->login="seb";
			$unUser->password="seb";
			$_SESSION["user"]=$unUser;
			 header('Location: index.php');  
			break;					
		default:
			include("page/Accueil.php");
			break;
	}
	
}
//si pas d'action dans l'url
else
{
	include("page/Accueil.php");
}