<!DOCTYPE HTML>
<!--
	Prologue by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Identification</title>
		<link rel="icon" type="image/png" href="http://www.icone-png.com/png/14/14205.png" />

		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />

		<link rel="stylesheet" href="../assets/css/main.css" />
	</head>
	
	<body id="blocLogin">
<?php
	require '../classe/User.php'; 	
	require '../pdo/MyPdo.php'; 
	require '../pdo/UserPdo.php';	
	session_start();
?>
		<div id="login">
			<div class="titreLogin"><h3>classe sio</h3></div>

			<label for="id">Identifiant : </label>
			<input required type="text" name="id" id="id" >

			<label for="id">Mot de passe : </label>
			<input required type="password" name="mdp" id="mdp" >

			<button type="button"><a href="../index.php">Connexion</a></button>
		</div>
	</body>
</html>