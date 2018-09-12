<?php include_once('../../includes/utm.php'); ?>
<!DOCTYPE html>
<html lang="ru">
<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<title>≡ ЖК Чикаго 》 Новости, акции, скидки | CHICAGO Central House</title>
<meta name="robots" content="index, follow">
<link rel="canonical" href="<?php echo 'https://'.$_SERVER['SERVER_NAME'].$_SERVER["REQUEST_URI"];?>"/>
	<meta name="description" content="【Новости, события, акции, скидки】 Самая свежая информация о жилом комплексе CHICAGO Central House Киев - объявления, графики работы отдела продаж, акции, скидки и.... ✅【ЖК Чикаго】 Адрес расположения: Киев, ул. Антоновича 44 (Горького). Карта проезда... ✅【CHICAGO】 Обращайтесь в отдел продаж - успейте купить квартиру мечты!">
	<link rel="alternate" hreflang="ru" href="https://chicago.kiev.ua/ru/news/" />
	<link rel="alternate" hreflang="uk" href="https://chicago.kiev.ua/news/" />
    <link rel="alternate" hreflang="en" href="https://chicago.kiev.ua/en/news/" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="/css/normalize.css" />
	<link rel="stylesheet" href="/css/animate.css">
	<link rel="stylesheet" href="/css/style.css">
	<link rel="stylesheet" href="/css/progress.css">
	<link rel="stylesheet" href="/css/news.css">

	<!--[if IE]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

  
  <?php /*Google Tag Manager*/ include_once('../../includes/gtm_head.php'); ?>
  		<meta property="og:title" content="≡ ЖК Чикаго 》 Новости, акции, скидки | CHICAGO Central House" />
		<meta property="og:description" content="【Новости, события, акции, скидки】 Самая свежая информация о жилом комплексе CHICAGO Central House Киев - объявления, графики работы отдела продаж, акции, скидки и.... ✅【ЖК Чикаго】 Адрес расположения: Киев, ул. Антоновича 44 (Горького). Карта проезда... ✅【CHICAGO】 Обращайтесь в отдел продаж - успейте купить квартиру мечты!" />
		<meta property="og:image" content="https://chicago.kiev.ua/img/new_render_s.jpg"/>
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
            <div class="img-item image-item--<?= $zi; ?> wow fadeIn" data-date="<?= $dt; ?>">
                <div class="img-name"><span><?= $myrow['name_news_ru']; ?></span></div>
                <div class="img-date"><? russian_date($dt); ?> года</div>
                <div class="img-info"><span><?= $myrow['min_text_ru']; ?></span></div>
                <a class="eye grouped_elements" rel="gal1" href="<?= $myrow['news_code'].'/'; ?>"><!--<img
                            src="/img/prog-eye.png" alt="eye"/>--></a>
                <style>.image-item--<?=$zi;?> {
                        background-image: url(<?=$myrow['img_path']."/min_".$myrow['img_name']."?v=1.0";?>);
                    }</style>
            </div>
			<style>
			.grouped_elements {width: 100%;top:0;height:100%;left: 0;background: url(/img/prog-eye.png) center center no-repeat}
			</style>
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
	<script src="/js/ScrollMagic.min.js"></script>
	<script src="/js/snapSliderFancy.js"></script>
	<script src="/js/scripts.js"></script>
	<script>
	var controller = new ScrollMagic.Controller();
	</script>
  <script src="/js/lib/wow.min.js"></script>
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
