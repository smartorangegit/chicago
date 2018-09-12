<?php include_once('../includes/utm.php'); ?>
<!DOCTYPE html>
<html lang="uk">
<head>
<!--666-->
	<?php
	require("../adm/includes/conn.php");
$sql = "select * from chika_img WHERE date='2017-02-14'";
$sql2 = "select * from chika_img WHERE date='2017-02-15'";
$result = mysql_query($sql) or die ("Нет соединения с базой данных: " . mysql_error());
$result2 = mysql_query($sql2) or die ("Нет соединения с базой данных: " . mysql_error());
 ?>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<title>≡ ЖК Чикаго 》Ukrainian Fashion Week - партнер ЖК CHICAGO Central House</title>
	<meta name="robots" content="index, follow">
    <link rel="canonical" href="<?php echo 'https://'.$_SERVER['SERVER_NAME'].$_SERVER["REQUEST_URI"];?>"/>
	<meta name="description" content="【ЖК CHICAGO Central House】 CHICAGO Central House - це житловий комплекс для людей, які звикли завжди перебувати у центрі подій. Тому ми є партнером Ukrainian Fashion Week">
	<link rel="alternate" hreflang="ru" href="https://chicago.kiev.ua/ru/fashion/" />
	<link rel="alternate" hreflang="uk" href="https://chicago.kiev.ua/fashion/" />
    <link rel="alternate" hreflang="en" href="https://chicago.kiev.ua/en/fashion/" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
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
<link rel="stylesheet" href="../css/progress.css?ver=1.1">
<script type="text/javascript" src="../js/lib/greensock/TweenMax.min.js"></script>
<script src="../js/lib/scrollmagic/ScrollMagic.min.js"></script>
<script type="text/javascript" src="../js/lib/scrollmagic/plugins/animation.gsap.js"></script>
<script src="../js/lib/plugins/debug.addIndicators.min.js"></script>

<?php /*Google Tag Manager*/ include_once('../includes/gtm_head.php'); ?>
		<meta property="og:title" content="≡ ЖК Чикаго 》Ukrainian Fashion Week - партнер ЖК CHICAGO Central House" />
		<meta property="og:description" content="【ЖК CHICAGO Central House】 CHICAGO Central House - це житловий комплекс для людей, які звикли завжди перебувати у центрі подій. Тому ми є партнером Ukrainian Fashion Week" />
		<meta property="og:image" content="https://chicago.kiev.ua/img/new_render_s.jpg"/>
</head>
<style media="screen">
		body {
			position: relative;
			height: 100%;
			padding-bottom: 100px;
		}
	.third .subheader, .fifth .subheader {
	   margin-left: 0px;
	}
	.light:before {
		background: none;
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
	column-count: 7;
	column-gap: 1em;
	-webkit-column-count: 7; -moz-column-count: 7; column-count: 7;
	-webkit-column-gap: 1em; -moz-column-gap: 1em; column-gap: 1em;
}
.item {
    display: inline-block;
    background: #1D2939;
    margin: 0 0 1em;
    width: 100%;
    box-sizing: border-box;
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
	}
	.masonry1 {
	column-count: 5;
	column-gap: 1em;
	-webkit-column-count: 5; -moz-column-count: 5; column-count: 5;
	-webkit-column-gap: 1em; -moz-column-gap: 1em; column-gap: 1em;
}
.item1 {
    display: inline-block;
    background: #1D2939;
    margin: 0 0 1em;
    width: 100%;
    box-sizing: border-box;
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
	}

.item a, .item1 a {
	display: block;
}
.item img, .item1 img {
	width: 100%;
	display: block;
}
</style>

<body>
	<?php /*Google Tag Manager*/ include_once('../includes/gtm_body.php'); ?>
	<!-- HelloPreload http://hello-site.ru/preloader/ -->
	<style type="text/css">#hellopreloader>p{display:none;}#hellopreloader_preload{display: block;position: fixed;z-index: 99999;top: 0;left: 0;width: 100%;height: 100%;min-width: 1000px;background: #000 url('/img/preload.svg') center center no-repeat;background-size:61px;} #helloprelosder svg{fill:red;}</style>
	<div id="hellopreloader"><div id="hellopreloader_preload"></div><p></p></div>
	<script type="text/javascript">var hellopreloader = document.getElementById("hellopreloader_preload");function fadeOutnojquery(el){el.style.opacity = 1;var interhellopreloader = setInterval(function(){el.style.opacity = el.style.opacity - 0.05;if (el.style.opacity <=0.05){ clearInterval(interhellopreloader);hellopreloader.style.display = "none";}},16);}window.onload = function(){setTimeout(function(){fadeOutnojquery(hellopreloader);},1000);};</script>
	<!-- HelloPreload http://hello-site.ru/preloader/ -->

    <script>
        var controller = new ScrollMagic.Controller();
				// $("a.fancybox").fancybox();
    </script>

		<?php /*меню*/ include_once('../includes/header_ua.php'); ?>

	<section class="fifteenth progress-grid" id="builder">
		<span class="trigger-7"></span>
        <h1 class="title fash" style="transform: translate3d(-7.6025px, 43px, 16px);">Ukrainian Fashion Week</h1>
        <i class="line"></i>
  </section>

  <section class="third light">
    <div class="wrapper">
			<span class="trigger-0"></span>
      <h2 class="subheader">
        <p><span>“CHICAGO Central House” як витвір мистецтва</span>
      </h2>
			<p>
				<span class="normal normal--2">“CHICAGO Central House” втілює у собі нову для України концепцію – будинок як витвір мистецтва. Саме тому ми обрали партнерство із Ukrainian Fashion Week – щоб обмінюватися ідеями із тими, хто формує тренди та створює неповторний стиль життя. Люди, які звикли завжди перебувати у центрі подій – саме для них ми будуємо цей житловий простір.
					У цьому амбіційному концепті поєдналися яскрава чиказька архітектура, комфорт світового рівня, якість та всі переваги життя у центрі столиці. Шукайте себе на світлинах з події Ukrainian Fashion Week нижче!</span></p>
    </div>
  </section>

	<section class="building">
		<div class="wrapper">
			<div class="masonry">
					<?
							while ($row = mysql_fetch_assoc($result))
					                { $url="/adm/images/".$row['date']."/min/".$row['name'];
					?>
					 <div class="item">
						 <a class="grouped_elements" rel="fashion" href="<? echo'../adm/images/'.$row['date'].'/'.$row['name'];?>">
					<? echo '<img class="b-lazy" data-src="'.$url.'"  src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" >';
					?>
						 </a>
					 </div>
					 	<?}?>
			</div>

			<div class="masonry1">
				<?
		while ($row2 = mysql_fetch_assoc($result2))
                {

?>
 <div class="item1"><a class="grouped_elements" rel="fashion" href="<? echo'/adm/images/'.$row2['date'].'/'.$row2['name'];?>"><? echo "<img src=\"../adm/images/".$row2['date']."/min/".$row2['name']."\">";?></a></div>
<?}?>

			</div>
	</div>
	</section>

	<?php include('../includes/form_callback.php'); ?>

<?php include('../includes/footer_ua.php'); ?>

    <script src="../js/lib/snap.svg-min.js"></script>
    <script src="../js/lib/slider.js"></script>
    <script src="../js/jquery.fancybox.pack.js"></script>
    <script src="../js/jquery.fancybox-thumbs.js"></script>
    <script src="../js/lib/wow.min.js"></script>
		<script src="../js/progres.js"></script>
		<script src="../js/scripts.js"></script>

		<script src="/js/blazy.js"></script>
			<script> var bLazy = new Blazy({   });</script>

<script type="text/javascript">
      new ScrollMagic.Scene({triggerElement: ".trigger-0"})
      .setClassToggle(".header", "zipped").addTo(controller);
      var scene = new ScrollMagic.Scene({triggerElement: ".trigger-7", duration: 300})
      .setTween(".fifteenth i.line", {transform: "translateX(0)"}).addTo(controller);
			var scene = new ScrollMagic.Scene({triggerElement: ".lamps", duration: 300})
      .setTween(".lamps img", {opacity: "1"}).addTo(controller);
</script>
</body>
</html>
