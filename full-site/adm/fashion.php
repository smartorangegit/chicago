<!DOCTYPE html>
<html lang="en">
<head>
	<?php /*Google Tag Manager*/ include_once('../includes/gtm_head.php');
	require("includes/conn.php");
$sql = "select * from chika_img";
$result = mysql_query($sql) or die ("Нет соединения с базой данных: " . mysql_error());
 ?>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<title>ЖК Chicago Central House - квартири у центрі Києва, вулиця Антоновича (Горького)</title>
	<meta name="keywords" content="Chicago, ЖК Chicago, ЖК Чикаго, житловий комплекс, Київ, центр, Антоновича, Горького, купити квартиру, новобудова, апартаменти">
	<meta name="description" content="ЖК Chicago Concept House - житловий комплекс у центрі Києва по вулиці Антоновича (Горького), неповторна атмосфера стилю та комфорту.">
<link rel="stylesheet" href="flipclock.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="flipclock.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/normalize.css" />
	<link rel="stylesheet" type="text/css" href="../css/demo.css" />
	<link rel="stylesheet" type="text/css" href="../css/set1.css" />
    <link rel="stylesheet" href="../css/animate.css">
    <link rel="stylesheet" href="../css/slider-style.css">
    <link rel="stylesheet" href="../css/jquery.fancybox.css">
    <link rel="stylesheet" href="../css/jquery.fancybox-thumbs.css">
	<!--[if IE]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/progress.css">
    <script type="text/javascript" src="../js/lib/greensock/TweenMax.min.js"></script>
    <script src="../js/lib/scrollmagic/ScrollMagic.min.js"></script>
    <script type="text/javascript" src="../js/lib/scrollmagic/plugins/animation.gsap.js"></script>
    <script src="../js/lib/plugins/debug.addIndicators.min.js"></script>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<style media="screen">
		body {
			position: relative;
			height: 100%;
			padding-bottom: 100px;
		}
	span.normal.normal--2 {
		font-size: 22px;
    padding: 20px;
    display: block;
    line-height: 1.5;
	}
	footer {
		position: absolute;
    width: 100%;
    bottom: 0;
    left: 0;
	}
	.masonry {
	column-count: 4; // сколько колонок нужно?
	column-gap: 1em; // промежуток между блоками (справа или слева)
	-webkit-column-count: 4; -moz-column-count: 4; column-count: 4;
	-webkit-column-gap: 1em; -moz-column-gap: 1em; column-gap: 1em;
}
.item {
    display: inline-block;
    background: #1D2939;
    padding: 4px;
    margin: 0 0 1.5em;
    width: 100%;
    box-sizing: border-box;
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
    /*box-shadow: 2px 2px 4px 0 #ccc;*/
}
.item img {
	width: 100%;
}
</style>

<body>
	<?php /*Google Tag Manager*/ include_once('../includes/gtm_body.php'); ?>
    <script>
        var controller = new ScrollMagic.Controller();
				// $("a.fancybox").fancybox();
    </script>

	<header class="header">
		<div class="wrapper">
			<a href="index.html" class="logo">
				<img src="../img/logo.png" alt="logo">
			</a>
			<ul class="header-nav">
				<li id="mobile" class="mobile">
					<ul id="minimenu">
						<li id="miniclose" class="mobile">
							<li><a href="index.php" class="separate">Будинок</a></li>
							<li><a href="index.php#place" class="separate">Розташування</a></li>
							<li><a href="choise.php" class="separate">Квартири</a></li>
							<li><a href="index.php#builder" class="separate">Забудовник</a></li>
							<li><a href="progress.php" class="separate">Будівництво</a></li>
							<li><a href="index.php#contact" class="separate">Зв'язок</a></li>
					</ul>
				</li>

				<!-- <script>
				$(document).ready(function() {
					$('#mobile').click( function(event){
								$('#minimenu')
									.css('display', 'block')
									.animate({opacity: 1, top: '0%'}, 200);
							});
					});
					/* Зaкрытие*/
					$('#miniclose').click( function(){
						$('#minimenu')
							.animate({opacity: 0, top: '45%'}, 200,
								function(){ // пoсле aнимaции
									$(this).css('display', 'none');
									$('#overlay').fadeOut(400);
									$('.content-item').css('height','auto');
								}
				);
		});
			</script> -->
				<li><a href="index.php" class="separate">Будинок</a></li>
				<li><a href="index.php#place">Розташування</a></li>
				<li><a href="choise.php" class="separate">Квартири</a></li>
				<li><a href="index.php#builder">Забудовник</a></li>
				<li><a href="#" class="separate">Будівництво</a></li>
				<li><a href="index.php#contact">Зв'язок</a></li>
			</ul>
			<div class="header-callback">
				<div class="header-phone">Телефон відділу продажу <em>(044)22-77-244</em></div>
				<div class="header-button"><a href="#callback" class="button callback">зворотній зв`язок</a></div>
			</div>
		</div>
	</header>

	<section class="fifteenth progress-grid" id="builder">
		<span class="trigger-7"></span>
        <h2 class="title" style="transform: translate3d (20px, 0, 0)">ukrainian fashion week</h2>
        <i class="line"></i>
  </section>

  <section class="third light">
        <?/*<div class="lamps wrapper">
            <img src="img/icons/lamp.png" alt="lamp" />
						<img src="img/icons/lamp.png" alt="lamp" />
						<img src="img/icons/lamp.png" alt="lamp" />
        </div>*/?>
    <div class="wrapper">
			<span class="trigger-0"></span>
      <h2 class="subheader">
        <p><span>“CHICAGO central house” як витвір мистецтва</span>

      </h2>
			<p>
				<span class="normal normal--2">“CHICAGO central house” втілює у собі нову для України концепцію – будинок як витвір мистецтва. Саме тому ми обрали партнерство із Ukrainian Fashion Week – щоб обмінюватися ідеями із тими, хто формує тренди та створює неповторний стиль життя. Люди, які звикли завжди перебувати у центрі подій – саме для них ми будуємо цей житловий простір.
У цьому амбіційному концепті поєдналися яскрава чиказька архітектура, комфорт світового рівня, якість та всі переваги життя у центрі столиці. Шукайте себе на світлинах з події Ukrainian Fashion Week нижче!</span></p>
    </div>
  </section>

	<section class="building">
		<div class="wrapper">

			<div class="masonry">
<?
		while ($row = mysql_fetch_assoc($result))
                {

?>
			   <div class="item"><a class="fancybox" rel="fashion" href="<? echo'/adm/images/'.$row['date'].'/'.$row['name']?>"><? echo "<img src=\"../adm/images/".$row['date']."/min/".$row['name']. "\" >";  ?></a></div>
				<!-- <div class="item"><a class="fancybox" rel="fashion" href="img/gallery/2big.jpg"><img src="img/gallery/2.jpg" alt=""></a></div>
				 <div class="item"><a class="fancybox" rel="fashion" href="img/gallery/3big.jpg"><img src="img/gallery/3.jpg" alt=""></a></div>
				 <div class="item"><a class="fancybox" rel="fashion" href="img/gallery/4big.jpg"><img src="img/gallery/4.jpg" alt=""></a></div>
				 <div class="item"><a class="fancybox" rel="fashion" href="img/gallery/5big.jpg"><img src="img/gallery/5.jpg" alt=""></a></div>
				 <div class="item"><a class="fancybox" rel="fashion" href="img/gallery/6big.jpg"><img src="img/gallery/6.jpg" alt=""></a></div>
				 <div class="item"><a class="fancybox" rel="fashion" href="img/gallery/7big.jpg"><img src="img/gallery/7.jpg" alt=""></a></div>
				 <div class="item"><a class="fancybox" rel="fashion" href="img/gallery/8big.jpg"><img src="img/gallery/8.jpg" alt=""></a></div>
				 <div class="item"><a class="fancybox" rel="fashion" href="img/gallery/9big.jpg"><img src="img/gallery/9.jpg" alt=""></a></div>
				 <div class="item"><a class="fancybox" rel="fashion" href="img/gallery/10big.jpg"><img src="img/gallery/10.jpg" alt=""></a></div>
				 <div class="item"><a class="fancybox" rel="fashion" href="img/gallery/11big.jpg"><img src="img/gallery/11.jpg" alt=""></a></div>-->
<?
				
}?>
			</div>

	</div>


	</section>

	<?php include('../includes/form_callback.php'); ?>

	<footer>
        <div class="wrapper">
            <span class="copy">Copyright 2016</span>
            <span class="smarto">
                Розробка сайту
                <a href="#" class="logo-smart"></a>
            </span>
        </div>
  </footer>

    <script src="../js/lib/snap.svg-min.js"></script>
    <script src="../js/lib/slider.js"></script>
    <script src="../js/jquery.fancybox.pack.js"></script>
    <script src="../js/jquery.fancybox-thumbs.js"></script>
    <script src="../js/lib/wow.min.js"></script>
		<script src="../js/progres.js"></script>
    <!-- <script async defer
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCBqnmzNAzHojSwaOiHXbpTETnKMQgnsos&callback=initMap">
    </script> -->
		<script src="js/scripts.js"></script>

<script type="text/javascript">
$("a.fancybox").fancybox();

//        new ScrollMagic.Scene({triggerElement: ".trigger-0"})
//       .setClassToggle(".header", "zipped").addTo(controller);
//       var scene = new ScrollMagic.Scene({triggerElement: ".trigger-7", duration: 700})
//       .setTween(".fifteenth .title", {transform: "translateX(-20%)"}).addTo(controller);
//       var scene = new ScrollMagic.Scene({triggerElement: ".trigger-7", duration: 300})
//       .setTween(".fifteenth i.line", {transform: "translateX(0)"}).addTo(controller);
// 			var scene = new ScrollMagic.Scene({triggerElement: ".lamps", duration: 300})
//       .setTween(".lamps img", {opacity: "1"}).addTo(controller);
//
// 			$(document).ready(function() { // вся мaгия пoсле зaгрузки стрaницы
// 				$('#eye1').click( function(event){ // лoвим клик пo ссылки
// 					event.preventDefault(); // выключaем стaндaртную рoль элементa
// 					$('#overlay').fadeIn(400, // снaчaлa плaвнo пoкaзывaем темную пoдлoжку
// 					 	function(){ // пoсле выпoлнения предъидущей aнимaции
// 							$('.modal_wrap')
// 								.css('display', 'block');
// 							$('#modal_popup')
// 								.css('display', 'block') // убирaем у мoдaльнoгo oкнa display: none;
// 								.animate({opacity: 1, top: '-1400px'}, 200);
// 								$('.content-item').css('height','1500px'); // плaвнo прибaвляем прoзрaчнoсть oднoвременнo сo съезжaнием вниз
// 					});
// 				});
// 				/* Зaкрытие мoдaльнoгo oкнa*/
// 				$('#close, #overlay').click( function(){ // лoвим клик пo крестику или пoдлoжке
// 					$('#modal_popup')
// 						.animate({opacity: 0, top: '45%'}, 200,  // плaвнo меняем прoзрaчнoсть нa 0 и oднoвременнo двигaем oкнo вверх
// 							function(){ // пoсле aнимaции
// 								$(this).css('display', 'none');
// 								$('#overlay').fadeOut(400);
// 								$('.content-item').css('height','auto'); // скрывaем пoдлoжку
// 							}
// 			);
// 	});
//
// 	$('.form input, .form textarea').blur(function(){
// 			if($(this).val()){
// 					$(this).next().hide();
// 			} else {
// 					$(this).next().show();
// 			}
// 	})
	// $("a.fancybox").fancybox();
// });
</script>


</body>
</html>
