	<?php 
	include 'config.php';
	
        
	//require 'classe/News.php';
	//require 'classe/User.php';
	require 'pdo/MyPdo.php';
	//require 'pdo/NewsPdo.php';
	require 'pdo/UserPdo.php';
        require 'pdo/EmploiPdo.php';
        require 'pdo/AnnoncePdo.php';
        require 'pdo/CommentairePdo.php';
        require 'pdo/ImagePdo.php';
        require 'pdo/LienPdo.php';
        require 'pdo/NouvellePdo.php';
        require 'pdo/PhotoPdo.php';
        require 'pdo/EpreuvePdo.php';
	session_start();
	
	include(VUES."header.php");
	?>
	
	<div id="main">
			
		<?php
               
		//Si la variable $_GET["action"] existe
		if(isset($_GET["routeur"]))
		{
		//Récupartion du action passée dans l'url
		$routeur=$_GET["routeur"];

		//$connection = new NewsPdo(); // ----> 	a remetre plus tard !

			switch ($routeur) {
				
				case 'user':
					include(CONTROLLER."UserController.php");
					break;
				case 'home':
					include(CONTROLLER."NouvelleController.php");
					break;
				case 'epreuves':
					include(CONTROLLER."EpreuveController.php");
					break;
				case 'emploi_du_temps':
					include(CONTROLLER."EmploiController.php");
					break;
				case 'portfolio':
					include(CONTROLLER."PortfolioController.php");
					break;
				case 'lien_utiles':
					include(CONTROLLER."LienController.php");
					break;
				case 'contact':
					include(CONTROLLER."ContactController.php");
					break;
				case 'admin':
					include(VUES."admin.php");
					break;
                                case 'forum':
                                        include(CONTROLLER."AnnonceController.php");
                                        break;
				default:
					include(CONTROLLER."NouvelleController.php");
					break;
			}
			
		}
		//si pas de action dans l'url
		else
		{
			include(CONTROLLER."NouvelleController.php");
		}
		?>

	
	</div>
	

<?php
include(VUES."footer.php");
?>
