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
			<div class="row">
				<div class="col-12 col-sm-6 col-md-3">
					<form>
						<div class="form-group">
							<label for="exampleInputEmail1">Adresse Mail</label>
							<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">Mot de passe</label>
							<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
						</div>
						<button type="submit" class="btn btn-primary">Se connecter</button>
					</form>
				</div>
			</div>
		</div>
	</section>

</body>
</html>