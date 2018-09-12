<?php include_once('../../includes/utm.php');
include('../../db.php');
$check = mysql_query("SELECT * FROM kvartity where character_code RLIKE '^2'" ,$db);
$myrow = mysql_fetch_array ($check);
?>

<!DOCTYPE html>
<html lang="ru">
<head>
	
	<link rel="alternate" hreflang="ru" href="https://chicago.kiev.ua/ru/dvuhkomnatnaya-kvartira/" />
	<link rel="alternate" hreflang="uk" href="https://chicago.kiev.ua/dvuhkomnatnaya-kvartira/" />
    <link rel="alternate" hreflang="en" href="https://chicago.kiev.ua/en/dvuhkomnatnaya-kvartira/" />
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width">
<title>≡ 2 комнатные квартиры в ЖК Чикаго 》Купить двухкомнатную квартиру в CHICAGO Central House</title>
<meta name="robots" content="index, follow">
<link rel="canonical" href="<?php echo 'https://'.$_SERVER['SERVER_NAME'].$_SERVER["REQUEST_URI"];?>"/>
<meta name="description" content="【Двухкомнатные квартиры в CHICAGO Central House в самом центре Киева】Продажа 2-комнатных квартир бизнес класса в жилом комплексе Чикаго Централ Хаус. Цена кв. метра.. ✅【ЖК CHICAGO Central House】 ул. Владимира Антоновича (Горького), 44. Расположение... ✅【CHICAGO】 Успейте купить квартиру мечты!">
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
<!-- <link rel="stylesheet" href="../../css/progress.css">
<link rel="stylesheet" href="../../css/news.css"> -->
<link rel="stylesheet" href="../../css/select.css">
<script type="text/javascript" src="../../js/lib/greensock/TweenMax.min.js"></script>
<script src="../../js/lib/scrollmagic/ScrollMagic.min.js"></script>
<script type="text/javascript" src="../../js/lib/scrollmagic/plugins/animation.gsap.js"></script>
<script src="../../js/lib/plugins/debug.addIndicators.min.js"></script>

<?php /*Google Tag Manager*/ include_once('../../includes/gtm_head.php'); ?>
		<meta property="og:title" content="≡ 2 комнатные квартиры в ЖК Чикаго 》Купить двухкомнатную квартиру в CHICAGO Central House" />
		<meta property="og:description" content="【Двухкомнатные квартиры в CHICAGO Central House в самом центре Киева】Продажа 2-комнатных квартир бизнес класса в жилом комплексе Чикаго Централ Хаус. Цена кв. метра.. ✅【ЖК CHICAGO Central House】 ул. Владимира Антоновича (Горького), 44. Расположение... ✅【CHICAGO】 Успейте купить квартиру мечты!" />
		<meta property="og:image" content="https://chicago.kiev.ua/img/new_render_s.jpg"/>
</head>

<body>
	<?php /*Google Tag Manager*/ include_once('../../includes/gtm_body.php'); ?>
    <script>
        var controller = new ScrollMagic.Controller();
    </script>

	<?php /*Google Tag Manager*/ include_once('../../includes/header_ru.php'); ?>

	<section class="fifteenth">
		<span class="trigger-7"></span>
        <h1 class="title">Двухкомнатные квартиры в <br>ЖК CHICAGO Central House</h1>
  </section>

  <section class="third light section_select">
    <div class="wrapper">
			<span class="trigger-0"></span>
			<div class="select-info">
				<p>
					2-комнатные квартиры сегодня не менее популярны, чем 1-комнатные. Все дело в площади и планировке такого жилья, которое является оптимальным вариантом для пары или семьи с детьми.
				</p>
			</div>
			<div class="select_tabs">
				<ul>
					<li><a id="tab1" href="/ru/odnokomnatnaya-kvartira/">1-комнатные квартиры</a></li>
					<li><a class="active" id="tab2" href="/ru/dvuhkomnatnaya-kvartira/">2-комнатные квартиры</a></li>
					<li><a id="tab3" href="/ru/trehkomnatnaya-kvartira/">3-комнатные квартиры</a></li>
					<li><a id="tab4" href="/ru/dvuhurovnevaya-kvartira/">двухуровневые квартиры</a></li>
					<!-- <li><a id="tab5" href="#">торговые помещения</a></li> -->
				</ul>
			</div>
			<div id="content" class="select_table">
				<table>
			   <thead>
				   <tr>
				    <th class="content_subname">этаж</th>
				    <th class="content_subname">жилая площадь</th>
				    <th class="content_subname">общая площадь</th>
				   </tr>
				 </thead>
				 <tbody>
	<?php
	    do {
				printf ( "<tr data-href='/ru/appart/?type=%s' data-img='../../img/choice/app/%s'>
					       <td>%s</td>      <td>%s</td>       <td>%s
					         <div class='box-img'>
					           <img src='' alt=''>
					         </div>

					     </td></tr>", $myrow['character_code'], $myrow['imgPlan1'], $myrow['floor'], $myrow['houseroom'], $myrow['square']);
			}
			while ($myrow = mysql_fetch_array ($check));
		?>
				 </tbody>
			  </table>

				<div class="select-info">
				<h2>Достоинства 2-комнатных квартир в ЖК CHICAGO Central House</h2>
				<p>ЖК CHICAGO Central House предлагает купить 2-к квартиру в Киеве. Она обладает несомненными преимуществами перед однокомнатной недвижимостью. </p>
				<ul>
				 <li>Прежде всего, это универсальное жилье. Оно подойдет как одному человеку, так и паре с более, чем одним ребенком. </li>
				 <li>На 2-комнатную квартиру всегда найдется покупатель и прибыль от ее продажи может быть очень неплохой. </li>
				 <li>2-комнатные квартиры жилого комплекса имеют свободную планировку, что позволит вам создать жилье мечты. Вы также можете выбрать планировку из предложенных нами. </li>
				</ul>
				<h2>Почему стоит купить двухкомнатную квартиру в ЖК CHICAGO Central House</h2>
				<p>Площадь 2-к квартир в ЖК CHICAGO Central House стартует с 63 м2. Ощущение пространства усиливают панорамные окна, которые улучшают освещение. </p>
				<p>Превосходно подойдет 2-комнатная квартира молодоженам и небольшим семьям. Такое жилье станет райским уголком для спокойной и счастливой жизни. К тому же, в комплексе превосходная звукоизоляция благодаря использованию высококачественных материалов. </p>
				<p>Если вы ищете лучшее жилье в Киеве &minus; смело выбирайте ЖК CHICAGO Central House. Квартира здесь станет вашей крепостью, творческим пространством, местом для отдыха, приятных встреч и счастливой семейной жизни. Звоните нам прямо сейчас и записывайтесь на экскурсию в удобный для вас день.</p>
				</div>
				  <script type="text/javascript">
				    $('tbody tr[data-href]').addClass('clickable').click( function() {
				      window.location = $(this).attr('data-href');
				    });

				    $('tbody tr').mouseenter(function(){
				      $(this).find('.box-img').fadeIn(100);
				      $(this).find('.box-img img').attr('src', $(this).attr('data-img'));
				      })

				    $('tbody tr').mouseleave(function(){
				      $(this).find('.box-img').fadeOut(100);
				    })
				  </script>
			</div>
    </div>
  </section>
<?php include('../../includes/form_main_ru.php'); ?>
	<?php include('../../includes/form_callback.php'); ?>

<?php include('../../includes/footer_ru.php'); ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
	<script src="/js/scripts.js"></script>
    <script src="../../js/lib/snap.svg-min.js"></script>
    <script src="../../js/lib/slider.js"></script>
    <script src="../../js/jquery.fancybox.pack.js"></script>
    <script src="../../js/jquery.fancybox-thumbs.js"></script>
    <script src="../../js/lib/wow.min.js"></script>
		<script src="../../js/progres.js"></script>
    <!-- <script src="../../js/scripts.js"> -->
  </body>
</html>
