<!DOCTYPE html>
<html lang="ru">
<head>
	<?php /*Google Tag Manager*/ include_once('../includes/gtm_head.php'); ?>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width">
	<title>Ошибка 404. Страница не найдена!</title>
	<meta name="keywords" content="Chicago, ЖК Chicago, ЖК Чикаго, житловий комплекс, Київ, центр, Антоновича, Горького, купити квартиру, новобудова, апартаменти">
	<meta name="description" content="ЖК Chicago Concept House - житловий комплекс у центрі Києва по вулиці Антоновича (Горького), неповторна атмосфера стилю та комфорту.">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="/css/normalize.css" />
	   <!--[if IE]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	<link rel="stylesheet" href="/css/style.css">
  <link rel="stylesheet" href="/css/progress.css">
  <script type="text/javascript" src="/js/lib/greensock/TweenMax.min.js"></script>
  <script src="/js/lib/scrollmagic/ScrollMagic.min.js"></script>
  <script type="text/javascript" src="/js/lib/scrollmagic/plugins/animation.gsap.js"></script>
  <script src="/js/lib/plugins/debug.addIndicators.min.js"></script>
</head>

<body>
	  <script>
        var controller = new ScrollMagic.Controller();
    </script>

	<?php /*Google Tag Manager*/ include_once('../includes/header_ru.php'); ?>

	<section class="main404">
		<div class="Rez" style="display:none;">
			<div id="Lenny">
				<div id="homer"></div>
				<div id="carl" =""="">
					<a id="fiv_tx"><br>
				</div>
			</div>
			<a id="fiv_tx2"></a>
		</div>

		<div>
			<a class="fr_4">
				<?echo $actual_link;?>
			</a>
					<br>
					<a id="fiv_tx2">404</a>
					<br>
					<a class="fr_1"><strong>УВЫ, СТРАНИЦА НЕ НАЙДЕНА!</strong></a><br>
					<a class="fr_2">Страница, которую вы ищете, возможно, была удалена, ее название было изменено, или временно недоступна.</a><br>
					<a href="http://chicago.kiev.ua/ru" class="fr_3">На главную</a><br>
		</div>


		<style>
		html {
			height: 100%;
		}
		body {
			height: 100%;
			background-color: white;
		}
		section.main404 {
			height: calc(100% - 170px);
			text-align: center;
			padding-top: 80px;

		}
		.Rez{
		    padding: 55px 0px 0px 0; height: 270px;
		    width: 44%;
		    background: #e4202b;
		}
		#fiv{
		    color: white;
		    font-size: 100px;
		    padding: 0 0 0 40px;
		}
		#fiv_tx{
		    color: white;
		    font-size: 20px;
		    padding: 0 0 0 5px;
		}
		#fiv_tx2{
		    color: #e4202b;
		    font-size: 360px;

		}
		#Lenny{
		display: inline-flex;
		padding: 0 0 0 3%;
		}
		#carl{
		padding: 4px 0px 0px 30px;
		}
		.fr_1{
		    font-size: 40px;
				color: black;
		   	}
		.fr_2{
		font-size: 25px;
		color: black;
		}
		.fr_3{
		    font-size: 30px;
		    color: #e4202b;
			text-decoration: none;
		}
		.fr_4{
		font-size: 25px;
		}
		footer {
			background-color: #f1f1F1;
		}
@media only screen and (max-width:768px) {
	#fiv_tx2 {
	    font-size: 150px;
		}
		.fr_1{
		    font-size: 26px;
			}
			.fr_2 {
    font-size: 18px;
    margin: 10px;
	}
}
		</style>
	</section>
	<?php include('../includes/form_callback.php'); ?>
	<footer>
        <div class="wrapper">
            <span class="copy">Copyright 2016</span>
            <span class="smarto">
                Разработка сайта
                <a href="#" class="logo-smart"></a>
            </span>
        </div>
  </footer>
    <script src="/js/lib/snap.svg-min.js"></script>
    <script src="/js/lib/slider.js"></script>
    <!-- <script src="/js/jquery.fancybox.pack.js"></script>
    <script src="/js/jquery.fancybox-thumbs.js"></script> -->
    <script src="/js/lib/wow.min.js"></script>
		<script src="/js/progres.js"></script>

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

				/* Зaкрытие мoдaльнoгo oкнa*/


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
