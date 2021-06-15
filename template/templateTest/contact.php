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
		<div class="container">
			<form id="contact-form" method="post">
					<div class="row">
						<div class="col-md-6">
							<label for="prenom">Prénom*</label>
							<input type="text" id="prenom" name="prenom" required="" class="form-control" placeholder="Votre prénom" value="">
						</div>
						<div class="col-md-6">
							<label for="nom">Nom*</label>
							<input type="text" id="nom" name="nom" required="" class="form-control" placeholder="Votre nom" value="">
						</div>
						<div class="col-md-12">
							<label for="email">Email*</label>
							<input type="text" id="email" name="email" required="" class="form-control" placeholder="Votre Email" value="">
						</div>
						<div class="col-md-12">
							<label for="message">Message*</label>
							<textarea id="message" name="message" required="" class="form-control" placeholder="message"></textarea>
						</div>
						<div class="col-md-12">
							<input type="submit" name="submit" class="button" value="envoyer">
						</div>
					</div>
				</form>
		</div>
	</section>
		

	</body>
</html>