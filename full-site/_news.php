<!DOCTYPE html>
<html lang="en">
<head>
	<?php /*Google Tag Manager*/ include_once('includes/gtm_head.php'); ?>
	<link rel="alternate" hreflang="ru" href="https://chicago.kiev.ua/ru/news/news.php" />
	<link rel="alternate" hreflang="uk" href="https://chicago.kiev.ua/news.php" />
	<link rel="alternate" hreflang="en" href="https://chicago.kiev.ua/en/news/news.php" />
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<title>ЖК Chicago Central House - квартири у центрі Києва, вулиця Антоновича (Горького)</title>
	<meta name="keywords" content="Chicago, ЖК Chicago, ЖК Чикаго, житловий комплекс, Київ, центр, Антоновича, Горького, купити квартиру, новобудова, апартаменти">
	<meta name="description" content="ЖК Chicago Concept House - житловий комплекс у центрі Києва по вулиці Антоновича (Горького), неповторна атмосфера стилю та комфорту.">
<link rel="stylesheet" href="flipclock.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="flipclock.js"></script>
	<link rel="stylesheet" type="text/css" href="css/normalize.css" />
	<!-- <link rel="stylesheet" type="text/css" href="css/demo.css" /> -->
	<link rel="stylesheet" type="text/css" href="css/set1.css" />
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/slider-style.css">
    <link rel="stylesheet" href="css/jquery.fancybox.css">
    <link rel="stylesheet" href="css/jquery.fancybox-thumbs.css">
	<!--[if IE]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/progress.css">
	<link rel="stylesheet" href="css/news.css">
    <script type="text/javascript" src="js/lib/greensock/TweenMax.min.js"></script>
    <script src="js/lib/scrollmagic/ScrollMagic.min.js"></script>
    <script type="text/javascript" src="js/lib/scrollmagic/plugins/animation.gsap.js"></script>
    <script src="js/lib/plugins/debug.addIndicators.min.js"></script>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>

<body>
	<?php /*Google Tag Manager*/ include_once('includes/gtm_body.php'); ?>
    <script>
        var controller = new ScrollMagic.Controller();
    </script>

	<?php /*Google Tag Manager*/ include_once('includes/header_ua.php'); ?>

	<section class="fifteenth news" id="builder">
		<span class="trigger-7"></span>
        <h2 class="title" style="transform: translate3d (20px, 0, 0)">новини</h2>
        <i class="line"></i>
  </section>

  <section class="third light">
        <div class="lamps wrapper">
            <img src="img/icons/lamp.png" alt="lamp" />
						<img src="img/icons/lamp.png" alt="lamp" />
						<img src="img/icons/lamp.png" alt="lamp" />
        </div>
    <div class="wrapper">
			<span class="trigger-0"></span>

			<div class="img-item image-item--1">
				<div class="img-name"><span>7 чудес Чикаго</span></div>
				<div class="img-date">22 березня 2017 року</div>
				<div class="img-info"><span>Чикаго, штат Іллінойс, місто вітрів. Третє за чисельністю населення місто у Сполучених Штатах,
				можливо, найбільш недооцінене туристами. Давайте уявимо, що у нас є тиждень ... </span></div>
					<a class="eye grouped_elements" rel="gal1" href="news_det.php"><img src="img/prog-eye.png" alt="eye"/></a>
					<!-- <a class="grouped_elements" rel="group1" href="img/prog1.jpg"></a>
					<a class="grouped_elements" rel="group1" href="img/prog2.jpg"></a>
					<a class="grouped_elements" rel="group1" href="img/prog3.jpg"></a> -->
			</div>

			<div class="img-item image-item--2" style="visibility:hidden">
				<div class="img-name"><span>Новина 2</span></div>
				<div class="img-date">4 листопада 2016 року</div>
				<div class="img-info"><span>Початок робіт з облаштування свайного поля та армування вертикальних конструкцій цокольного поверху</span></div>
					<a class="eye grouped_elements" rel="group1" href="news_det.php"><img src="img/prog-eye.png" alt="eye"/></a>

			</div>


			<div class="img-item image-item--3"  style="visibility:hidden">
				<div class="img-name"><span>Новина 3</span></div>
				<div class="img-date">4 листопада 2016 року</div>
				<div class="img-info"><span>Початок робіт з облаштування свайного поля та армування вертикальних конструкцій цокольного поверху</span></div>
					<a class="eye grouped_elements" rel="group1" href="news_det.php"><img src="img/prog-eye.png" alt="eye"/></a>

			</div>











    </div>

  </section>



	<?php include('includes/form_callback.php'); ?>

	<footer>
        <div class="wrapper">
            <span class="copy">Copyright 2017</span>
            <span class="smarto">
                Розробка сайту
                <a href="#" class="logo-smart"></a>
            </span>
        </div>
  </footer>

    <script src="js/lib/snap.svg-min.js"></script>
    <script src="js/lib/slider.js"></script>
    <script src="js/jquery.fancybox.pack.js"></script>
    <script src="js/jquery.fancybox-thumbs.js"></script>
    <script src="js/lib/wow.min.js"></script>
		<script src="js/progres.js"></script>
    <!-- <script async defer
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCBqnmzNAzHojSwaOiHXbpTETnKMQgnsos&callback=initMap">
    </script> -->
	<!-- <script src="js/scripts.js"> -->
  <script>
       new ScrollMagic.Scene({triggerElement: ".trigger-0"})
      .setClassToggle(".header", "zipped").addTo(controller);
      var scene = new ScrollMagic.Scene({triggerElement: ".trigger-7", duration: 700})
      .setTween(".fifteenth .title", {transform: "translateX(-20%)"}).addTo(controller);
      var scene = new ScrollMagic.Scene({triggerElement: ".trigger-7", duration: 300})
      .setTween(".fifteenth i.line", {transform: "translateX(0)"}).addTo(controller);
			var scene = new ScrollMagic.Scene({triggerElement: ".lamps", duration: 300})
      .setTween(".lamps img", {opacity: "1"}).addTo(controller);

			$(document).ready(function() { // вся мaгия пoсле зaгрузки стрaницы
				$('#eye1').click( function(event){ // лoвим клик пo ссылки
					event.preventDefault(); // выключaем стaндaртную рoль элементa
					$('#overlay').fadeIn(400, // снaчaлa плaвнo пoкaзывaем темную пoдлoжку
					 	function(){ // пoсле выпoлнения предъидущей aнимaции
							$('.modal_wrap')
								.css('display', 'block');
							$('#modal_popup')
								.css('display', 'block') // убирaем у мoдaльнoгo oкнa display: none;
								.animate({opacity: 1, top: '-1400px'}, 200);
								$('.content-item').css('height','1500px'); // плaвнo прибaвляем прoзрaчнoсть oднoвременнo сo съезжaнием вниз
					});
				});
				/* Зaкрытие мoдaльнoгo oкнa*/
				$('#close, #overlay').click( function(){ // лoвим клик пo крестику или пoдлoжке
					$('#modal_popup')
						.animate({opacity: 0, top: '45%'}, 200,  // плaвнo меняем прoзрaчнoсть нa 0 и oднoвременнo двигaем oкнo вверх
							function(){ // пoсле aнимaции
								$(this).css('display', 'none');
								$('#overlay').fadeOut(400);
								$('.content-item').css('height','auto'); // скрывaем пoдлoжку
							}
			);
	});

	$('.form input, .form textarea').blur(function(){
			if($(this).val()){
					$(this).next().hide();
			} else {
					$(this).next().show();
			}
	})

	$("a.grouped_elements").fancybox();
});
	</script>
</body>
</html>
