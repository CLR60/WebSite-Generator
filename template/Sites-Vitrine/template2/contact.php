<!DOCTYPE html>
<html>
<head>
	<?php // $up = ''; ?>
	<?php // $title = 'portfolio v1.4'; ?>
	<?php include('components/head.php'); ?>
	<link rel="stylesheet" type="text/css" href="assets/css/contactStyle.css">
</head>
<body>

	<?php
	require("components/navbar.php");
	?>
	<section id="moduleContact">
		<form>
			<h1>Contactez-nous</h1>
			<div class="separation"></div>
			<div class="corps-formulaire">
				<div class="gauche">
					<div class="groupe">
						<label>Votre Prénom</label>
						<input type="text" autocomplete="off" />
						<i class="fas fa-user"></i>
					</div>
					<div class="groupe">
						<label>Votre adresse e-mail</label>
						<input type="text" autocomplete="off" />
						<i class="fas fa-envelope"></i>
					</div>
					<div class="groupe">
						<label>Votre téléphone</label>
						<input type="text" autocomplete="off" />
						<i class="fas fa-mobile"></i>
					</div>
				</div>

				<div class="droite">
					<div class="groupe">
						<label>Message</label>
						<textarea placeholder="Saisissez ici..."></textarea>
					</div>
				</div>
			</div>

			<div class="pied-formulaire" align="center">
				<button>Envoyer le message</button>
			</div>
		</form>
	</section>


</body>
</html>