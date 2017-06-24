<?php 
	$title = "Portfolio";
	include('includes/contant.php');
	require('partials/_header.php'); 
?>

	<header id="gtco-header" class="gtco-cover gtco-cover-sm" role="banner" style="background-image: url(images/service.jpg)">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-left">
					

					<div class="row row-mt-15em">

						<div class="col-md-7 mt-text animate-box" data-animate-effect="fadeInUp">
							<!-- <span class="intro-text-small">See Our</span> -->
							<h1>Projets Réalisés</h1>	
						</div>
						
					</div>
							
					
				</div>
			</div>
		</div>
	</header>

	<div class="gtco-section border-bottom">
		<div class="gtco-container">
			<div class="row">
				<div class="col-lg-4 col-md-4 col-sm-6">
					<a href="http://gandhiconsulting.com" target="_blank" class="fh5co-project-item">
						<figure>
							<div class="overlay"><i class="ti-link"></i></div>
							<img src="images/gandhiconsulting.png" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2>Gandhi Consulting</h2>
						</div>
					</a>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6">
					<a href="http://amadoumt.ml" class="fh5co-project-item">
						<figure>
							<div class="overlay"><i class="ti-link"></i></div>
							<img src="images/amadoumt.png" target="_blank" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2>Amadou MT KEITA</h2>
						</div>
					</a>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6">
					<a href="http://apjec.ml" class="fh5co-project-item">
						<figure>
							<div class="overlay"><i class="ti-link"></i></div>
							<img src="images/apjec.png" target="_blank" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2>APJEC</h2>
						</div>
					</a>
				</div>

			</div>
		</div>
	</div>

	<?php
		// include('partials/_newsletter.php');
		include('partials/_footer.php');
	 ?>