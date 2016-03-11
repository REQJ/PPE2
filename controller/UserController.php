<?php
//Si la variable $_GET["action"] existe
if(isset($_GET["action"]))
{
	//Récupartion de l'action passée dans l'url
	$action=$_GET["action"];

	$connection = new UserPdo();

	switch ($action) {
		case 'create':
			include("page/user/Create.php");
			break;
		case 'store':
			$unUser=new News();
			$unUser->login=$_POST["login"];
			$unUser->password=md5($_POST["password"]);
			$connection->create($unUser);
			break;
		case 'login':
			include("page/user/Login.php");
			break;
		case 'checkLogin':
			$unUser=new User();
			$unUser->login=$_POST["login"];
			$unUser->password=md5($_POST["password"]);
			$res=$connection->check($unUser);
			var_dump($res);
			if($res==1)
			{
				$_SESSION["user"]=$unUser;
			    header('Location: index.php');  
			}
			else
			{
			    header('Location: index.php?routeur=user&action=login');  
			}
			
			break;					
		case 'logout':
			session_destroy();
			header('Location: index.php');  
			break;
		default:
			include("page/user/Login.php");
			break;
	}
	
}
//si pas d'action dans l'url
else
{
	include("page/Accueil.php");
}