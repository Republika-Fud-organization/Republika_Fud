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
		<meta name="description" content="Ovde pogledajte fotografije iz restorana Republika Fud.">
		<!-- Meta Keyword -->
		<meta name="keywords" content="restoran, burgeri, kobasice, hrana, dostava, donesi.com, Pančevo">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title> Fotografije našeg restorana | Republika Fud</title>

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

		<!-- #header -->
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
								Galerija				
							</h1>	
							<p class="text-white link-nav"><a href="index.php">Početna </a>  <span class="lnr lnr-arrow-right"></span>  <a href="gallery.php"> Galerija</a></p>
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->			

			<!-- Start gallery-area Area -->
            <section class="gallery-area section-gap" id="gallery">
                <div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">Hoćete da vam odamo jednu tajnu?</h1>
								<p>Kod nas jedete hranu baš kao sa slike, jer i pored toga što je ukusna - naša hrana je i fotogenična!
								</p>
							</div>
						</div>
					</div>	
                    
                    <div class="filters-content" >
                        <div class="row grid" id='slike'>
                            <div class="col-lg-4 col-md-6 col-sm-6 all breakfast">
                            	<div class="single-gallery">
                            		<img class="img-fluid"  class="hover-shadow" src="img/gallery/nova.jpg" alt="Kobasica">
                            	</div>	                          
                            </div>                           
                            <div class="col-lg-4 col-md-6 col-sm-6 all dinner">
                            	<div class="single-gallery">
                            		<img class="img-fluid"  class="hover-shadow"src="img/gallery/DRM_4493.jpg" alt="Burger">
                            	</div>                            
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 all budget-meal">
                            	<div class="single-gallery">
                            		<img class="img-fluid" src="img/gallery/DRM_4511.jpg" alt="Pivo i burgeri">
                            	</div>                            
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 all breakfast">
                            	<div class="single-gallery">
                            		<img class="img-fluid" src="img/gallery/DSC_1092.jpg" alt="Kobasice i pivo">
                            	</div>                            
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 all lunch">
                            	<div class="single-gallery">
                            		<img class="img-fluid" src="img/gallery/DSC_1087.jpg" alt="Hrana iz restorana">
                            	</div>                            
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 all buffet">
                            	<div class="single-gallery">
                            		<img class="img-fluid" src="img/gallery/DRM_4432.jpg" alt="Republika Fud">
                            	</div>                            
							</div>     
							<div class="col-lg-4 col-md-6 col-sm-6 all breakfast">
                            	<div class="single-gallery">
                            		<img class="img-fluid" src="img/gallery/DRM_4516.jpg" alt="Sočni burger">
                            	</div>                            
							</div>  
							<div class="col-lg-4 col-md-6 col-sm-6 all lunch">
                            	<div class="single-gallery">
                            		<img class="img-fluid" src="img/gallery/DRM_4449.jpg" alt="Burgeri i pivo">
                            	</div>                            
							</div>          
							<div class="col-lg-4 col-md-6 col-sm-6 all lunch">
                            	<div class="single-gallery">
                            		<img class="img-fluid" src="img/gallery/DRM_4485.jpg" alt="Domaće kobasice">
                            	</div>                            
							</div>     
							<div class="col-lg-4 col-md-6 col-sm-6 all breakfast">
                            	<div class="single-gallery">
                            		<img class="img-fluid" src="img/gallery/DSC_1072.jpg" alt="Pivo i burgeri">
                            	</div>	                          
							</div> 
							<div class="col-lg-4 col-md-6 col-sm-6 all lunch">
                            	<div class="single-gallery">
                            		<img class="img-fluid" src="img/gallery/DSC_1059.jpg" alt="Republika Fud">
                            	</div>                            
							</div> 
							<div class="col-lg-4 col-md-6 col-sm-6 all buffet">
                            	<div class="single-gallery">
                            		<img class="img-fluid" src="img/gallery/DRM_4512.jpg" alt="Kobasice">
                            	</div>                            
							</div>         
						</div>
                    </div>
               
                </div>
            </section>
            <!-- End gallery-area Area -->					
<!-- start footer Area -->	
<?php
				include "views/fixed/footer.php";
			?>
			<!-- End footer Area -->	