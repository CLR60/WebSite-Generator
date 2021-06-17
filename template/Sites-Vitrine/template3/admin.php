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
		<div class="container">
			<div class="row content">
				<div class="col-md-6 mb-3">
					<img src="assets/images/accueil.jpg" class="img-fluid" alt="image">
				</div>
				<div class="col-md-6-">
					<h3 class="signinText mb-3"> Se Connecter</h3>
					<form>
						<div class="formGroup">
							<label for="email">Email</label>
							<input type="email" name="email" class="form-control">
						</div>
						<div class="formGroup">
							<label for="password">Password</label>
							<input type="password" name="password" class="form-control">
						</div>
						<button class="btn btn-class">Se Connecter</button>
					</form>
				</div>
			</div>
		</div>
	</section>

</body>
</html>