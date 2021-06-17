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
		<div class="title">
			<h1>Contactez-nous</h1>
		</div>
		<form id="contact">

			<input type="text" name="name" placeholder="Nom" id="name">
			<input type="email" name="email" placeholder="Email" id="email">
			<input type="text" name="message" placeholder="Message" id="message">

			<label>
				<input id="button "type="image" name="submit" height="90" width="90">
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="193 131 100 100"><defs><style>.a{fill:#fff;}.b{fill:none;}</style></defs><circle cx="50" cy="50" r="50" transform="translate(193 131)"/><g transform="translate(213 151)"><path class="a" d="M2.025,48,54.5,25.5,2.025,3,2,20.5l37.5,5L2,30.5Z" transform="translate(3 4.5)"/><path class="b" d="M0,0H60V60H0Z"/></g></svg>
			</label>

		</form>
	</section>


</body>
</html>