<?php include_once('../includes/utm.php'); ?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<?php /*Google Tag Manager*/ include_once('../includes/gtm_head.php'); ?>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width">
	<title>Спасибо!</title>
	<meta name="keywords" content="Chicago, ЖК Chicago, ЖК Чикаго, житловий комплекс, Київ, центр, Антоновича, Горького, купити квартиру, новобудова, апартаменти">
	<meta name="description" content="ЖК Chicago Concept House - житловий комплекс у центрі Києва по вулиці Антоновича (Горького), неповторна атмосфера стилю та комфорту.">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
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

		<?php /*меню*/ include_once('../includes/header_ru.php'); ?>

		<div class="section_404">
			<div class="trigger-0"></div>
			<div class="wrapper">
				<div class="one_slider">
					<p class="section_name">Спасибо! </p>
					<p class="fr_1"><strong>Ваша заявка успешно отправлена!</strong></p><br>
					<p class="fr_2">Наш менеджер свяжется с вами в ближайшее время.</p><br>
					<p>
						Предлагаем просмотреть другие проекты компании SAGA Development
					</p>

					<div class="developer_box clearfix">


					<ul class="proj_slider">
						<li class="logo_proj logo_proj_san">
							<a href="https://sanfrancisco.com.ua/ru" target="_blank">
								<img src="/img/logo/sanfrancisco_white.svg" alt="San Francisco Creative House" title="San Francisco Creative House" />
							</a>
						</li>
						<li class="logo_proj logo_proj_ryba">
							<a href="https://rybalsky.com.ua/ru" target="_blank">
								<img src="/img/logo/rybalsky_logo_white.svg" alt="Rybasky" title="Rybasky" />
							</a>
						</li>
						<li class="logo_proj logo_proj_bristol">
							<a href="https://bristol.house/ru" target="_blank">
								<img src="/img/logo/bristol_logo_white.svg" alt="BRISTOL Comfort House" title="BRISTOL Comfort House" />
							</a>
						</li>
						<li class="logo_proj logo_proj_new">
							<a href="https://chicago.kiev.ua/ru" target="_blank">
								<img src="/img/logo/new_york_logo_white.svg" alt="New York Concept House" title="New York Concept House"/>
							</a>
						</li>
						<li class="logo_proj logo_proj_einstein">
							<a href="http://einstein.house/ru" target="_blank">
								<img src="/img/logo/EINSTEIN-logoW.svg" alt="EINSTEIN Concept House" title="EINSTEIN Concept House" />
							</a>
						</li>
						<li class="logo_proj logo_proj_kandinskiy">
							<a href="http://kandinsky-residence.com.ua" target="_blank">
								<img src="/img/logo/kandinsky_logo_white.svg" alt="KANDINSKY Odessa Residence" title="KANDINSKY Odessa Residence" />
							</a>
						</li>
						<li class="logo_proj logo_proj_resident">
							<a href="http://resident.house/ru" target="_blank">
								<img src="/img/logo/resident_logo_white.svg" alt="RESIDENT Concept House" title="RESIDENT Concept House" />
							</a>
						</li>
					</ul>

				</div>
				</div>
			</div>
		</div>
		<style media="screen">
		body, html{
			height: 100%;
		}
		.section_404{
			min-height: 100%;
			background-size: cover;
			box-sizing: border-box;
			padding-top: 140px;
		}
		.one_slider{
			margin: 0 auto;
			color: white;
			text-align: center;
			border: none;
			padding-top: 1px;
			}
		.fr_1{
			font-size: 24px;
			margin-bottom: 20px;
		}
		.section_name{
			font-size: 48px;
			margin: 30px auto;
		}
		.bx-wrapper{
			margin: 30px auto;
			-moz-box-shadow: none;
			-webkit-box-shadow: none;
			box-shadow:none;
			border: none;
			background: transparent;
			position: relative;
		}
		.logo_proj{
			display: inline-block;
			vertical-align: middle;
			box-sizing: border-box;
			text-align: center;
			text-align: -webkit-center;
		}
		.bx-wrapper img{width: 85%;}
		.proj_slider{
			display: flex;
			display: -webkit-flex;
			align-items: center;
			-webkit-align-items: center;
		}
		.logo_proj_einstein img{width: 65%;}
		.logo_proj_ryba img{width: 65%;}
		.bx-wrapper .bx-controls-direction a{text-indent: 0; text-align: center; position: absolute; top: calc(50% - 10px);}
		.bx-wrapper .bx-prev {left: -16px;}
		.bx-wrapper .bx-next {right: -16px;}
		@media only screen and (max-width:768px) {

		}
		</style>
		<?php include('../includes/form_callback.php'); ?>
		<!-- <footer>
	        <div class="wrapper">
	            <span class="copy">Copyright 2016</span>
	            <span class="smarto">
	                Розробка сайту
	                <a href="#" class="logo-smart"></a>
	            </span>
	        </div>
	  </footer> -->

			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
			<script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>


		<script>

			var defaultSliderConfiguration = {
				slideWidth: 180,
				minSlides: 1,
				maxSlides: 5,
				moveSlides: 1,
				auto: true,
				speed: 1000,
				pause: 3000,
				slideMargin: 20,
				infiniteLoop: true,
				easing: "ease-in-out",
				responsive: true,
				touchEnabled: true,
				nextText: '<svg height="20" viewBox="0 0 215.60001 421.0636" width="12" xmlns="http://www.w3.org/2000/svg" fill="#ffffff"><path d="m0 416.08179c0 2 1.2 3.8 3.1 4.6s4 .3 5.4-1.1l205.6-205.6c1-1 1.5-2.3 1.5-3.5s-.5-2.6-1.5-3.5l-205.5-205.4999914c-1.3-1.4-3.5-1.9-5.5-1.1-1.9.8-3.1 2.6000001-3.1 4.6000002z"/></svg>',
			  prevText: '<svg height="20" viewBox="0 0 215.60001 421.0636" width="12" xmlns="http://www.w3.org/2000/svg" fill="#ffffff"><path d="m215.6 416.08179c0 2-1.2 3.8-3.1 4.6s-4 .3-5.4-1.1l-205.6-205.6c-1-1-1.5-2.3-1.5-3.5s.5-2.6 1.5-3.5l205.5-205.4999914c1.3-1.4 3.5-1.9 5.5-1.1 1.9.8 3.1 2.6000001 3.1 4.6000002z"/></svg>',
				pager: false,
				// controls: false,
				onSliderResize: function() {
					var sliderConfiguration = getScreenSize();
					bxSlider.reloadSlider(sliderConfiguration)
				}
			};

			function getScreenSize() {
				var width = window.innerWidth;
				if(width > 1260) {
					return defaultSliderConfiguration;
				} else if(width > 1060 && width < 1260) {
					return Object.assign({}, defaultSliderConfiguration, {maxSlides: 4 });
				} else if(width > 850 && width < 1060) {
					return Object.assign({}, defaultSliderConfiguration, {maxSlides: 3 });
				} else if(width > 440 && width < 850) {
					return Object.assign({}, defaultSliderConfiguration, {maxSlides: 2 });
				} else {
					return Object.assign({}, defaultSliderConfiguration, {maxSlides: 1 });
				}
			}

			var sliderConfiguration = getScreenSize();

			var bxSlider = $(".proj_slider").bxSlider(sliderConfiguration);

		</script>
</body>
</html>
