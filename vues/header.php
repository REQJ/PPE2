<!DOCTYPE html>
<html>
<head>
		<title>SIO 1 TP - Officiel</title>
		<link rel="icon" type="image/png" href="images/logo.ico" />
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		
              <!-------------------->
              <!--[if lte IE 8]><script src="public/assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="public/assets/css/main.css" />
		<link rel="stylesheet" href="public/assets/js/js-menu.js" />
		<!--[if lte IE 8]><link rel="stylesheet" href="public/assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="public/assets/css/ie9.css" /><![endif]-->
              <!-------------------->
                <!-- script pour aggrandir une image-->
                <link rel="stylesheet" href="public/assets/fancybox/source/jquery.fancybox.css" type="text/css" media="screen" />
                
                
		
                <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
             <!--   <title>Afficher la date et l'heure en temps rÃ©el en javascript</title>
        <script type="text/javascript" src="public/assets/date_heure.js"></script> -->
       
        
</head>

<body>

<div id="header">
    

				<div class="top">
				<div >
                                <div id="logo">
		<?php
		if (isset($_SESSION['user']))
		{	
			?>
			<!-- Logo -->
                                        
                                        
                        <a href="index.php?routeur=user&action=account">
							<span class="image avatar48" ><img src="public/images/hisoka_profil.jpg" alt="" /></span>
                                                        <h1 id="user"><?php echo $_SESSION["user"] ?></h1>
                        </a>
                                                        <a href="index.php?routeur=user&action=logout"><p>Deconnexion</p></a>
						
                        
                       
                     <?php 
                            
                        
		}
		else
		{ ?>
			
							<form action="index.php?routeur=user&action=login" method="POST" id="formCreate">
                                                            
                                                                    <label for="id">ID</label>
                                                                     <input type="text" class="form-control" id="id" name="id" placeholder="Identifiant" data-validation="required"  data-validation-error-msg="L'id est obligatoire !">
                                                           
                                                             
                                                              <label for="mdp">MDP</label>
                                                                  <input type="password" id="mdp" name="mdp" placeholder="Mot de passe" class="form-control" rows="3" data-validation="required" data-validation-error-msg="le mdp est obligatoire !"></textarea>
                                                                  
                                                                     
                                                            <button type="submit" class="btn btn-default">Login</button>
                                                            </form>
							
						
		<?php 
                                
                }
		?>
                                                        </div>
	</div>

					

					<!-- Nav -->
						<nav id="nav">
							<ul>
								<li><a href="index.php?routeur=home" id="Accueil-link" class="skel-layers-ignoreHref"><span class="icon fa-home">Accueil</span></a></li>
								<li><a href="index.php?routeur=forum" id="Forum-link" class="skel-layers-ignoreHref"><span class="icon fa-comments-o">Forum</span></a></li>
                                                                <li><a href="index.php?routeur=epreuves" id="Description_des_Epreuves-link" class="skel-layers-ignoreHref"><span class="icon fa-binoculars">Description des épreuves</span></a></li>
								<li><a href="index.php?routeur=emploi_du_temps" id="emploi_du_temps-link" class="skel-layers-ignoreHref"><span class="icon fa-th">Emploi du Temps</span></a></li>
								<li><a href="index.php?routeur=portfolio" id="Portfolio-link" class="skel-layers-ignoreHref"><span class="icon fa-briefcase">Portfolio</span></a></li>
								<li><a href="index.php?routeur=lien_utiles" id="liens_utiles-link" class="skel-layers-ignoreHref"><span class="icon fa-at">Liens utiles</span></a></li>
								<li><a href="index.php?routeur=contact" id="contact-link" class="skel-layers-ignoreHref"><span class="icon fa-envelope">Contact</span></a></li>
                                                                <li><a href="index.php?routeur=admin" id="panneau_admin-link" class="skel-layers-ignoreHref"><span class="icon fa-bars">Panneau d'administration</span></a></li>
                                                        
                                                        </ul>
						</nav>

				</div>
				<div class="bottom">
				</div>
			</div>
		<!-- Main -->
			
