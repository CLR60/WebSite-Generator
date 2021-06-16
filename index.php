<!DOCTYPE html>
<html>
<head>
	<title>WebSite Generator</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="css/indexStyle.css">
	

</head>
<body>
	<?php
		require('include/navbar.php');
	?>

	<section id="etapes">
		<div class="bloc">
			<h2 class="titreEtape">Une Création simple en 3 étapes</h2>
        		<div class="texte">
	            	
	            	<div class="column">
	                	<h2>1- Choisir</h2>
	                	<p>Choisisser un template qui correspond au type de site que vous souhaiter</p>
	            	</div>
	            	<div class="column">
	                	<h2>2- Personnaliser</h2>
	                	<p>Personnaliser ensuite le template grâce aux multiple modules disponibles</p>
	            	</div>
	            	<div class="column">
	                	<h2>3- Payer</h2>
	                	<p>Proceder au paiment pour finaliser la création de votre site</p>
	            	</div>
        		</div>
    	</div>
	</section>
	



















	<section id="templates">
		<div class="container carouTemplate">
	  		<h2 class="choix">trouvez un titre  </h2>

		
		
		
			<div class="container bg-dark">
				<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
	  				<div class="carousel-indicators">
					    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
					    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
					    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
					    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
					    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
	  				</div>
	  <!-- bloc a copier  -->
					<div class="carousel-inner">
					    <div class="carousel-item active">
					      <img src="images/img1.jpg" class="d-block w-90" alt="...">
					      <div class="carousel-caption d-none d-md-block">
					        <h5>Site Vitrine</h5>
					        <p>Template pour votre site vitrine</p>
					        <a href="">Prévisualiser</a>
					      </div>
					    </div>
					    <!-- fin de bloc a copier -->
					    <div class="carousel-item">
					      <img src="images/img1.jpg" class="d-block w-90" alt="...">
					      <div class="carousel-caption d-none d-md-block">
					        <h5>Site E-commerce</h5>
					        <p>Template pour votre site de e-commerce</p>
					        <a href="">Prévisualiser</a>
					      </div>
					    </div>
					    <div class="carousel-item">
					      <img src="images/img1.jpg" class="d-block w-90" alt="...">
					      <div class="carousel-caption d-none d-md-block">
					        <h5>Blog</h5>
					        <p>Template pour votre Blog</p>
					        <a href="">Prévisualiser</a>
					      </div>
					    </div>
					    <div class="carousel-item">
					      <img src="images/img1.jpg" class="d-block w-90" alt="...">
					      <div class="carousel-caption d-none d-md-block">
					        <h5>Site Wiki</h5>
					        <p>Template pour votre Wiki.</p>
					        <a href="">Prévisualiser</a>
					      </div>
					    </div>
					    <div class="carousel-item">
					      <img src="images/img1.jpg" class="d-block w-90" alt="...">
					      <div class="carousel-caption d-none d-md-block">
					        <h5>Third slide label</h5>
					        <p>Some representative placeholder content for the third slide.</p>
					        <a href="">Prévisualiser</a>
					      </div>
					    </div>
					</div>
				  <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
				    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
				    <span class="visually-hidden">Previous</span>
				  </button> -->
		  			<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
		    			<span class="carousel-control-next-icon" aria-hidden="true"></span>
		    			<span class="visually-hidden">Next</span>
		  			</button>
				</div>
			</div>
		</div>
	</section>





	<?php 
		require('include/footer.php');
	?>
</body>
</html>