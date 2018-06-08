<!DOCTYPE html>
<html lang="ru">
<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<title>Новости, события, акции | Chicago Central House</title>
<meta name="robots" content="index, follow">
<link rel="canonical" href="<?php echo 'https://'.$_SERVER['SERVER_NAME'].$_SERVER["REQUEST_URI"];?>"/>
	<meta name="description" content="Новости сайта ЖК Chicago Central House">
	<link rel="alternate" hreflang="ru" href="https://chicago.kiev.ua/ru/news/" />
	<link rel="alternate" hreflang="uk" href="https://chicago.kiev.ua/news/" />
    <link rel="alternate" hreflang="en" href="https://chicago.kiev.ua/en/news/" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="/css/normalize.css" />
	<link rel="stylesheet" href="/css/animate.css">
  <link rel="stylesheet" href="/css/slider-style.css">
  <link rel="stylesheet" href="/css/jquery.fancybox.css">
  <link rel="stylesheet" href="/css/jquery.fancybox-thumbs.css">
	<!--[if IE]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<link rel="stylesheet" href="/css/style.css">
  <link rel="stylesheet" href="/css/progress.css">
	<link rel="stylesheet" href="/css/news.css">
  <script type="text/javascript" src="/js/lib/greensock/TweenMax.min.js"></script>
  <script src="/js/lib/scrollmagic/ScrollMagic.min.js"></script>
  <script type="text/javascript" src="/js/lib/scrollmagic/plugins/animation.gsap.js"></script>
  <script src="/js/lib/plugins/debug.addIndicators.min.js"></script>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <?php /*Google Tag Manager*/ include_once('../../includes/gtm_head.php'); ?>
</head>

<body>
	<?php /*Google Tag Manager*/ include_once('../../includes/gtm_body.php'); ?>
    <script>
        var controller = new ScrollMagic.Controller();
    </script>

	<?php /*Google Tag Manager*/ include_once('../../includes/header_ru.php'); ?>

	<section class="fifteenth news" id="builder">
		<span class="trigger-7"></span>
        <h1 class="title" style="transform: translate3d (20px, 0, 0)">новости</h1>
        <i class="line"></i>
  </section>
    <?php
    include ("../../admin/bd.php");
    ?>
  <section class="third light">
        <div class="lamps wrapper">
            <img src="/img/icons/lamp.png" alt="lamp" />
						<img src="/img/icons/lamp.png" alt="lamp" />
						<img src="/img/icons/lamp.png" alt="lamp" />
        </div>
    <div class="wrapper">
	<span class="trigger-0"></span>
<div class="clearfix">
    <?
    $sel = $DB->query("SELECT * FROM `news` WHERE `isActive`='0' ORDER BY `date` DESC ");
    $zi = 1;
    while ($myrow = mysqli_fetch_array($sel)) {
        if (!empty($myrow['name_news_ru'])) {
            $dt = $myrow['date'];
            //russian_date($dt);
            $tm = $myrow['time'];
            $time = $date = explode(":", $tm);
            $cutTime = $time[0] . ':' . $time[1];
            $dateMon = explode("-", $dt);
            ?>
            <div class="img-item image-item--<?= $zi; ?>" data-date="<?= $dt; ?>">
                <div class="img-name"><span><?= $myrow['name_news_ru']; ?></span></div>
                <div class="img-date"><? russian_date($dt); ?> года</div>
                <div class="img-info"><span><?= $myrow['min_text_ru']; ?> ... </span></div>
                <a class="eye grouped_elements" rel="gal1" href="<?= $myrow['news_code'].'/'; ?>"><img
                            src="/img/prog-eye.png" alt="eye"/></a>
                <style>.image-item--<?=$zi;?> {
                        background: url(<?=$myrow['img_path']."/".$myrow['img_name'];?>);
                    }</style>
            </div>
            <?
            $zi++;
        }
    }
    function russian_date($dt){
        $date=explode("-",$dt);
        switch ($date[1]){
            case 1: $m='января'; break;
            case 2: $m='февраля'; break;
            case 3: $m='марта'; break;
            case 4: $m='апреля'; break;
            case 5: $m='мая'; break;
            case 6: $m='июня'; break;
            case 7: $m='июля'; break;
            case 8: $m='августа'; break;
            case 9: $m='сентября'; break;
            case 10: $m='октября'; break;
            case 11: $m='ноября'; break;
            case 12: $m='декабря'; break;
        }
        echo $date[2].'&nbsp;'.$m.'&nbsp;'.$date[0];
    }
    ?>

</div>
	<div class="news_other">
				<div class="other_name">читать далее</div>
				<div class="other_news_item">
					<a href="/ru/kvartira-center/">Квартира в центре</a>
					<span class="other_news_date"></span>
				</div>
				<div class="other_news_item">
					<a href="/ru/svobodnaya-planirovka/">Свободная планировка квартир</a>
					<span class="other_news_date"></span>
				</div>
				<div class="other_news_item">
					<a href="/ru/rassrochka/">Рассрочка от застройщика</a>
					<span class="other_news_date"></span>
				</div>
				<div class="other_news_item">
					<a href="/ru/parking/">Паркинг у ЖК Chicago Central House</a>
					<span class="other_news_date"></span>
				</div>
				 <div class="other_news_item">
					<a href="/ru/torgovie-pomescheniya/">торговые помещения</a>
					<span class="other_news_date"></span>
				</div>
	</div>

    </div>

  </section>



	<?php include('../../includes/form_callback_ru.php'); ?>

<?php include('../../includes/footer_ru.php'); ?>
	<script src="/js/scripts.js"></script>
    <script src="/js/lib/snap.svg-min.js"></script>
    <script src="/js/lib/slider.js"></script>
    <script src="/js/jquery.fancybox.pack.js"></script>
    <script src="/js/jquery.fancybox-thumbs.js"></script>
    <script src="/js/lib/wow.min.js"></script>
		<script src="/js/progres.js"></script>
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


	</script>
</body>
</html>
