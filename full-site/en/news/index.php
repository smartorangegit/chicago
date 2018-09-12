<?php include_once('../../includes/utm.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php /*Google Tag Manager*/ include_once('../../includes/gtm_head.php'); ?>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<title>≡ CHICAGO Central House 》News</title>
<meta name="robots" content="index, follow">
<link rel="canonical" href="<?php echo 'https://'.$_SERVER['SERVER_NAME'].$_SERVER["REQUEST_URI"];?>"/>
	<meta name="description" content="【News, events, promotions, discounts】 The latest information about the residential complex CHICAGO Central House Kiev - announcements, sales schedules, promotions, discounts ✅ 【CHICAGO】 Contact the sales team - you can buy a dream apartment!">
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

  
  		<meta property="og:title" content="≡ CHICAGO Central House 》News" />
		<meta property="og:description" content="【News, events, promotions, discounts】 The latest information about the residential complex CHICAGO Central House Kiev - announcements, sales schedules, promotions, discounts ✅ 【CHICAGO】 Contact the sales team - you can buy a dream apartment!" />
		<meta property="og:image" content="https://chicago.kiev.ua/img/new_render_s.jpg"/>
  
</head>

<body>
	<?php /*Google Tag Manager*/ include_once('../../includes/gtm_body.php'); ?>
    <script>
        var controller = new ScrollMagic.Controller();
    </script>

	<?php /*Google Tag Manager*/ include_once('../../includes/header_en.php'); ?>

	<section class="fifteenth news" id="builder">
		<span class="trigger-7"></span>
        <h1 class="title" style="transform: translate3d (20px, 0, 0)">The news</h1>
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
        if (!empty($myrow['name_news_en'])) {
            $dt = $myrow['date'];
            //russian_date($dt);
            $tm = $myrow['time'];
            $time = $date = explode(":", $tm);
            $cutTime = $time[0] . ':' . $time[1];
            $dateMon = explode("-", $dt);
            ?>
            <div class="img-item image-item--<?= $zi; ?> wow fadeIn" data-date="<?= $dt; ?>">
                <div class="img-name"><span><?= $myrow['name_news_en']; ?></span></div>
                <div class="img-date"><? russian_date($dt); ?> year</div>
                <div class="img-info"><span><?= $myrow['min_text_en']; ?></span></div>
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
            case 1: $m='January'; break;
            case 2: $m='February'; break;
            case 3: $m='March'; break;
            case 4: $m='April'; break;
            case 5: $m='May'; break;
            case 6: $m='June'; break;
            case 7: $m='July'; break;
            case 8: $m='August'; break;
            case 9: $m='September'; break;
            case 10: $m='October'; break;
            case 11: $m='November'; break;
            case 12: $m='December'; break;
        }
        echo $date[2].'&nbsp;'.$m.'&nbsp;'.$date[0];
    }
    ?>
  </div>
	<div class="news_other">
				<div class="other_name">read more</div>
				<div class="other_news_item">
					<a href="/en/kvartira-center/">APARTMENT IN THE CITY CENTRE</a>
					<span class="other_news_date"></span>
				</div>
				<div class="other_news_item">
					<a href="/en/svobodnaya-planirovka/">SHELL AND CORE APARTMENTS</a>
					<span class="other_news_date"></span>
				</div>
				<div class="other_news_item">
					<a href="/en/rassrochka/">PAY THE REAL ESTATE DEVELOPER IN INSTALMENTS</a>
					<span class="other_news_date"></span>
				</div>
				<div class="other_news_item">
					<a href="/en/parking/">CAR PARK NEXT TO THE HOUSING ESTATE “CHICAGO CENTRAL HOUSE”</a>
					<span class="other_news_date"></span>
				</div>
				 <div class="other_news_item">
					<a href="/en/torgovie-pomescheniya/">RETAIL SPACE </a>
					<span class="other_news_date"></span>
				</div>
	</div>

    </div>

  </section>



	<?php include('../../includes/form_callback_en.php'); ?>

<?php include('../../includes/footer_en.php'); ?>
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
