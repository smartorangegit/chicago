<!DOCTYPE html>
<html lang="en">
<head>
	<?php /*Google Tag Manager*/ include_once('../../includes/gtm_head.php'); ?>
	<link rel="alternate" hreflang="ru" href="https://chicago.kiev.ua/ru/sitemap/" />
	<link rel="alternate" hreflang="uk" href="https://chicago.kiev.ua/sitemap/" />
	<link rel="alternate" hreflang="en" href="https://chicago.kiev.ua/en/sitemap/" />
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<title>Sitemap | CHICAGO Central House</title>
	<meta name="robots" content="index, follow">
  <link rel="canonical" href="<?php echo 'https://'.$_SERVER['SERVER_NAME'].$_SERVER["REQUEST_URI"];?>"/>
	<meta name="description" content="Sitemap | CHICAGO Central House">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../../css/normalize.css" />
  <link rel="stylesheet" href="../../css/animate.css">
  <link rel="stylesheet" href="../../css/slider-style.css">
  <link rel="stylesheet" href="../../css/jquery.fancybox.css">
  <link rel="stylesheet" href="../../css/jquery.fancybox-thumbs.css">
	<!--[if IE]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<link rel="stylesheet" href="../../css/style.css">
  <link rel="stylesheet" href="../../css/progress.css">
	<link rel="stylesheet" href="../../css/news.css">
  <script type="text/javascript" src="../../js/lib/greensock/TweenMax.min.js"></script>
  <script src="../../js/lib/scrollmagic/ScrollMagic.min.js"></script>
  <script type="text/javascript" src="../../js/lib/scrollmagic/plugins/animation.gsap.js"></script>
  <script src="../../js/lib/plugins/debug.addIndicators.min.js"></script>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>

<body>
	<?php /*Google Tag Manager*/ include_once('../../includes/gtm_body.php'); ?>
    <script>
        var controller = new ScrollMagic.Controller();
    </script>

	<?php /*Google Tag Manager*/ include_once('../../includes/header_en.php'); ?>

	<section class="fifteenth news" id="builder">
		<span class="trigger-7"></span>
        <h1 class="title">Sitemap</h1>
        <i class="line"></i>
  </section>

  <section class="third light">
        <div class="lamps wrapper">
            <img src="../../img/icons/lamp.png" alt="lamp" />
						<img src="../../img/icons/lamp.png" alt="lamp" />
						<img src="../../img/icons/lamp.png" alt="lamp" />
        </div>
    <div class="wrapper">
			<span class="trigger-0"></span>

						<div class="sitemap_item">
							<ul>
						<?php /*<li><a href="https://chicago.kiev.ua">будинок</a></li>*/ ?>
								<li><a href="https://chicago.kiev.ua/en/progress/">construction</a></li>
								<li><a href="https://chicago.kiev.ua/en/panorama/">panorama</a></li>
								<li><a href="https://chicago.kiev.ua/en/news/">news</a></li>
							</ul>
						</div>

						 <div class="sitemap_item">
							<ul>
								<li><a href="https://chicago.kiev.ua/en/choice/">apartments in the residential CHICAGO Central House</a></li>
								<li><a href="https://chicago.kiev.ua/en/odnokomnatnaya-kvartira/">1-ROOM APARTMENTS</a></li>
								<li><a href="https://chicago.kiev.ua/en/dvuhkomnatnaya-kvartira/">2-ROOM APARTMENTS</a></li>
								<li><a href="https://chicago.kiev.ua/en/trehkomnatnaya-kvartira/">3-ROOM APARTMENTS</a></li>
								<li><a href="https://chicago.kiev.ua/en/dvuhurovnevaya-kvartira/">TWO-LEVEL APARTMENTS</a></li>
								<li><a href="https://chicago.kiev.ua/en/torgovie-pomescheniya/">COMMERCIAL PREMISES</a></li>
							</ul>
					    </div>

						<div class="sitemap_item">
							<ul>
								<li><a href="https://chicago.kiev.ua/en/kvartira-center/">APARTMENT IN THE CITY CENTRE</a></li>
								<li><a href="https://chicago.kiev.ua/en/parking/">CAR PARK NEXT TO THE HOUSING ESTATE “CHICAGO Central House”</a></li>
								<li><a href="https://chicago.kiev.ua/en/rassrochka/">PAY THE REAL ESTATE DEVELOPER IN INSTALMENTS</a></li>
								<li><a href="https://chicago.kiev.ua/en/svobodnaya-planirovka/">SHELL AND CORE APARTMENTS</a></li>
							</ul>
						</div>


    </div>

  </section>



	<?php include('../../includes/form_callback_en.php'); ?>

<?php include('../../includes/footer_en.php'); ?>

	<style media="screen">
	html, body{
		height: 100%;
	}
	.fifteenth .title {
		transform: none;
	}
	.third{
	padding-bottom: 130px;
	height: calc(100% - 276px);
		}
	.sitemap_item{
		width: 30%;
		float: left;
		text-align: center;
		margin-top: 40px;
	}
	.sitemap_item li a{
		color: white;
		text-transform: uppercase;
		font-size: 18px;
		line-height: 32px;
		transition: 0.25s;
		-webkit-transition: 0.25s;
	}
	.sitemap_item li a:hover{
		color:red;
	}
	footer .fb-foot{
		height: auto;
		margin-right: 40px;
	}
	footer {
		height: auto;
	}
	footer .wrapper {
		clear: both;
		overflow: hidden;
	}
	footer .copy {
		margin-right: 30px;
	}
	@media only screen and (max-width:1220px) {
		body {
			min-width: inherit;
		}
		.header {
			min-width: inherit;
		}
		.header .logo{
			margin-left: 10px;
			width: 210px;
		}
		.header-callback{
			margin-right: 10px;
		}
	}
	@media only screen and (max-width:1070px){
		.header .logo{
			margin-top: 30px;
			width: 120px;
		}
	}
	@media only screen and (min-width:860px) and (max-width:986px){
		.header .logo{
			display: none;
		}
	}
	@media only screen and (max-width:768px) {
		.fifteenth h1.title {
			font-size: 36px;
			margin-top: 0;
		}
		.sitemap_item{
			width: 100%;
			float: none;
		}
		.third {
			height: auto;
			min-width: 100%;
		}
		footer {
			height: auto;
			clear: both;
			overflow: hidden;
			line-height: 30px;

		}
		footer .copy {
			line-height: 22px;
			float: none;
			margin-right: 0;
		}
		footer span {
			display: block;
			text-align: center;
		}
	}
	</style>
	<script src="/js/scripts.js"></script>
    <script src="../../js/lib/snap.svg-min.js"></script>
    <script src="../../js/lib/slider.js"></script>
    <script src="../../js/jquery.fancybox.pack.js"></script>
    <script src="../../js/jquery.fancybox-thumbs.js"></script>
    <script src="../../js/lib/wow.min.js"></script>
		<script src="../../js/progres.js"></script>
    <!-- <script async defer
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCBqnmzNAzHojSwaOiHXbpTETnKMQgnsos&callback=initMap">
    </script> -->
	<!-- <script src="../../js/scripts.js"> -->
  <script>
       new ScrollMagic.Scene({triggerElement: ".trigger-0"})
      .setClassToggle(".header", "zipped").addTo(controller);
      var scene = new ScrollMagic.Scene({triggerElement: ".trigger-7", duration: 700})
      .setTween(".fifteenth .title", {transform: "translateX(-20%)"}).addTo(controller);

	</script>
</body>
</html>
