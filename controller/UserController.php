<?php
//Si la variable $_GET["action"] existe
if(isset($_GET["action"]))
{
	//Récupartion de l'action passée dans l'url
	$action=$_GET["action"];

	//$connection = new UserPdo();

	switch ($action) {
		
		case 'create':
			$unLogin=$_POST["id"];
                        $unPassword=$_POST["mdp"];
                       UserPdo::create($unLogin, $unPassword);//// -> create uniquement sur site admin (et modifier car il faut importer fichier csv)
                       break;	
		
		case 'login':
			$unLogin=$_POST["id"];
                        $unPassword=$_POST["mdp"];
                       $res = UserPdo::connexion($unLogin, $unPassword);
			if($res == False)
			 {
                            $message = "Identifiant ou mot de passe incorrect";
                       //  include(VUES."success.php");
                        // header( "refresh:2;url=index.php" );
                            
                         }
                         else
                        {
			 //$_SESSION["user"]=$res["login_utilisateur"];
                          $_SESSION["user"]=$unLogin;
                       /*  $message = "Identification réussi";
                        $type=$res["id_type"];
                        
                                              
                        */
                         
                       // header('Location: index.php');//----> BUG
                          ?>
<script language="javascript">
document.location.href="index.php"    
</script>
                          <?php
                         include(VUES."success.php");
			}
                     //var_dump($res);
//                        echo("type utilisateur======");
//                        var_dump($type);
			
			break;					
		case 'logout':
			session_destroy();
			 header('Location: index.php'); 
			break;
		default:
			$lesNouvelles = NouvellePdo::getAll();
			include(VUES."home.php");
			
			break;
	}
	
}
//si pas d'action dans l'url
else
{
	$lesNouvelles = NouvellePdo::getAll();
			include(VUES."home.php");
}
?>