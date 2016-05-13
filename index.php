	<?php 
	include 'config.php';
	
	//require 'classe/News.php';
	//require 'classe/User.php';
	require 'pdo/MyPdo.php';
	//require 'pdo/NewsPdo.php';
	require 'pdo/UserPdo.php';
        require 'pdo/EmploiPdo.php';
        require 'pdo/EpreuvePdo.php';
        require 'pdo/AnnoncePdo.php';
        require 'pdo/CommentairePdo.php';
        require 'pdo/ImagePdo.php';
        require 'pdo/LienPdo.php';
        require 'pdo/NouvellePdo.php';
        require 'pdo/PhotoPdo.php';
	session_start();
	
	include(VUES."header.php");
	?>
	
	<div id="main">
			
		<?php
		//Si la variable $_GET["action"] existe
		if(isset($_GET["action"]))
		{
			//Récupartion du action passée dans l'url
			$action=$_GET["action"];

			//$connection = new NewsPdo(); // ----> 	a remetre plus tard !

			switch ($action) {
				case 'news':
					include(CONTROLLER."NewsController.php");
					break;
				case 'user':
					include(CONTROLLER."UserController.php");
					break;
				case 'home':
					include(VUES."home.php");
					break;
				case 'epreuves':
                                        $lesEpreuves = EpreuvePdo::getAll();
					include(VUES."epreuve.php");
					break;
				case 'emploi_du_temps':
					include(VUES."emploi_temps.php");
					break;
				case 'portfolio':
					include(VUES."portfolio.php");
					break;
				case 'lien_utiles':
					include(VUES."lien.php");
					break;
				case 'contact':
					include(VUES."contact.php");
					break;
				case 'admin':
					include(VUES."admin.php");
					break;
				default:
					include(VUES."home.php");
					break;
			}
			
		}
		//si pas de action dans l'url
		else
		{
			include(VUES."home.php");
		}
		?>

	
	</div>
	

<?php
include(VUES."footer.php");
?>
