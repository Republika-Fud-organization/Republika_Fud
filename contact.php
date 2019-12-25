<!-- Start Head  -->
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
		<meta name="description" content="Naručite najbolju hranu u Pančevu već danas!">
		<!-- Meta Keyword -->
		<meta name="keywords" content="restoran, burgeri, kobasice, hrana, dostava, donesi.com, pristupačne cene, Pančevo">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Kontaktirajte nas | Republika Fud</title>

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
<!-- #header -->

	<!-- start banner Area -->
	<section class="relative about-banner">
		<div class="overlay overlay-bg"></div>
		<div class="container">
			<div class="row d-flex align-items-center justify-content-center">
				<div class="about-content col-lg-12">
					<h1 class="text-white">
						Kontakt 
					</h1>
					<p class="text-white link-nav"><a title='Početna stranica' href="index">Početna </a> <span
							class="lnr lnr-arrow-right"></span> <a title='Kontakt' href="contact"> Kontakt </a></p> 
				</div>
			</div>
		</div>
	</section>
	<!-- End banner Area -->

	<!-- Start contact-page Area -->
	<section class="contact-page-area section-gap">
		<div class="container">
			<div class="row">
				<!-- <div class="map-wrap" style="width:100%; height: 445px;" id="map"></div> --> 

				<div class="col-lg-4 d-flex flex-column address-wrap">
					<div class="single-contact-address d-flex flex-row">
						<div class="icon">
							<span class="lnr lnr-home"></span>
						</div>
						<div class="contact-details">
							<h5>Pančevo, Srbija</h5>
							<p>
								<a title='Redirekcija na Goole Maps' href='https://goo.gl/maps/G7ZAu1hTJnHYkxai9'> Zmaj Jove Jovanovića 2 </a>
							</p>
						</div>
					</div>
					<div class="single-contact-address d-flex flex-row">
						<div class="icon">
							<span class="lnr lnr-phone-handset"></span>
						</div>
						<div class="contact-details">
							<h5> <a title='Pozovite nas' href='tel:0612272339'> 0612272339 </a> </h5>
							<p>Radni dani: 11h - 23h </p>
							<p> Subota: 14h - 00h</p>
							<p> Nedelja: 16h - 22h </p>
						</div>
					</div>
					<div class="single-contact-address d-flex flex-row">
						<div class="icon">
							<span class="lnr lnr-envelope"></span>
						</div>
						<div class="contact-details" id='contact'>
							
							<p> republika.fud@gmail.com    </p>
						</div>
					</div>
				</div>
				<div class="col-lg-8">
					<form class="form-area contact-form text-right" id="myForm" action="mail.php" method="post">
						<div class="row">
							<div class="col-lg-6 form-group">
								<input name="name" placeholder="Ime" onfocus="this.placeholder = ''"
									onblur="this.placeholder = 'Enter your name'"
									class="common-input mb-20 form-control" required="" type="text">

								<input name="email" placeholder="Email adresa"
									pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$"
									onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'"
									class="common-input mb-20 form-control" required="" type="email">

								<input name="subject" placeholder="Naslov" onfocus="this.placeholder = ''"
									onblur="this.placeholder = 'Enter subject'" class="common-input mb-20 form-control"
									required="" type="text">
							</div>
							<div class="col-lg-6 form-group">
								<textarea class="common-textarea form-control" name="message" placeholder="Vaša poruka"
									onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Messege'"
									required=""></textarea>
							</div>
							<div class="col-lg-12">
								<div class="alert-msg" style="text-align: left;"></div>
								<button class="genric-btn primary" style="float: right;">Pošaljite poruku</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
	<!-- End contact-page Area -->

	<!-- start footer Area -->	
	<?php
				include "views/fixed/footer.php";
			?>
			<!-- End footer Area -->	