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
			<input type="text" placeholder="Nom" required>
			<input type="text" placeholder="Adresse Mail" required>
			<input type="text" placeholder="Téléphone" required>
			<textarea placeholder="message" required></textarea>
			<input type="submit" value="Envoyer">
		</form>
	</section>


</body>
</html>