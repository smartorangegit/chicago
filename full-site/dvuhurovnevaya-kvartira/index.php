<?php include_once('../includes/utm.php');
include('../db.php');
$check = mysql_query("SELECT * FROM kvartity where floor = '23-24'" ,$db);
$myrow = mysql_fetch_array ($check);
?>

<!DOCTYPE html>
<html lang="uk">
<head>
	
	<link rel="alternate" hreflang="ru" href="https://chicago.kiev.ua/ru/dvuhurovnevaya-kvartira/" />
	<link rel="alternate" hreflang="uk" href="https://chicago.kiev.ua/dvuhurovnevaya-kvartira/" />
    <link rel="alternate" hreflang="en" href="https://chicago.kiev.ua/en/dvuhurovnevaya-kvartira/" />
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<title>≡ 2 рівневі квартири в ЖК Чикаго 》Купити дворівневу квартиру в CHICAGO Central House</title>
	<meta name="robots" content="index, follow">
  <link rel="canonical" href="<?php echo 'https://'.$_SERVER['SERVER_NAME'].$_SERVER["REQUEST_URI"];?>"/>
	<meta name="description" content="【Дворівневі квартири в CHICAGO Central House в самому центрі Києва】 Продаж 2-рівневих квартир бізнес класу в житловому комплексі Чикаго Централ Хаус. Ціна квадратного метра... ✅ 【ЖК CHICAGO Central House】 Адреса розташування: вул. Володимира Антоновича, 44... ✅ 【CHICAGO】 Встигніть купити квартиру мрії!">
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
	<link rel="stylesheet" href="../css/select.css">
  <script type="text/javascript" src="../js/lib/greensock/TweenMax.min.js"></script>
  <script src="../js/lib/scrollmagic/ScrollMagic.min.js"></script>
  <script type="text/javascript" src="../js/lib/scrollmagic/plugins/animation.gsap.js"></script>
  <script src="../js/lib/plugins/debug.addIndicators.min.js"></script>
  
  <?php /*Google Tag Manager*/ include_once('../includes/gtm_head.php'); ?>
  		<meta property="og:title" content="≡ 2 рівневі квартири в ЖК Чикаго 》Купити дворівневу квартиру в CHICAGO Central House" />
		<meta property="og:description" content="【Дворівневі квартири в CHICAGO Central House в самому центрі Києва】 Продаж 2-рівневих квартир бізнес класу в житловому комплексі Чикаго Централ Хаус. Ціна квадратного метра... ✅ 【ЖК CHICAGO Central House】 Адреса розташування: вул. Володимира Антоновича, 44... ✅ 【CHICAGO】 Встигніть купити квартиру мрії!" />
		<meta property="og:image" content="https://chicago.kiev.ua/img/new_render_s.jpg"/>
</head>

<body>
	<?php /*Google Tag Manager*/ include_once('../includes/gtm_body.php'); ?>
    <script>
        var controller = new ScrollMagic.Controller();
    </script>

	<?php /*Google Tag Manager*/ include_once('../includes/header_ua.php'); ?>

	<section class="fifteenth">
		<span class="trigger-7"></span>

		<h1 class="title">Дворівневі квартири в <br> ЖК CHICAGO Central House</h1>
        <i class="line"></i>
  </section>

  <section class="third light section_select">
        <div class="lamps wrapper">
            <img src="../img/icons/lamp.png" alt="lamp" />
						<img src="../img/icons/lamp.png" alt="lamp" />
						<img src="../img/icons/lamp.png" alt="lamp" />
        </div>
    <div class="wrapper">
			<span class="trigger-0"></span>

			<div class="select-info">
				<p>
					Дворівневі квартири в міських будинках стають все популярнішими. І не випадково: проживання на двох рівнях приносить масу задоволення, а власник такого житла підкреслює свій статус і вишуканий смак. На сучасному ринку дворівневі квартири представлені як в елітному сегменті, так і в бізнес-класі, зокрема, у ЖК CHICAGO Central House.
				</p>
			</div>
			<div class="select_tabs">
				<ul>
					<li><a id="tab1" href="/odnokomnatnaya-kvartira/">1-кімнатні квартири</a></li>
					<li><a  id="tab2" href="/dvuhkomnatnaya-kvartira/">2-кімнатні квартири</a></li>
					<li><a id="tab3" href="/trehkomnatnaya-kvartira/">3-кімнатні квартири</a></li>
					<li><a class="active" id="tab4" href="/dvuhurovnevaya-kvartira/">двoрівневі квартири</a></li>
					<!-- <li><a id="tab5" href="#">торгові приміщення</a></li> -->
				</ul>
			</div>
			<div id="content" class="select_table">
				<table>
				   <!-- <caption>Таблица</caption> -->
				   <thead>

				   <tr>
				    <th class="content_subname">поверх</th>
				    <th class="content_subname">кімнат</th>
				    <th class="content_subname">загальна площа</th>
				   </tr>
				 </thead>
				 <tbody>
				     <?php


       	do {
			printf ( "<tr data-href='/appart/?type=%s' data-img='../img/choice/app/%s'>
				       <td>%s</td>      <td>%s</td>       <td>%s
				         <div class='box-img'>
				           <img src='' alt=''>
				         </div>

				     </td></tr>", $myrow['character_code'], $myrow['imgPlan1'], $myrow['floor'], $myrow['rooms'], $myrow['square']);
		}
while ($myrow = mysql_fetch_array ($check));
?>

				     
				 </tbody>



				  </table>
<div class="select-info">
<h2>Переваги 2-рівневих квартир в ЖК CHICAGO Central House</h2>
<p>Перерахуємо основні переваги 2рівневої квартири в житловому комплексі CHICAGO Central House.</p>
<ul>
 <li> Звичайно, першою та найважливішою перевагою дворівневої квартири є її велика площа;</li>
 <li> Дворівневі квартири легко зонуються, а приміщення розподілені за функціональним призначенням. На першому поверсі розташовуються вітальня, кухня, передпокій, а на другому знаходяться кімнати відпочинку, спальні й ванні кімнати. Особливістю дворівневих квартир ЖК CHICAGO Central House є їхні вільні планування, що дають змогу самостійно розподілити простір на зони й приміщення. </li>
 <li> Така нерухомість відрізняється великим об&prime;ємом відкритого простору. Цей ефект подвоюють панорамні вікна, які завдяки відсутності стель створюють приємне та м&prime;яке друге освітлення.</li>
 <li> Незмінним атрибутом 2-рівневої квартири є сходи, що додають простору вишуканості й підсилюють атмосферу життя в приватному будинку.</li>
</ul>
<h2>Чому варто купити дворівневу квартиру в ЖК CHICAGO Central House</h2>
<p>2-рівневу квартиру, яка займає в будівлі комплексу два останніх поверхи, можна порівняти з приватним будинком. Тут усе величне, комфортне й дуже просторе. Два рівня й вільне планування житла дають можливість облаштувати квартиру з урахуванням всіх ваших потреб.</p>
<p>Дворівневі квартири в ЖК CHICAGO Central House &minus; це чудові краєвиди: з 24-го поверху відкриваються видовищні панорами центру Києва. Крім того, вартість такого житла завжди залишатиметься високою. </p>
<p>Така нерухомість ідеально підійде для тих, хто зацікавлений в придбанні статусного житла і прагне додати до свого життя різноманіття. Якщо це ви, то ЖК CHICAGO Central House чекає на вас. Не втрачайте шанс стати власником квартири «під небом» у центрі Києва вже сьогодні.</p>
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
<?php include('../includes/form_main_ua.php'); ?>


	<?php include('../includes/form_callback.php'); ?>

<?php include('../includes/footer_ua.php'); ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
	<script src="/js/scripts.js"></script>
    <script src="../js/lib/snap.svg-min.js"></script>
    <script src="../js/lib/slider.js"></script>
    <script src="../js/jquery.fancybox.pack.js"></script>
    <script src="../js/jquery.fancybox-thumbs.js"></script>
    <script src="../js/lib/wow.min.js"></script>
		<script src="../js/progres.js"></script>
    <!-- <script async defer
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCBqnmzNAzHojSwaOiHXbpTETnKMQgnsos&callback=initMap">
    </script> -->
	<!-- <script src="../js/scripts.js"> -->
  <script>
       new ScrollMagic.Scene({triggerElement: ".trigger-0"})
      .setClassToggle(".header", "zipped").addTo(controller);
      var scene = new ScrollMagic.Scene({triggerElement: ".trigger-7", duration: 700})
      .setTween(".fifteenth .title", {transform: "translateX(-20%)"}).addTo(controller);

	</script>
</body>
</html>
