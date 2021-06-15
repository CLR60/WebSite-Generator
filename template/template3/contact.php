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
		<h1 class="title">Contactez-nous</h1>
		<div class="container">
			<div class="contactForm row">
				<div class="formField col-lg-6">
					<input id="nom" class="inputText" type="text" name="">
					<label for="nom" class="label">nom</label>
				</div>
				<div class="formField col-lg-6">
					<input id="prenom" class="inputText" type="text" name="">
					<label for="prenom" class="label">prenom</label>
				</div>
				<div class="formField col-lg-6">
					<input id="email" class="inputText" type="email" name="">
					<label for="email" class="label">email</label>
				</div>
				<div class="formField col-lg-6">
					<input id="telephone" class="inputText" type="text" name="">
					<label for="telephone" class="label">téléphone</label>
				</div>
				<div class="formField col-lg-12">
					<input id="message" class="inputText" type="text" name="">
					<label for="message" class="label">message</label>
				</div>
				<div class="formField col-lg-12">
					<input class="submit-btn" type="submit" value="submit" name="">
				</div>
			</div>
		</div>
	</section>


</body>
</html>