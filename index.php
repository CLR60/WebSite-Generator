<!DOCTYPE html>
<html>
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
	<link rel="stylesheet" type="text/css" href="css/indexStyle.css">
</head>
	<body>

		<?php
		require("navbar.php");
		?>

		<section id="moduleCarousel">
			<div class="container">
				<div class="descriptifCarousel">
					<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
							<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
							<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
						</ol>
						<div class="carousel-inner">
							<div class="carousel-item active">
								<img class="d-block w-100" src="images/accueil.jpg" alt="page d'accueil">
							</div>
							<div class="carousel-item">
								<img class="d-block w-100" src="images/accueil.jpg" alt="page des réalisations">
							</div>
							<div class="carousel-item">
								<img class="d-block w-100" src="images/accueil.jpg" alt="page de contact">
							</div>
						</div>
						<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						</a>
					</div>
				</div>
			</div>
		</section>

		<section id="moduleText">
			<div class="container boxText">
				<h1>Lorem Ipsum</h1>
				<pre>Neque porro quisqu
am est qui dolorem ipsum quia 
dolor sit amet, consecte
tur, adipisci velit...</pre>
			</div>
		</section>

		<section id="moduleImage">
			<div class="container">
				<img class="img-responsive imgSection3" src="images/accueil.jpg">
			</div>	
		</section>

		<section id="moduleSplit">
			<div class="container boxSplit">
				<div class="float-left w-50">
					<p> Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...</p>
				</div>
				<div class="float-right w-50">
					<p> Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...</p>
				</div>
				<div class="clearfix"></div>
			</div>
		</section>

		<!--Modal à propos -->
		<div class="modal" id="projet">
			<div class="modal-dialog modal-xl">
				<div class="container">
					<div class="modal-content">
						<!-- Modal Header -->
						<div class="modal-header">
							<h4 class="modalTitle"></h4>
							<button type="button" class="close" data-dismiss="modal"><i class="fas fa-times"></i></button>
						</div>

						<!-- Modal body -->
						<div class="container">
							<div class="modalBody">
								<div class="descriptif">
									<h4>Descriptif du projet</h4>
									<p class="paraModal"></p>
								</div>
							</div>
						</div>

						<!-- Modal footer -->
						<div class="modal-footer">
							<button type="button" class="btn btn-danger" data-dismiss="modal">Fermer le projet</button>
						</div>

					</div>
				</div>
			</div>
		</div>

		<?php
		require("footer.php");
		?>

	</body>
</html>