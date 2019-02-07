<?php include_once('../../includes/utm.php'); ?>
<!DOCTYPE html>
<html lang="ru">
<head>

	<link rel="alternate" hreflang="ru" href="https://chicago.kiev.ua/ru/sitemap/" />
	<link rel="alternate" hreflang="uk" href="https://chicago.kiev.ua/sitemap/" />
<?php /*	<link rel="alternate" hreflang="en" href="https://chicago.kiev.ua/en/sitemap/" />  */?>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<title>≡ ЖК Чикаго 》Карта сайта | CHICAGO Central House</title>
	<meta name="robots" content="index, follow">
  <link rel="canonical" href="<?php echo 'https://'.$_SERVER['SERVER_NAME'].$_SERVER["REQUEST_URI"];?>"/>
	<meta name="description" content="【Карта сайта】Важные страницы сайта chicago.kiev.ua ЖК CHICAGO Central House в центре... ✅【жилой комплекс Чикаго】 Адрес расположения: Киев, ул. Антоновича 44. Карта проезда... ✅【CHICAGO】 Успейте купить квартиру мечты!">
	<script  src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="/css/full.css">
	<link rel="stylesheet" href="/css/style.css">
	<link rel="stylesheet" href="/css/select.css">
  <?php /*Google Tag Manager*/ include_once('../../includes/gtm_head.php'); ?>
</head>

<body>
	<?php /*Google Tag Manager*/ include_once('../../includes/gtm_body.php'); ?>
	<?php /*Google Tag Manager*/ include_once('../../includes/header_ru.php'); ?>

	<section class="h1_wrapper">
        <h1 class="wow fadeInLeft">карта сайта</h1>
  </section>

  <section class="third light">
        <div class="lamps wrapper">
            <i></i><i></i><i></i>
        </div>
    <div class="wrapper">

						<div class="sitemap_item">
							<ul>
						<?php /*<li><a href="https://chicago.kiev.ua">будинок</a></li>*/ ?>
								<li><a href="https://chicago.kiev.ua/ru/progress/">ход строительства</a></li>
								<li><a href="https://chicago.kiev.ua/ru/panorama/">панорама</a></li>
								<li><a href="https://chicago.kiev.ua/ru/news/">новости</a></li>
							</ul>
						</div>

						 <div class="sitemap_item">
							<ul>
								<li><a href="https://chicago.kiev.ua/ru/choice/">квартиры у ЖК CHICAGO Central House</a></li>
								<li><a href="https://chicago.kiev.ua/ru/odnokomnatnaya-kvartira/">1-комнатные квартиры</a></li>
								<li><a href="https://chicago.kiev.ua/ru/dvuhkomnatnaya-kvartira/">2-комнатные квартиры</a></li>
								<li><a href="https://chicago.kiev.ua/ru/trehkomnatnaya-kvartira/">3-комнатные квартиры</a></li>
								<li><a href="https://chicago.kiev.ua/ru/dvuhurovnevaya-kvartira/">двухуровневые квартиры</a></li>
								<li><a href="https://chicago.kiev.ua/ru/torgovie-pomescheniya/">торговые помещения</a></li>
							</ul>
					    </div>

						<div class="sitemap_item">
							<ul>
								<li><a href="https://chicago.kiev.ua/ru/kvartira-center/">квартиры в центре</a></li>
								<li><a href="https://chicago.kiev.ua/ru/parking/">новостройка с подземным паркингом</a></li>
								<li><a href="https://chicago.kiev.ua/ru/rassrochka/">квартиры в рассрочку</a></li>
								<li><a href="https://chicago.kiev.ua/ru/svobodnaya-planirovka/">свободная планировка</a></li>
							</ul>
						</div>


    </div>

  </section>



	<?php include('../../includes/form_callback.php'); ?>
	<?php include('../../includes/footer_ru.php'); ?>

	<style media="screen">
	html, body{
		height: 100%;
		min-width: 0;
	}
	.third{
	padding-bottom: 130px;
	height: calc(100% - 276px);
		}
	.sitemap_item{
		width: 30%;
		float: left;
		text-align: center;
		margin-top: 120px;
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

	@media only screen and (max-width:768px) {
		.sitemap_item{
			width: 100%;
			float: none;
		}
		.third {
			height: auto;
			min-width: 100%;
		}

	}
	</style>
	<script src="/js/snapSliderFancy.js"></script>
	<script src="/js/scripts.js"></script>

</body>
</html>
