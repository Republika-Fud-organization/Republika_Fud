<!DOCTYPE html>
	<html lang="sr" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav/burger1.png">
		<!-- Author Meta -->
		<meta name="author" content="Lenka Živković">
		<!-- Meta Description -->
		<meta name="description" content="Saznajte više o restoranu Republika Fud i uverite se sami zašto treba da nas posetite već danas!">
		<!-- Meta Keyword -->
		<meta name="keywords" content="restoran, burgeri, kobasice, hrana, dostava, donesi.com, Pančevo">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title> Saznajte više o našem restoranu | Republika Fud</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/magnific-popup.css">
			<link rel="stylesheet" href="css/jquery-ui.css">				
			<link rel="stylesheet" href="css/nice-select.css">							
			<link rel="stylesheet" href="css/animate.min.css">
			<link rel="stylesheet" href="css/owl.carousel.css">				
			<link rel="stylesheet" href="css/main.css">
		</head>
		<body>	
		<?php
			include "views/fixed/header.php";
		?>	
		<!-- #header -->
			
			<!-- start banner Area -->
			<section class="about-banner relative">
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								O nama				
							</h1>	
							<p class="text-white link-nav"><a title='Početna stranica' href="index.php">Početna </a>  <span class="lnr lnr-arrow-right"></span>  <a title='O nama' href="about.php"> O nama</a></p>
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->	

			<!-- Start home-about Area -->
			<section class="home-about-area section-gap">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-6 home-about-left">
							<h1>Naša priča</h1>
							<p>
							U pripremi koristimo samo najkvalitetnije sastojke. Meso nabavljamo isključivo sa domaćih, proverenih
farmi – od domaćina koji znaju koliko su nam važni zdravlje i kvalitet hrane za naše goste. Bilo da su u
pitanju kobasice ili burgeri u kombinaciji sa sosevima, probajte hranu koja je pažljivo pripremana i koja je
poslužena na takav način da osetite najbolje od svakog ukusa.
</br> </br>
								Ako niste u mogućnosti da nas posetite uživo vršimo i uslugu dostave hrane na vašu kućnu adresu.
							</p>
							<a title='Online poručivanje' href="menu.php" class="primary-btn">Naš meni</a>
						</div>
						<div class="col-lg-6 home-about-right">
							<img class="img-fluid" src="img/about/DRM_4516.jpg" alt="Slika piva i hrane iz restorana">
						</div>
					</div>
				</div>	
			</section>
			<!-- End home-about Area -->	

			<!-- Start services Area -->
			<section class="services-area pb-120">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">Šta vas očekuje u našem restoranu</h1>
								<!-- <p>Who are in extremely love with eco friendly system.</p> -->
							</div>
						</div>
					</div>						
					<div class="row">
						<div class="col-lg-4">
							<div class="single-service">
								<div class="thumb">
									<img src="img/about/DRM_4491.jpg" alt="Sočni burgeri">
								</div>
								<a title='Online poručivanje' href="menu.php">
									<h4>Sočni burgeri</h4>
								</a>
								<p>
									Tajna naših burgera počinje od recepture koja vam garantuje 100% čistog junećeg mesa i različit izbor priloga.</br> 
									
								</p>								
							</div>
						</div>
						<div class="col-lg-4">
							<div class="single-service">
								<div class="thumb">
									<img src="img/about/DRM_4436.jpg" alt="Domaće kobasice">
								</div>
								<a title='Online poručivanje' href="menu.php">
									<h4>Domaće kobasice</h4>
								</a>	
								<p>
									Kobasice pripremljene u domaćoj proizvodnji od najkvalitetnijeg, 100% svinjskog mesa.
								</p>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="single-service">
								<div class="thumb">
									<img src="img/about/DRM_4541.jpg" alt="Pivo ">
								</div>
								<a title="Pivara Publika" href="#">
									<h4>Kraft piva iz paba <i> Publika </i></h4> 
								</a>	
								<p>
									U saradnji sa pabom <i> Publika </i> uz odličan izbor hrane možete uživati i u velikom izboru kraft piva.
								</p>
							</div>
						</div>												
					</div>
				</div>	
			</section>
			<!-- End services Area -->

			<!-- Start review Area -->
			<?php 
				include "views/fixed/review.php";
			?>
			<!-- End review Area -->				

			<!-- start footer Area -->		
			<?php
				include "views/fixed/footer.php";
			?>