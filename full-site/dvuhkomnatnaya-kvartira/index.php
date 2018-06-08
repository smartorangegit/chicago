<?php
include('../db.php');
$check = mysql_query("SELECT * FROM kvartity where character_code RLIKE '^2'" ,$db);
$myrow = mysql_fetch_array ($check);
?>
<!DOCTYPE html>
<html lang="uk">
<head>
	
	<link rel="alternate" hreflang="ru" href="https://chicago.kiev.ua/ru/dvuhkomnatnaya-kvartira/" />
	<link rel="alternate" hreflang="uk" href="https://chicago.kiev.ua/dvuhkomnatnaya-kvartira/" />
    <link rel="alternate" hreflang="en" href="https://chicago.kiev.ua/en/dvuhkomnatnaya-kvartira/" />
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<title>Купити двокімнатну квартиру в ЖК CHICAGO Central House</title>
	<meta name="robots" content="index, follow">
  <link rel="canonical" href="<?php echo 'https://'.$_SERVER['SERVER_NAME'].$_SERVER["REQUEST_URI"];?>"/>
	<meta name="description" content="2-кімнатні квартири з вільним плануванням в житловому комплексі CHICAGO Central House">
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
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <?php /*Google Tag Manager*/ include_once('../includes/gtm_head.php'); ?>
</head>

<body>
	<?php /*Google Tag Manager*/ include_once('../includes/gtm_body.php'); ?>
    <script>
        var controller = new ScrollMagic.Controller();
    </script>

	<?php /*Google Tag Manager*/ include_once('../includes/header_ua.php'); ?>

	<section class="fifteenth">
		<span class="trigger-7"></span>
        <h1 class="title">Двокімнатні квартири в <br>ЖК CHICAGO Central House</h1>
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

			<div class="select-info">2-кімнатні квартири нині не менш популярні, ніж 1-кімнатні. Чимала площа та гарне планування такого житла є оптимальним варіантом для пари або сім&prime;ї з дітьми.
			</div>
			<div class="select_tabs">
				<ul>
					<li><a id="tab1" href="/odnokomnatnaya-kvartira/">1-кімнатні квартири</a></li>
					<li><a class="active" id="tab2" href="/dvuhkomnatnaya-kvartira/">2-кімнатні квартири</a></li>
					<li><a id="tab3" href="/trehkomnatnaya-kvartira/">3-кімнатні квартири</a></li>
					<li><a id="tab4" href="/dvuhurovnevaya-kvartira/">дворівневі квартири</a></li>
					<!-- <li><a id="tab5" href="#">торгові приміщення</a></li> -->
				</ul>
			</div>
			<div id="content" class="select_table">
				<table>
				   <!-- <caption>Таблица</caption> -->
				   <thead>

				   <tr>
				    <th class="content_subname">поверх</th>
				    <th class="content_subname">житлова площа</th>
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

				     </td></tr>", $myrow['character_code'], $myrow['imgPlan1'], $myrow['floor'], $myrow['houseroom'], $myrow['square']);
		}
while ($myrow = mysql_fetch_array ($check));
?>
				 </tbody>



				  </table>
<div class="select-info">
<h2>Переваги 2-кімнатних квартир в ЖК CHICAGO Central House</h2>
<p>ЖК CHICAGO Central House пропонує купити 2-к квартиру в Києві. Вона має суттєві переваги перед однокімнатною нерухомістю.</p>
<ul>
<li> Перш за все, це універсальне житло. Воно підійде як одній людині, так і пари, що має більше однієї дитини.</li>
<li> На 2-кімнатну квартиру завжди знайдеться покупець і прибуток з її продажу буде суттєвий. </li>
<li>2-кімнатні квартири житлового комплексу мають вільні планування, що дасть вам змогу створити житло своєї мрії. Ви також можете обрати будь-який варіант планування, який ми запропонуємо.</li>

</ul>
<h2>Чому варто купити двокімнатну квартиру в ЖК CHICAGO Central House</h2>
<p>
Площа 2-к квартир в ЖК CHICAGO Central House стартує з 63 м2. Відчуття простору посилюють панорамні вікна, які покращують освітлення.
</p>
<p>Чудово підійде 2-кімнатна квартира молодятам та невеликим сім’ям. Таке житло стане райським куточком для спокійного й щасливого життя. До того ж у житловому комплексі чудова звукоізоляція завдяки використанню високоякісних матеріалів.</p>
<p>Якщо ви шукаєте краще житло в Києві, сміливо обирайте ЖК CHICAGO Central House. Квартира тут стане вашою фортецею, творчим простором, а також місцем для відпочинку, приємних зустрічей і щасливого сімейного життя. Телефонуйте нам зараз, щоб отримати консультацію наших менеджерів і записатися на екскурсію в зручний для вас день і час.</p>
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



	<?php include('../includes/form_callback.php'); ?>

<?php include('../includes/footer_ua.php'); ?>
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
