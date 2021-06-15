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

	<section id="moduleConnexion">
		<form>
			<h1>Se connecter</h1>
			<p class="choose-email">ou utiliser mon adresse e-mail :</p>

			<div class="inputs">
				<input type="email" placeholder="Email" />
				<input type="password" placeholder="Mot de passe">
			</div>
			<div align="center">
				<button type="submit">Se connecter</button>
			</div>
		</form>
	</section>

</body>
</html>