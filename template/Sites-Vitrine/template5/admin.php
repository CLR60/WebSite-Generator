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
		<div class="center">
			<div class="header">CONNEXION</div>
			<form>
				<input type="text" placeholder="Username">
				<input type="password" placeholder="password">
				<input type="submit" value="Se Connecter">
			</form>
		</div>
	</section>

</body>
</html>