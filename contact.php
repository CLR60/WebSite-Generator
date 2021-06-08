<head>
	<meta charset="utf-8">
	<title>Lorem Ipsum</title>
	<!-- CDN bootstrap -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
	<!-- lien vers le css -->
	<link rel="stylesheet" type="text/css" href="css/contactStyle.css">
</head>
	<body>

	<?php
	require("navbar.php");
	?>
	
	<section id="moduleContact">
		<div class="container">
			<form id="contact-form" method="post" action="">
					<div class="row">
						<div class="col-md-6">
							<label for="prenom">Prénom*</label>
							<input type="text" id="prenom" name="prenom" required="" class="form-control" placeholder="Votre prénom" value="">
						</div>
						<div class="col-md-6">
							<label for="nom">Nom*</label>
							<input type="text" id="nom" name="nom" required="" class="form-control" placeholder="Votre nom" value="">
						</div>
						<div class="col-md-6">
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