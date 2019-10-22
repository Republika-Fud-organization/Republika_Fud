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
	<meta name="description" content="Restoran Republika Fud vam nudi najbolje burgere i kobasice po najpristupačnijim cenama u Pančevu. Dođite i uverite se sami!">
	<!-- Meta Keyword -->
	<meta name="keywords" content="restoran, burgeri, kobasice, hrana, dostava, donesi.com, Pančevo">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>Burger restoran - Pančevo | Republika Fud</title>

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

	<!-- start banner Area -->
	<?php
	include "views/fixed/banner.php";
	?>
	<!-- End banner Area -->

	<!-- Start home-about Area -->
	<section class="home-about-area section-gap">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6 home-about-left">
					<h1>Naša priča</h1>
					<p>
						Kada smo osnovali Republika fud, želeli smo da obezbedimo jedinstven spoj kvalitetne hrane i usluge, koja
						je rezultirala burgerima i kobasicama premium ukusa, napravljene po jedinstvenoj recepturi.

					</p>
					<a title='Redrekcija na stranicu O nama' href="about.php" class="primary-btn">Pročitajte više</a>
				</div>
				<div class="col-lg-6 home-about-right">
					<img class="img-fluid" src="img/about/DRM_4516.jpg" alt="Slika hrane iz restorana">
				</div>
			</div>
		</div>
	</section>
	<!-- End home-about Area -->

	<!-- Start menu-area Area -->
	<section class="menu-area section-gap" id="menu">
		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="menu-content pb-70 col-lg-8">
					<div class="title text-center">
						<h1 class="mb-10"> Šta vam se danas jede? </h1>
						<p> <a title='Redirekcija na stranicu Online naručivanje' href='menu.php'> Online naručivanje  </a>direktno sa našeg sajta </p>
					</div>
				</div>
			</div>

			<div id="kategorije">

			</div>


			<div class="filters-content" id='meni'>
				<div class="row grid" id='meniContainer'>
					<div id='smallContainer'>

						<!-- BURGERI  -->
						<div class="col-md-6 col-lg-6 all breakfast">
							<div class="single-menu" id='burgeri'>
								<div class='text-center' id='naslov'>

									<h4>BURGERI </h4>


								</div>
								<div class='d-flex justify-content-between'>
									<div class='objasnjenje col-md-10'>
										<p> *obrok - sa pomfritom, onionima ili paprikom</p>
									</div>
									<div class='objasnjenje1 col-md-2'>
										<ul>
											<li> single </li>
											<li> obrok</li>
										</ul>
									</div>
								</div>
								<div class='title-wrap d-flex justify-content-between'>
									<div class='meni-detalj col-md-10'>
										<h6> KLASIK</h2>
										<p> burger sos, zelena salata, paradajz, kiseli krastavac</p>
									</div>
									<div class='cene col-md-2'>
										<ul class='cene1'>  
											<li> 269</li>
											<li> 392</li>
										</ul>

									</div>
								</div>
								
								<div class='title-wrap d-flex justify-content-between'>
									<div class='meni-detalj col-md-10'>
										<h6> HOTI </h2>
										<p> burger sos, zelena salata, paradajz, kiseli krastavaci, čili sos, luk</p>
									</div>
									<div class='cene col-md-2'>
										<ul class='cene1'>  
											<li> 279</li>
											<li> 339</li>
										</ul>

									</div>
								</div>

								<div class='title-wrap d-flex justify-content-between'>
									<div class='meni-detalj col-md-10'>
										<h6> ČIZI </h2>
										<p> burger sos, zelena salata, paradajz, kiseli krastavaci, dupli sir</p>
									</div>
									<div class='cene col-md-2'>
										<ul class='cene1'>  
											<li> 289</li>
											<li> 349</li>
										</ul>

									</div>
								</div>

								<div class='title-wrap d-flex justify-content-between'>
									<div class='meni-detalj col-md-10'>
										<h6> SERBIAN </h2>
										<p> kajmak, grilovana pančeta, zelena salata, marmelada od luka</p>
									</div>
									<div class='cene col-md-2'>
										<ul class='cene1'>  
											<li> 299</li>
											<li> 359</li>
										</ul>

									</div>
								</div>

								<div class='title-wrap d-flex justify-content-between'>
									<div class='meni-detalj col-md-10'>
										<h6> HOT ČIZI </h2>
										<p> BBQ MAYO namaz, dupli sir, čili sos, paradajz, luk, grilovana pančeta</p>
									</div>
									<div class='cene col-md-2'>
										<ul class='cene1'>  
											<li> 309 </li>
											<li> 369 </li>
										</ul>

									</div>
								</div>

								<div class='title-wrap d-flex justify-content-between'>
									<div class='meni-detalj col-md-10'>
										<h6> TRIPL DABL  </h2>
										<p> 300g mesa, 3xdupli sir, burger sos, paradajz, zelena salata, kiseli krastavci</p>
									</div>
									<div class='cene col-md-2'>
										<ul class='cene1'>  
											<li> XXX </li>
											<li> 579 </li>
										</ul>

									</div>
								</div>

								<div class='title-wrap d-flex justify-content-between'>
									<div class='meni-detalj col-md-10'>
										<h6> PILEĆI BURGER   </h2>
										<p> slatko ljuti sos, burger sos, paradajz, zelena salata, luk</p>
									</div>
									<div class='cene col-md-2'>
										<ul class='cene1'>  
											<li> 349 </li>
											<li> 399 </li>
										</ul>

									</div>
								</div>
						
							
							
							</div>
						</div>

						<!-- KOBASICE  -->
						<div class="col-md-6 col-lg-6 all breakfast">
							<div class="single-menu" id='burgeri'>
								<div class='text-center' id='naslov'>

									<h4>KOBAJE </h4>


								</div>
								<div class='d-flex justify-content-between'>
									<div class='objasnjenje col-md-10'>
										<p> *obrok - sa pomfritom, onionima ili paprikom</p>
									</div>
									<div class='objasnjenje1 col-md-2'>
										<ul>
											<li> single </li>
											<li> obrok</li>
										</ul>
									</div>
								</div>
								<div class='title-wrap d-flex justify-content-between'>
									<div class='meni-detalj col-md-10'>
										<h6> KLASIK</h2>
										<p> domaća kobasica 100% svinjsko meso </p>
									</div>
									<div class='cene col-md-2'>
										<ul class='cene1'>  
											<li> 229</li>
											<li> 289</li>
										</ul>

									</div>
								</div>

								<div class='title-wrap d-flex justify-content-between'>
									<div class='meni-detalj col-md-10'>
										<h6> ČIZI </h2>
										<p> domaća kobasica punjena kačkavaljem </br> 100% svinjsko meso </p>
									</div>
									<div class='cene col-md-2'>
										<ul class='cene1'>  
											<li> 229</li>
											<li> 289</li>
										</ul>

									</div>
								</div>
								
								<div class='title-wrap d-flex justify-content-between'>
									<div class='meni-detalj col-md-10'>
										<h6> HOTI </h2>
										<p> domaća kobasica začinjena domaćom ljutom paprikom </br> 100% svinjsko meso</p>
									</div>
									<div class='cene col-md-2'>
										<ul class='cene1'>  
											<li> 229</li>
											<li> 289</li>
										</ul>

									</div>
								</div>

								<div class='title-wrap d-flex justify-content-between'>
									<div class='meni-detalj col-md-10'>
										<h6> DIMI </h2>
										<p> domaća kobasica prodimljena kroz 3 dima</p>
									</div>
									<div class='cene col-md-2'>
										<ul class='cene1'>  
											<li> 229</li>
											<li> 289</li>
										</ul>

									</div>
								</div>

								<div class='title-wrap d-flex justify-content-between'>
									<div class='meni-detalj col-md-10'>
										<h6> GRILi  </h2>
										<p> domaća roštiljska kobasica 100% svinjsko meso</p>
									</div>
									<div class='cene col-md-2'>
										<ul class='cene1'>  
											<li> 229</li>
											<li> 289</li>
										</ul>

									</div>
								</div>

								<div class='title-wrap d-flex justify-content-between'>
									<div class='meni-detalj col-md-10'>
										<h6> ZMAJČEK </h2>
										<p> domaća kranjska kobasica 100% svinjsko meso</p>
									</div>
									<div class='cene col-md-2'>
										<ul class='cene1'>  
											<li> 229 </li>
											<li> 289 </li>
										</ul>

									</div>
								</div>
						
							
							
							</div>
						</div>

						<!-- PRILOZI -->

						<div class="col-md-6 col-lg-6 all breakfast">
							<div class="single-menu" id='burgeri'>
								<div class='text-center' id='naslov'>

									<h4>PRILOZI </h4>


								</div>
								<div class='d-flex justify-content-between'>
									<div class='objasnjenje col-md-10'>
										<p> *obrok - sa pomfritom, onionima ili paprikom</p>
									</div>
									<div class='objasnjenje1 col-md-2'>
										<ul>
											<li> 100g </li>
											<li> 200g</li>
										</ul>
									</div>
								</div>
								<div class='title-wrap d-flex justify-content-between'>
									<div class='meni-detalj col-md-10'>
										<h6> POMFRIT</h2>
										<!-- <p> domaća kobasica 100% svinjsko meso </p> -->
									</div>
									<div class='cene col-md-2'>
										<ul class='cene1'>  
											<li> 99</li>
											<li> 159</li>
										</ul>

									</div>
								</div>

								<div class='title-wrap d-flex justify-content-between'>
									<div class='meni-detalj col-md-10'>
										<h6> ONLIN RINGS </h2>
										<!-- <p> domaća kobasica punjena kačkavaljem </br> 100% svinjsko meso </p> -->
									</div>
									<div class='cene col-md-2'>
										<ul class='cene1'>  
											<li> 99</li>
											<li> 159</li>
										</ul>

									</div>
								</div>
								
								<div class='title-wrap d-flex justify-content-between'>
									<div class='meni-detalj col-md-10'>
										<h6> PEPPER RINGS  </h2>
										<!-- <p> domaća kobasica začinjena domaćom ljutom paprikom </br> 100% svinjsko meso</p> -->
									</div>
									<div class='cene col-md-2'>
										<ul class='cene1'>  
											<li> 99</li>
											<li> 159</li>
										</ul>

									</div>
								</div>
							
							</div>
						</div>

						

						<!-- SENDVICI  -->

						<div class="col-md-6 col-lg-6 all breakfast">
							<div class="single-menu" id='burgeri'>
								<div class='text-center' id='naslov'>

									<h4>SENDVIČI  </h4>


								</div>
								<div class='d-flex justify-content-between'>
									<div class='objasnjenje col-md-10'>
										<p> *obrok - sa pomfritom, onionima ili paprikom</p>
									</div>
									<div class='objasnjenje1 col-md-2'>
										<ul>
											<li> single </li>
											<li> obrok</li>
										</ul>
									</div>
								</div>
								<div class='title-wrap d-flex justify-content-between'>
									<div class='meni-detalj col-md-10'>
										<h6> REPUBLIKA</h2>
										<p> grilovana pančeta, pavlaka, majonez, paradajz, zelena salata </p>
									</div>
									<div class='cene col-md-2'>
										<ul class='cene1'>  
											<li> 159</li>
											<li> 219</li>
										</ul>

									</div>
								</div>

								<div class='title-wrap d-flex justify-content-between'>
									<div class='meni-detalj col-md-10'>
										<h6> REPUBLIKA EGG  </h2>
										<p> grilovana pančeta, grilovano jaje, pavlaka, majonez, paradajz, zelena salata </p>
									</div>
									<div class='cene col-md-2'>
										<ul class='cene1'>  
											<li> 199</li>
											<li> 259</li>
										</ul>

									</div>
								</div>
							
							</div>
						</div>
						

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

	<!-- Start gallery-area Area -->
	<section class="gallery-area section-gap" id="gallery">
		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="menu-content pb-70 col-lg-8">
					<div class="title text-center">
						<h1 class="mb-10">Fotografije iz našeg restorana</h1>
						<p>Pogledajte sve fotografije u našoj <a href='gallery.php'> galeriji </a> !</p>
					</div>
				</div>
			</div>

			<div class="filters-content">
				<div class="row grid" id='slike'>
					<div class="col-lg-4 col-md-6 col-sm-6 all breakfast">
						<div class="single-gallery">
							<img class="img-fluid" src="img/gallery/nova.jpg" alt="Kobasica">
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-6 all dinner">
						<div class="single-gallery">
							<img class="img-fluid" src="img/gallery/DSC_1071.jpg" alt="Kobasica">
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-6 all budget-meal">
						<div class="single-gallery">
							<img class="img-fluid" src="img/gallery/DRM_4511.jpg" alt="Slika hrane iz restorana">
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-6 all breakfast">
						<div class="single-gallery">
							<img class="img-fluid" src="img/gallery/DSC_1059.jpg" alt="Slika hrane iz restorana">
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-6 all lunch">
						<div class="single-gallery">
							<img class="img-fluid" src="img/gallery/DSC_1092.jpg" alt=" Slika hrane iz restorana">
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-6 all buffet">
						<div class="single-gallery">
							<img class="img-fluid" src="img/gallery/DRM_4432.jpg" alt="Slika hrane iz restorana">
						</div>
					</div>


				</div>
			</div>

		</div>
	</section>
	<!-- End gallery-area Area -->

	<!-- Start review Area -->
	<?php
	include "views/fixed/review.php";
	?>
	<!-- End review Area -->

	<!-- start footer Area -->
	<?php
	include "views/fixed/footer.php";
	?>
	<!-- End footer Area -->