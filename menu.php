<!-- Start Head -->
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
	<meta name="description" content="Pogledajte meni restorana Republika Fud i online preko našeg sajta naručite dostavu na kućnu adresu.">
	<!-- Meta Keyword -->
	<meta name="keywords" content="restoran, burgeri, kobasice, hrana, dostava, donesi.com, Pančevo">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title> Dostava naše hrane na vašu kućnu adresu | Republika Fud </title>

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
<!-- End Head -->

<body>
	<?php
	include "views/fixed/header.php";
	?>
	<!-- start banner Area -->
	<section class="about-banner relative">
		<div class="overlay overlay-bg"></div>
		<div class="container">
			<div class="row d-flex align-items-center justify-content-center">
				<div class="about-content col-lg-12">
					<h1 class="text-white">
						Online naručivanje
					</h1>
					<p class="text-white link-nav"><a title='Početna stranica' href="index.php">Početna </a> <span class="lnr lnr-arrow-right"></span> <a title='Online naručivanje' href="menu.php"> Online naručivanje</a></p>
				</div>
			</div>
		</div>
	</section>
	<!-- End banner Area -->

	<!-- Start menu-area Area -->
	<section class="menu-area section-gap" id="menu">
		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="menu-content  col-lg-8">
					<div class="title text-center">
						<h1 class="mb-10"> Šta vam se danas jede?</h1>
						<p> Za šta god se odlučite nećete se pokajati! </p>
					</div>
				</div>
			</div>

			

			<div class="filters-content" id='meni'>
			<div id="donesi-embed"><small><a href="https://www.donesi.com/beograd/republikafud-dostava-2285.php" target="_blank">Powered by Donesi.com</a></small></div>
				<div class="row grid" id='meniContainer'>
					<div id='smallContainer'>
						
						
					</div>
				</div>
			</div>

		</div>
	</section>
	<!-- End menu-area Area -->

	<!-- Start reservation Area -->
	<?php
	include "views/fixed/reservation.php";
	?>
	<!-- End reservation Area -->

	<!-- start footer Area -->
	<?php
	include "views/fixed/footer.php";
	?>
	<!-- End footer Area -->
	