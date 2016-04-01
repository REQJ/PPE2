<!DOCTYPE html>
<html>
<head>
		<title>SIO 1 TP - Officiel</title>
		<link rel="icon" type="image/png" href="images/logo.ico" />
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="public/assets/css/main.css" />
		<link rel="stylesheet" href="public/assets/js/js-menu.js" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
</head>

<body>

<div id="header">

				<div class="top">
				<!--<div >
		<?php
		if (isset($_SESSION['user']))
		{	echo "Vous êtes connecté en tant que :".$_SESSION['user']->login;
			?>
			<a href="index.php?action=news&action=create">Create News </a>
			<a href="index.php?action=news&action=getall">Voir les News </a>
			<a href="index.php?action=user&action=logout">Déconnexion </a>
			<?php
		}
		else
		{
			echo '<a href="index.php?action=user&action=login">Se Connecter </a>';
			echo '<a href="index.php?action=user&action=create">S\'enregister </a>';
		}
		?>
	</div>-->

					<!-- Logo -->
						<div id="logo">
							<span class="image avatar48"><img src="public/images/hisoka_profil.jpg" alt="" /></span>
							<h1 id="title">JosiMoche</h1>
						</div>

					<!-- Nav -->
						<nav id="nav">
							<ul>
								<li><a href="index.php?action=home" id="Accueil-link" class="skel-layers-ignoreHref"><span class="icon fa-home">Forum</span></a></li>
								<li><a href="index.php?action=epreuves" id="Description_des_Epreuves-link" class="skel-layers-ignoreHref"><span class="icon fa-binoculars">Description des épreuves</span></a></li>
								<li><a href="index.php?action=emploi_du_temps" id="emploi_du_temps-link" class="skel-layers-ignoreHref"><span class="icon fa-th">Emploi du Temps</span></a></li>
								<li><a href="index.php?action=portfolio" id="Portfolio-link" class="skel-layers-ignoreHref"><span class="icon fa-briefcase">Portfolio</span></a></li>
								<li><a href="index.php?action=lien_utiles" id="liens_utiles-link" class="skel-layers-ignoreHref"><span class="icon fa-at">Liens utiles</span></a></li>
								<li><a href="index.php?action=contact" id="contact-link" class="skel-layers-ignoreHref"><span class="icon fa-envelope">Contact</span></a></li>
								<li><a href="index.php?action=admin" id="panneau_admin-link" class="skel-layers-ignoreHref"><span class="icon fa-bars">Panneau d'administration</span></a></li>
							</ul>
						</nav>

				</div>
				<div class="bottom">
				</div>
			</div>
		<!-- Main -->
			
