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
			<h1>CONNEXION</h1>
			<form method="post">
				<div class="textField">
					<label for="nom">Username</label>
					<input type="text" name="nom" required="">
				</div>
				<div class="textField">
					<label for="password">password</label>
					<input type="password" name="password" required="">
				</div>
				<input type="submit" name="valiser" value="Se connecter">
			</form>
		</div>
	</section>

</body>
</html>