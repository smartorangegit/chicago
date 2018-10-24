<?php include_once('../includes/utm.php'); ?>
<!DOCTYPE html>
<html lang="uk">
<head>

	<link rel="alternate" hreflang="ru" href="https://chicago.kiev.ua/ru/news/" />
	<link rel="alternate" hreflang="uk" href="https://chicago.kiev.ua/news/" />
    <link rel="alternate" hreflang="en" href="https://chicago.kiev.ua/en/news/" />
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<title>≡ ЖК Чикаго 》Новини, акції, знижки | CHICAGO Central House</title>
	<meta name="robots" content="index, follow">
  <link rel="canonical" href="<?php echo 'https://'.$_SERVER['SERVER_NAME'].$_SERVER["REQUEST_URI"];?>"/>
	<meta name="description" content="【Новини, події, акції, знижки】 Найсвіжіша інформація про житловий комплекс CHICAGO Central House Київ - оголошення, графіки роботи відділу продажів, акції, знижки, цікаві події.... ✅ 【ЖК Чикаго】 Адреса розташування: Київ, вул. Антоновича 44 (Горького). Карта проїзду... ✅ 【CHICAGO】 Звертайтеся до відділу продажів - встигніть купити квартиру мрії!">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/normalize.css" />
  <link rel="stylesheet" href="../css/animate.css">
  <link rel="stylesheet" href="../css/slider-style.css">
  <link rel="stylesheet" href="../css/jquery.fancybox.css">
  <link rel="stylesheet" href="../css/jquery.fancybox-thumbs.css">
	<!--[if IE]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/progress.css">
	<link rel="stylesheet" href="../css/news.css">
  <script type="text/javascript" src="../js/lib/greensock/TweenMax.min.js"></script>
  <script src="../js/lib/scrollmagic/ScrollMagic.min.js"></script>
  <script type="text/javascript" src="../js/lib/scrollmagic/plugins/animation.gsap.js"></script>
  <script src="../js/lib/plugins/debug.addIndicators.min.js"></script>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <?php /*Google Tag Manager*/ include_once('../includes/gtm_head.php'); ?>
</head>

<body>
	<?php /*Google Tag Manager*/ include_once('../includes/gtm_body.php'); ?>
    <script>
        var controller = new ScrollMagic.Controller();
    </script>

	<?php /*Google Tag Manager*/ include_once('../includes/header_ua.php'); ?>
    <?php
    include ("../admin/bd.php");
    ?>

	<section class="fifteenth news" id="builder">
		<span class="trigger-7"></span>
        <h1 class="title" style="transform: translate3d (20px, 0, 0)">новини</h1>
        <i class="line"></i>
  </section>

  <section class="third light">
    <div class="wrapper">
			<span class="trigger-0"></span>
	<div class="clearfix">
        <?
        $sel = $DB->query("SELECT * FROM `news` WHERE `isActive`='0' ORDER BY `date` DESC ");
        $zi = 1;
        while ($myrow = mysqli_fetch_array($sel)){
            $dt = $myrow['date'];
            //russian_date($dt);
            $tm = $myrow['time'];
            $time = $date=explode(":",$tm);
            $cutTime = $time[0].':'.$time[1];
            $dateMon=explode("-",$dt);
            ?>
            <div class="img-item image-item--<?=$zi;?>" data-date="<?= $dt; ?>">
                <div class="img-name"><span><?=$myrow['name_news_ua'];?></span></div>
                <div class="img-date"><?russian_date($dt);?> року</div>
                <div class="img-info"><span><?=$myrow['min_text_ua'];?> ... </span></div>
                <a class="eye grouped_elements" rel="gal1" href="<?=$myrow['news_code'].'/';?>"><!--<img src="/img/prog-eye.png" alt="eye"/>--></a>
                <style>.image-item--<?=$zi;?>{background-image: url(<?=$myrow['img_path']."/min_".$myrow['img_name'];?>);}</style>
            </div>
			<style>
			.grouped_elements {width: 100%;top:0;height:100%;left: 0;background: url(/img/prog-eye.png) center center no-repeat}
			</style>
            <?
            $zi++;
        }
        function russian_date($dt){
            $date=explode("-",$dt);
            switch ($date[1]){
                case 1: $m='січня'; break;
                case 2: $m='лютого'; break;
                case 3: $m='березня'; break;
                case 4: $m='квітня'; break;
                case 5: $m='травня'; break;
                case 6: $m='червня'; break;
                case 7: $m='липня'; break;
                case 8: $m='серпня'; break;
                case 9: $m='вересня'; break;
                case 10: $m='жовтня'; break;
                case 11: $m='листопада'; break;
                case 12: $m='грудня'; break;
            }
            echo $date[2].'&nbsp;'.$m.'&nbsp;'.$date[0];
        }
        ?>

    </div>

			<div class="news_other">
				<div class="other_name">читати далі</div>
				<div class="other_news_item">
					<a href="/kvartira-center/">Квартира у центрі</a>
					<span class="other_news_date"></span>
				</div>
				<div class="other_news_item">
					<a href="/svobodnaya-planirovka/">Вільне планування квартир</a>
					<span class="other_news_date"></span>
				</div>
				<div class="other_news_item">
					<a href="/rassrochka/">Розстрочка від забудовника</a>
					<span class="other_news_date"></span>
				</div>
				<div class="other_news_item">
					<a href="/parking/">Паркінг у ЖК Chicago Central House</a>
					<span class="other_news_date"></span>
				</div>
				<div class="other_news_item">
					<a href="/torgovie-pomescheniya/">Торгові приміщення</a>
					<span class="other_news_date"></span>
				</div>
			</div>

    </div>

  </section>



	<?php include('../includes/form_callback.php'); ?>

<?php include('../includes/footer_ua.php'); ?>
	<script src="/js/scripts.js"></script>
    <script src="../js/lib/snap.svg-min.js"></script>
    <script src="../js/lib/slider.js"></script>
    <script src="../js/jquery.fancybox.pack.js"></script>
    <script src="../js/jquery.fancybox-thumbs.js"></script>
    <script src="../js/lib/wow.min.js"></script>
	<script src="../js/progres.js"></script>
</body>
</html>
