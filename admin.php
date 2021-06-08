<!DOCTYPE html>
<html>
	<head>
		<?php // $up = ''; ?>
		<?php // $title = 'portfolio v1.4'; ?>
		<?php include('components/head.php'); ?> 
		<link rel="stylesheet" type="text/css" href="assets/css/adminStyle.css">
	</head>
	<body>
	
		<?php
		require("components/navbar.php");
		?>

		<div class="loginbox">
			<h1>Se connecter</h1>
			<form action="" method="post">
				<p>Nom d'utilisateur</p>
				<input type="text" name="pseudo" placeholder="Entrez votre nom d'utilisateur">
				<p>mot de passe</p>
				<input type="password" name="password" placeholder="Entrez votre mot de passe">
				<input type="submit" name="submit" value="valider">
				</p>
			</form>
		</div>
	</body>
</html>