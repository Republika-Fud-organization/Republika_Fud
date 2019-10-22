$(document).ready(function () {
    "use strict";
    
    // ispisBurgeri();
    // ispisGalerija();

    var window_width = $(window).width(),
        window_height = window.innerHeight,
        header_height = $(".default-header").height(),
        header_height_static = $(".site-header.static").outerHeight(),
        fitscreen = window_height - header_height;

    $(".fullscreen").css("height", window_height)
    $(".fitscreen").css("height", fitscreen);


    // ------- Datepicker  js --------//  

    $(function () {
        $(".date-picker").datepicker();
    });


    //------- Niceselect  js --------//  

    if (document.getElementById("default-select")) {
        $('select').niceSelect();
    };
    if (document.getElementById("default-select2")) {
        $('select').niceSelect();
    };
    if (document.getElementById("service-select")) {
        $('select').niceSelect();
    };

    //------- Lightbox  js --------//  

    $('.img-gal').magnificPopup({
        type: 'image',
        gallery: {
            enabled: true
        }
    });

    $('.play-btn').magnificPopup({
        type: 'iframe',
        mainClass: 'mfp-fade',
        removalDelay: 160,
        preloader: false,
        fixedContentPos: false
    });

    //------- Superfish nav menu  js --------//  

    $('.nav-menu').superfish({
        animation: {
            opacity: 'show'
        },
        speed: 400
    });


    //------- Filter  js --------//  

    $('#kategorije ul li a').click(function () {
        $('#kategorije ul li a').removeClass('active');
        $(this).addClass('active');

        // var data = $(this).attr('data-filter');
        // $grid.isotope({
        //     filter: data
        // })
    });


    if (document.getElementById("menu") || document.getElementById("gallery")) {
        var $grid = $(".grid").isotope({
            itemSelector: ".all",
            percentPosition: true,
            masonry: {
                columnWidth: ".all"
            }
        })
    };

    // ISPIS PROIZVODA U MENIJU 

    function ispisBurgeri() {
        $.ajax({
            url: "data/proizvodi.json",
            method: "GET",
            success: function (proizvod) {
                ispisProizvoda(proizvod);
            }
        });
    }

    function ispisProizvoda(proizvod) {
        var ispis = `	<div class='text-center' id='naslov'>
        <!-- <i class="fa fa-circle"></i> -->
        <h4>BURGERI </h4>
        <!-- <i class="fa fa-circle"></i> -->

    </div>
    <div class='d-flex justify-content-between'>
        <div class='objasnjenje'>
            <p> *obrok - sa pomfritom, onionima ili paprikom</p>
        </div>
        <div class='objasnjenje1'>
            <p> single </p>
            <p> obrok </p>
        </div>
    </div>`;

        proizvod.forEach(p => {
            ispis += `
            <div class='title-wrap d-flex justify-content-between'>
            <div class='meni-detalj'>
                <h6> ${p.naziv}</h2>
                
            </div>
            <div class='cene'>
                <p> ${p.cena.single} </p>
                <p> ${p.cena.obrok}</p>

            </div>
        </div>
        <div class=' d-flex justify-content-between'>
            <div class=''>
            <p> ${p.opis}</p>
            </div>
        </div>
            `
        });

        $("#burgeri").html(ispis);
    }

    // GALLERY // 

    function ispisGalerija() {
        $.ajax({
            url: "data/photos.json",
            method: "GET",
            success: function (slika) {
                slike(slika);
            }
        });
    }

    function slike(slika) {
        var ispis = "";

        slika.forEach(s => {
            ispis += `
            <div class="col-lg-4 col-md-6 col-sm-6 ">
            <div class="single-gallery">
                <img class="img-fluid" src="${s.src}" alt="${s.alt}">
            </div>	                          
        </div>
            `
        });

        $("#slike").html(ispis);

    }


    //------- Owl Carusel  js --------//  

    $('.active-review-carusel').owlCarousel({
        items: 1,
        loop: true,
        autoplay: true,
        autoplayHoverPause: true,
        smartSpeed: 500,
        margin: 30,
        dots: true
    });


    //------- Mobile Nav  js --------//  

    if ($('#nav-menu-container').length) {
        var $mobile_nav = $('#nav-menu-container').clone().prop({
            id: 'mobile-nav'
        });
        $mobile_nav.find('> ul').attr({
            'class': '',
            'id': ''
        });
        $('body .main-menu').append($mobile_nav);
        $('body .main-menu').prepend('<span class="menu-title">Menu</span> <button type="button" id="mobile-nav-toggle"><i class="lnr lnr-menu"></i></button>');
        $('body .main-menu').append('<div id="mobile-body-overly"></div>');
        $('#mobile-nav').find('.menu-has-children').prepend('<i class="lnr lnr-chevron-down"></i>');

        $(document).on('click', '.menu-has-children i', function (e) {
            $(this).next().toggleClass('menu-item-active');
            $(this).nextAll('ul').eq(0).slideToggle();
            $(this).toggleClass("lnr-chevron-up lnr-chevron-down");
        });

        $(document).on('click', '#mobile-nav-toggle', function (e) {
            $('body').toggleClass('mobile-nav-active');
            $('#mobile-nav-toggle i').toggleClass('lnr-cross lnr-menu');
            $('#mobile-body-overly').toggle();
        });

        $(document).on('click', function (e) {
            var container = $("#mobile-nav, #mobile-nav-toggle");
            if (!container.is(e.target) && container.has(e.target).length === 0) {
                if ($('body').hasClass('mobile-nav-active')) {
                    $('body').removeClass('mobile-nav-active');
                    $('#mobile-nav-toggle i').toggleClass('lnr-cross lnr-menu');
                    $('#mobile-body-overly').fadeOut();
                }
            }
        });
    } else if ($("#mobile-nav, #mobile-nav-toggle").length) {
        $("#mobile-nav, #mobile-nav-toggle").hide();
    }

    //------- Smooth Scroll  js --------//  

    $('.nav-menu a, #mobile-nav a, .scrollto').on('click', function () {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            var target = $(this.hash);
            if (target.length) {
                var top_space = 0;

                if ($('#header').length) {
                    top_space = $('#header').outerHeight();

                    if (!$('#header').hasClass('header-fixed')) {
                        top_space = top_space;
                    }
                }

                $('html, body').animate({
                    scrollTop: target.offset().top - top_space
                }, 1500, 'easeInOutExpo');

                if ($(this).parents('.nav-menu').length) {
                    $('.nav-menu .menu-active').removeClass('menu-active');
                    $(this).closest('li').addClass('menu-active');
                }

                if ($('body').hasClass('mobile-nav-active')) {
                    $('body').removeClass('mobile-nav-active');
                    $('#mobile-nav-toggle i').toggleClass('lnr-times lnr-bars');
                    $('#mobile-body-overly').fadeOut();
                }
                return false;
            }
        }
    });

    $(document).ready(function () {

        $('html, body').hide();

        if (window.location.hash) {

            setTimeout(function () {

                $('html, body').scrollTop(0).show();

                $('html, body').animate({

                    scrollTop: $(window.location.hash).offset().top - 108

                }, 1000)

            }, 0);

        } else {

            $('html, body').show();

        }

    });


    jQuery(document).ready(function ($) {
        // Get current path and find target link
        var path = window.location.pathname.split("/").pop();

        // Account for home page with empty path
        if (path == '') {
            path = 'index.html';
        }

        var target = $('nav a[href="' + path + '"]');
        // Add active class to target link
        target.addClass('menu-active');
    });

    $(document).ready(function () {
        if ($('.menu-has-children ul>li a').hasClass('menu-active')) {
            $('.menu-active').closest("ul").parentsUntil("a").addClass('parent-active');
        }
    });




    //------- Header Scroll Class  js --------//  

    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('#header').addClass('header-scrolled');
        } else {
            $('#header').removeClass('header-scrolled');
        }
    });


    //------- Mailchimp js --------//  

    $(document).ready(function () {
        $('#mc_embed_signup').find('form').ajaxChimp();
    });

    var goToTop = function () {

		$('.js-gotop').on('click', function (event) {

			event.preventDefault();

			$('html, body').animate({
				scrollTop: $('html').offset().top
			}, 500, 'easeInOutExpo');

			return false;
		});

		$(window).scroll(function () {

			var $win = $(window);
			if ($win.scrollTop() > 200) {
				$('.js-top').addClass('active');
			} else {
				$('.js-top').removeClass('active');
			}

			if ($win.scrollTop() > 100) {
				$('.fh5co-nav').addClass('scrolled');
			} else {
				$('.fh5co-nav').removeClass('scrolled');
			}

		});

    };
    
    goToTop();


});